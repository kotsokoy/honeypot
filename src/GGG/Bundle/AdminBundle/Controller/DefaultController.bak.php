<?php

namespace GGG\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use GGG\Bundle\NoticesBundle\Entity\Marque;
use GGG\Bundle\NoticesBundle\Entity\Categorie;
use GGG\Bundle\NoticesBundle\Entity\Appareil;
use GGG\Bundle\NoticesBundle\Entity\Notice;


class DefaultController extends Controller
{
    

    public function indexAction(Request $request){

    	if( $this->get('security.context')->isGranted('ROLE_ADMIN') ){
        	return $this->render('GGGAdminBundle:Default:index.html.twig');
    	}
    	else{
    		$session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
    		return $this->redirect($this->generateUrl('ggg_notices_homepage'));
    	}
    }

    /****** Utilisateurs *******/
    public function usersAction(Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('GET') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGUserBundle:User');
            $users = $repo->findAll();
            return $this->render('GGGAdminBundle:Default:users.html.twig',array('users' => $users));
        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }

    public function userDeleteAction($id, Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('DELETE') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGUserBundle:User');
            $user = $repo->find($id);

            $manager->remove($user);
            $manager->flush();

            /* Si c'est de l'AJAX ( pour le site ) */
            if( $request->isXMLHttpRequest() ){

                return new Response('delete effectué avec succès');

            }
        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }



