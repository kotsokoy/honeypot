<?php

namespace GGG\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use GGG\Bundle\UserBundle\Entity\User;

class DefaultController extends Controller{

	/* 

	pour l'inscription je n'utilise pas le formbuilder car la sortie html 

	ne me convient pas et j'ai du mal à obtenir ce que je souhaite 

	*/
	public function inscriptionAction(Request $request){


		/* Réception du formulaire d'inscription avec un objet User */
		
		/* pass_temp et pass_conf_temp pour mettre dans les input en cas de formulaire invalide, 

		sinon il met le mot de passe crypté (plus long) */

		if( $request->isMethod('POST') ){

			$manager = $this->getDoctrine()->getManager();
			$exist = $manager->getRepository('GGGUserBundle:User');

			$user = new User();


			/* cas du login */
			if( $request->request->get('login') ){

				/* on regarde si le login existe deja ou non (il doit être unique) */
				if( $exist->findBy(array("username" => $request->request->get('login'))) ) {

					$session = $request->getSession();
        			$session->getFlashBag()->add('erreur','login '.$request->request->get('login').' déjà existant, veuillez en choisir un autre');
				}
				else{
					$user->setUsername($request->request->get('login'));
				}
			}

			else{
				$session = $request->getSession();
        		$session->getFlashBag()->add('erreur','login mal renseigné');
			}


			/* cas du password */

			/* on regarde si le password et la confirmation on bien été rempli */
			if( $request->request->get('password') && $request->request->get('password_conf') ){
			
				/* ensuite on regarde si les passwords sont identiques */
				if( $request->request->get('password') == $request->request->get('password_conf') ){
					$user->setSalt();
					$user->setPassword($request->request->get('password'));
					
				}
				else{
					$session = $request->getSession();
        			$session->getFlashBag()->add('erreur','les mots de passe sont différents');
				}
			}

			else{
				$session = $request->getSession();
        		$session->getFlashBag()->add('erreur','mots de passe mal renseignés');
			}



			/* cas de l'e-mail */

			/* on regarde si l'email et sa confirmation on bien été renseigné */
			if( $request->request->get('email') && $request->request->get('email_conf') ){

				/* ensuite on regarde si les emails sont identiques */
				if( $request->request->get('email') == $request->request->get('email_conf') ){

					/* et on regarde si l'email existe deja */

					if( $exist->findBy(array("email" => $request->request->get('email'))) ){
					 	$session = $request->getSession();
        				$session->getFlashBag()->add('erreur','l\'e-mail '.$request->request->get('email').' existe déjà, veuillez en choisir un autre');
					}
					else{
						$user->setEmail($request->request->get('email'));
					}
				}
				else{
					$session = $request->getSession();
        			$session->getFlashBag()->add('erreur','les e-mail sont différents');
				}
			}
			else{
				$session = $request->getSession();
        		$session->getFlashBag()->add('erreur','e-mails mal renseignés');				
			}

			/* une fois qu'on a verifié chaque champs on regarde si on a eu des erreurs, 

			si oui on renvoie sur la page inscription avec les valeurs correctes */

		if( $request->getSession()->getFlashBag()->has('erreur') ){

			return $this->render('GGGUserBundle:Default:inscription.html.twig',array('user' => $user,
																					 ));

		}
		else{
			
			$user->setRoles('ROLE_USER');
			
			$user->setCreation(new \DateTime('now'));
			
			$manager = $this->getDoctrine()->getManager();

			$manager->persist($user);
			
			$flush = $manager->flush($user);

			$session = $request->getSession();
        	$session->getFlashBag()->add('succes','Inscription effectuée, vous allez recevoir un mail sur '.$user->getEmail());
        	return $this->render('GGGUserBundle:Default:inscription.html.twig');
        }



		
		}//fin isPost()
		else{
			return $this->render('GGGUserBundle:Default:inscription.html.twig');
		}
	
	}