    public function userUpdateAction($id, Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('GET') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGUserBundle:User');
            $user = $repo->find($id);


            return $this->render('GGGAdminBundle:Default:userUpdate.html.twig',array('user' => $user));

        }
        else if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('PUT') ){

            /* 
            on recupere les parametres saisis par l'admin avec $request->getContent(),
            le parametres ont la forme d'une queryString (id=id&nom=nom&...), on utilise donc parse_str pour les mettre sous forme de tableau associatif
            */
            
            parse_str($request->getContent(),$query);

            /* on recupere l'appareil a modifier grace a son id */
            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGUserBundle:User');
            $user = $repo->find($id);

            /* puis on donne a l'appreil les nouvelles valeurs avec les parametres */
            if ( $query['nom'] ){
            $user->setUsername($query['nom']);
            }

            if( $query['email']){
            $user->setEmail($query['email']);


            }

            $manager->persist($user);
            $manager->flush();
            return new Response('modifications effectuées');

        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }


    /******* Appareils *******/
    public function appareilsAction(Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('GET') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Appareil');
            $appareils = $repo->findAll();
            return $this->render('GGGAdminBundle:Default:appareils.html.twig',array('appareils' => $appareils));
        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }


    public function appareilDeleteAction($id, Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('DELETE') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Appareil');
            $appareil = $repo->find($id);

            $manager->remove($appareil);
            $manager->flush();

            /* Si c'est de l'AJAX ( pour le site ) */
            if( $request->isXMLHttpRequest() ){

                return new Response('delete effectué avec succès');

            }
        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }

    public function appareilUpdateAction($id, Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('GET') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Appareil');
            $appareil = $repo->find($id);

            $repo = $manager->getRepository('GGGNoticesBundle:Marque');
            $marques = $repo->findAll();

            $repo = $manager->getRepository('GGGNoticesBundle:Categorie');
            $categories = $repo->findAll();

            $repo = $manager->getRepository('GGGNoticesBundle:Notice');
            $notices = $repo->findAll();



            return $this->render('GGGAdminBundle:Default:appareilUpdate.html.twig',array('appareil'     => $appareil,
                                                                                         'marques'      => $marques,
                                                                                         'categories'   => $categories,
                                                                                         'notices'      => $notices));

        }
        else if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('PUT') ){

            /* 
            on recupere les parametres saisis par l'admin avec $request->getContent(),
            le parametres ont la forme d'une queryString (id=id&nom=nom&...), on utilise donc parse_str pour les mettre sous forme de tableau associatif
            */
            
            parse_str($request->getContent(),$query);

            /* on recupere l'appareil a modifier grace a son id */
            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Appareil');
            $appareil = $repo->find($id);

            /* puis on donne a l'appreil les nouvelles valeurs avec les parametres */
            if ( $query['nom'] ){
            $appareil->setNom($query['nom']);
            }

            if( $query['photo_nom']){
            $appareil->setPhoto($query['photo_nom']);

            $photo = $query['photo'];

            /* le fichier est corrompu a l'arrivée dans la plupart des cas (photo, pdf), un petit fichier texte fonctionne bien par contre */
            $f = fopen('bundles/gggnotices/images/'.$query['photo_nom'], 'w');
            fputs($f,file_get_contents($photo));
            fclose($f);
            }

            /* on recupere la marque et on la donne à l'appareil */
            $repo = $manager->getRepository('GGGNoticesBundle:Marque');
            $marque = $repo->find($query['marque']);

            $appareil->setMarque($marque);
            
            /* on recupere la categorie et on la donne à l'appareil */
            $repo = $manager->getRepository('GGGNoticesBundle:Categorie');
            $categorie = $repo->find($query['categorie']);

            $appareil->setCategorie($categorie);
            
            /* on recupere la notice et on la donne à l'appareil */
            $repo = $manager->getRepository('GGGNoticesBundle:Notice');
            $notice = $repo->find($query['notice']);

            $appareil->setNotice($notice);


            /* gestion de la photo (sous forme de fichier) de l'appareil */

            $manager->persist($appareil);
            $manager->flush();
            return new Response('modfications effectuées');

        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }



    public function appareilPostAction(Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('POST') ){


            parse_str($request->getContent(),$query);


            $manager = $this->getDoctrine()->getManager();

            $appareil = new Appareil();

            /* puis on donne a l'appreil les nouvelles valeurs avec les parametres */
            if ( $query['nom'] ){
            $appareil->setNom($query['nom']);
            }
            else{
                return new Response('echec de l\'ajout: vous devez saisir un nom');
            }

            if( $query['photo_nom']){
            $appareil->setPhoto($query['photo_nom']);

            $photo = $query['photo'];

            /* le fichier est corrompu a l'arrivée dans la plupart des cas (photo, pdf), un petit fichier texte fonctionne bien par contre */
            $f = fopen('bundles/gggnotices/images/'.$query['photo_nom'], 'w');
            fputs($f,file_get_contents($photo));
            fclose($f);
            }
            else{
                return new Response('echec de l\'ajout: vous devez choisir une photo');
            }

            /* on recupere la marque et on la donne à l'appareil */
            $repo = $manager->getRepository('GGGNoticesBundle:Marque');
            $marque = $repo->find($query['marque']);

            $appareil->setMarque($marque);
            
            /* on recupere la categorie et on la donne à l'appareil */
            $repo = $manager->getRepository('GGGNoticesBundle:Categorie');
            $categorie = $repo->find($query['categorie']);

            $appareil->setCategorie($categorie);
            
            /* on recupere la notice et on la donne à l'appareil */
            $repo = $manager->getRepository('GGGNoticesBundle:Notice');
            $notice = $repo->find($query['notice']);

            $appareil->setNotice($notice);


            /* gestion de la photo (sous forme de fichier) de l'appareil */


            $manager->persist($appareil);
            $manager->flush();
            return new Response('ajout effectué');

        }
    }


    /****** Marques ********/
    public function marquesAction(Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('GET') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Marque');
            $marques = $repo->findAll();
            return $this->render('GGGAdminBundle:Default:marques.html.twig',array('marques' => $marques));
        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }

    public function marqueDeleteAction($id, Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('DELETE') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Marque');
            $marque = $repo->find($id);

            $manager->remove($marque);
            $manager->flush();

            /* Si c'est de l'AJAX ( pour le site ) */
            if( $request->isXMLHttpRequest() ){

                return new Response('delete effectué avec succès');

            }
        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }



    public function marqueUpdateAction($id, Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('GET') ){


            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Marque');
            $marque = $repo->find($id);



            return $this->render('GGGAdminBundle:Default:marqueUpdate.html.twig',array('marque' => $marque));

        }
        else if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('PUT') ){

            /* 
            on recupere les parametres saisis par l'admin avec $request->getContent(),
            le parametres ont la forme d'une queryString (id=id&nom=nom&...), on utilise donc parse_str pour les mettre sous forme de tableau associatif
            */
            
            parse_str($request->getContent(),$query);

            /* on recupere l'appareil a modifier grace a son id */
            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Marque');
            $marque = $repo->find($id);

            /* puis on donne a l'appreil les nouvelles valeurs avec les parametres */
            if ( $query['nom'] ){
            $marque->setNom($query['nom']);
            }

            if( $query['logo_nom'] ){
            $marque->setLogo($query['logo_nom']);

            $logo = $query['logo'];

            /* le fichier est corrompu a l'arrivée dans la plupart des cas (photo, pdf), un petit fichier texte fonctionne bien par contre */
            $f = fopen('bundles/gggnotices/images/'.$query['logo_nom'], 'w');
            fputs($f,file_get_contents($logo));
            fclose($f);
            }


            $manager->persist($marque);
            $manager->flush();
            return new Response('modfications effectuées');

        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }


    public function marquePostAction(Request $request){
        
        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('POST') ){

            parse_str($request->getContent(),$query);

            $marque = new Marque();

            if( $query['nom'] ){
                $marque->setnom($query['nom']);
            }
            else{
                return new Response('echec de l\'ajout: vous devez sasir un nom');
            }

            if( $query['logo_nom'] ){
                
                $marque->setLogo($query['logo_nom']);

                $logo = $query['logo'];

            /* le fichier est corrompu a l'arrivée dans la plupart des cas (photo, pdf), un petit fichier texte fonctionne bien par contre */
                $f = fopen('bundles/gggnotices/images/'.$query['logo_nom'], 'w');
                fputs($f,file_get_contents($logo));
                fclose($f);
            }
            else{
                $marque->setLogo('');
            }


            $manager = $this->getDoctrine()->getManager();

            $manager->persist($marque);

            $manager->flush();


            return new Response('ajout effectué');
        }
    }


    /******* Categories ********/
    public function categoriesAction(Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('GET') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Categorie');
            $categories = $repo->findAll();
            return $this->render('GGGAdminBundle:Default:categories.html.twig',array('categories' => $categories));
        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }

    public function categorieDeleteAction($id, Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('DELETE') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Categorie');
            $categorie = $repo->find($id);

            $manager->remove($categorie);
            $manager->flush();

            /* Si c'est de l'AJAX ( pour le site ) */
            if( $request->isXMLHttpRequest() ){

                return new Response('delete effectué avec succès');

            }
        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }



    public function categorieUpdateAction($id, Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('GET') ){


            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Categorie');
            $categorie = $repo->find($id);



            return $this->render('GGGAdminBundle:Default:categorieUpdate.html.twig',array('categorie' => $categorie));

        }
        else if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('PUT') ){

            /* 
            on recupere les parametres saisis par l'admin avec $request->getContent(),
            le parametres ont la forme d'une queryString (id=id&nom=nom&...), on utilise donc parse_str pour les mettre sous forme de tableau associatif
            */
            
            parse_str($request->getContent(),$query);

            /* on recupere l'appareil a modifier grace a son id */
            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Categorie');
            $categorie = $repo->find($id);

            /* puis on donne a l'appreil les nouvelles valeurs avec les parametres */
            if ( $query['nom'] ){
            $categorie->setNom($query['nom']);
            }


            $manager->persist($categorie);
            $manager->flush();
            return new Response('modfications effectuées');

        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }


    public function categoriePostAction(Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('POST') ){


            
            parse_str($request->getContent(),$query);

            $manager = $this->getDoctrine()->getManager();

            $categorie = new Categorie();

            /* puis on donne a l'appreil les nouvelles valeurs avec les parametres */
            if ( $query['nom'] ){
            $categorie->setNom($query['nom']);
            }
            else{
                return new response('echec de l\'ajout: vous devez saisir un nom');
            }


            $manager->persist($categorie);
            $manager->flush();
            return new Response('ajout effectué');

        }
    }



    /******** Notices ********/
    public function noticesAction(Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('GET') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Notice');
            $notices = $repo->findAll();
            return $this->render('GGGAdminBundle:Default:notices.html.twig',array('notices' => $notices));
        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }

    public function noticeDeleteAction($id, Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('DELETE') ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Notice');
            $notice = $repo->find($id);

            $manager->remove($notice);
            $manager->flush();

            /* Si c'est de l'AJAX ( pour le site ) */
            if( $request->isXMLHttpRequest() ){

                return new Response('delete effectué avec succès');

            }
        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }


    public function noticeUpdateAction($id, Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('GET') ){


            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Notice');
            $notice = $repo->find($id);



            return $this->render('GGGAdminBundle:Default:noticeUpdate.html.twig',array('notice' => $notice));

        }
        else if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('PUT') ){

            /* 
            on recupere les parametres saisis par l'admin avec $request->getContent(),
            le parametres ont la forme d'une queryString (id=id&nom=nom&...), on utilise donc parse_str pour les mettre sous forme de tableau associatif
            */
            
            parse_str($request->getContent(),$query);

            /* on recupere la notice a modifier grace a son id */
            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Notice');
            $notice = $repo->find($id);

            /* puis on donne a la notice les nouvelles valeurs avec les parametres */

            if( $query['langue'] ){
                $notice->setLangue($query['langue']);
            }

            if( $query['fichier_nom'] ){
            $notice->setFichier($query['fichier_nom']);

            /* sur notice on essaie cette façon de recuperer le fichier mais rien y fait la copie est corrompue a l'arrivée */
            $fichier = explode(',',$query['fichier']);

            $fichier = $fichier[1];

            $fichier = base64_decode($fichier);

            $f = fopen('bundles/gggnotices/notices/'.$query['fichier_nom'], 'w');
            fputs($f,$fichier);
            fclose($f);
            }


            $manager->persist($notice);
            $manager->flush();
            return new Response('modfications effectuées');

        }
        else{
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
            return $this->redirect($this->generateUrl('ggg_notices_homepage'));
        }
    }


    public function noticePostAction(Request $request){

        if( $this->get('security.context')->isGranted('ROLE_ADMIN') && $request->isMethod('POST') ){


            $manager = $this->getDoctrine()->getManager();

            $notice = new Notice();

            
            parse_str($request->getContent(),$query);


            /* puis on donne a la notice les nouvelles valeurs avec les parametres */

            if( $query['langue'] ){
                $notice->setLangue($query['langue']);
            }
            else{
                return new Response('echec de l\'ajout: vous devez saisir une langue');
            }

            if( $query['fichier_nom'] ){
            $notice->setFichier($query['fichier_nom']);

            /* sur notice on essaie cette façon de recuperer le fichier mais rien y fait la copie est corrompue a l'arrivée */
            $fichier = explode(',',$query['fichier']);

            $fichier = $fichier[1];

            $fichier = base64_decode($fichier);

            $f = fopen('bundles/gggnotices/notices/'.$query['fichier_nom'], 'w');
            fputs($f,$fichier);
            fclose($f);
            }
            else{
                return new Response('echec de l\'ajout: vous devez saisir un fichier');
            }


            $manager->persist($notice);
            $manager->flush();
            return new Response('ajout effectué');

        }
    }


}//fin controller