	public function alerteAction($id, Request $request){
		
		if( $this->get('security.context')->isGranted('ROLE_USER') ){

			$manager = $this->getDoctrine()->getManager();
			$repo = $manager->getRepository('GGGNoticesBundle:Appareil');

			$appareil = $repo->find($id);

			if( $appareil ){
				$alerte = new \GGG\Bundle\UserBundle\Entity\DemandeNotice();
				$alerte->setUser($this->getUser());
				$alerte->setAppareil($appareil);
				$manager->persist($alerte);
				$manager->flush();
			}

			$session = $request->getSession();

			$session->getFlashBag()->add('succes','votre demande a bien été prise en compte');

			$referer = $request->server->get('HTTP_REFERER');
            
            if( !empty($referer) ){
                return $this->redirect($request->server->get('HTTP_REFERER'));
            }
            else{
            	 return $this->render('GGGNoticesBundle:default:layout.html.twig');
            }
		}
		else{
			$session = $request->getSession();
			$session->getFlashBag()->add('erreur','Accès non autorisé, vous devez être connecté');

			return $this->render('GGGNoticesBundle:Default:layout.html.twig');
		}
	}

	/* 
	desinscription, si c'est un GET on affiche juste la page, 

	si c'est un POST c'est qu'on est sur la page et que le formulaire a ete soumis dans ce cas on procede a la suppression du compte */

	public function desinscriptionAction(Request $request){

		if( $request->isMethod('GET') ){
			return $this->render('GGGUserBundle:Default:desinscription.html.twig');
		}

		if( $request->isMethod('POST') ){

			$manager = $this->getDoctrine()->getManager();
			$repo = $manager->getRepository('GGGUserBundle:User');	

			
			if( $request->request->get('login') ){

				/* on regarde si le login saisie, qu'il soit un username ou un e-mail, existe bien */
				if( $repo->findBy(array("username" => $request->request->get('login'))) || $repo->findBy(array("email" => $request->request->get('login'))) ) {

					$login = $request->request->get('login');

				}
				else{
					
					$session = $request->getSession();
        			$session->getFlashBag()->add('erreur','le pseudo ou l\'e-mail renseigné n\'existe pas, aucun compte n\'a été supprimé');
        			return $this->render('GGGUserBundle:Default:desinscription.html.twig');
				}
			}

			else{
				$session = $request->getSession();
        		$session->getFlashBag()->add('erreur','login mal renseigné');
        		return $this->render('GGGUserBundle:Default:desinscription.html.twig');
			}


			/* Cas du password, si on arrive jusque là c'est que le login est valide et qu'il correspond à un compte en base */

			/* On regarde si le password et la confirmation on bien été rempli */
			if( $request->request->get('password') && $request->request->get('password_conf') ){
			
				/* Ensuite on regarde si les passwords sont identiques */

				/* Si oui, on recupere l'utilisateur, puis le salt correspondant à l'utilisateur,
				  	puis on crypte le password, et on verifie que le pass crypté correspond a celui en base */
				if( $request->request->get('password') == $request->request->get('password_conf') ){

					if ( preg_match('/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/',$login) ){
						$user = $repo->findBy(array("email" => $login ))[0];
					}
					else{
						$user = $repo->findBy(array("username" => $login ))[0];
					}

					
					var_dump($user);
					$pass_comp = crypt($request->request->get('password'),$user->getSalt());

					/* si le mot de passe saisie crypté, correspond au mot de passe en base, alors on supprime le compte */
					if ( $pass_comp == $user->getPassword() ){

						$manager->remove($user);
						$manager->flush();

						$session = $request->getSession();
        				$session->getFlashBag()->add('succes','Le compte de '.$login.' a été supprimé.');
        				return $this->render('GGGUserBundle:Default:desinscription.html.twig');
					}
					else{
						$session = $request->getSession();
        				$session->getFlashBag()->add('erreur','le mot de passe ne correspond pas au login, aucun compte n\'a été supprimé');
        				return $this->render('GGGUserBundle:Default:desinscription.html.twig');
					}

					
				}
				else{
					$session = $request->getSession();
        			$session->getFlashBag()->add('erreur','les mots de passe sont différents');
        			return $this->render('GGGUserBundle:Default:desinscription.html.twig');
				}
			}

			else{
				$session = $request->getSession();
        		$session->getFlashBag()->add('erreur','mots de passe mal renseignés');
        		return $this->render('GGGUserBundle:Default:desinscription.html.twig');
			}


		}



	}







}

?>