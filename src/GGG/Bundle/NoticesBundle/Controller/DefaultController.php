<?php

namespace GGG\Bundle\NoticesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//use GGG\Bundle\NoticesBundle\Entity\Categorie;

class DefaultController extends Controller
{
	/*
    public function indexAction($name)
    {
        return $this->render('GGGNoticesBundle:Default:index.html.twig', array('name' => $name));
    }
	*/

	public function indexAction(){
        return $this->render('GGGNoticesBundle:Default:layout.html.twig');
    }


    /**
     * listeMarques() recupere toutes les marques
     */
    public function listeMarquesAction(){

    	$manager   = $this->getDoctrine()->getManager();
    	$repo      = $manager->getRepository('GGGNoticesBundle:Marque');
    	$marques   = $repo->findAll();
    	return $this->render('GGGNoticesBundle:Default:listemarques.html.twig',array("marques" => $marques));
    }

    /**
     * listeCategories() recupere toutes les catégories
     */
    public function listeCategoriesAction(){

    	$manager       = $this->getDoctrine()->getManager();
    	$repo          = $manager->getRepository('GGGNoticesBundle:Categorie');
    	$categories    = $repo->findAll();
    	return $this->render('GGGNoticesBundle:Default:listecategories.html.twig',array("categories" => $categories));
    }




    /**
     * categories($nom) recupere la categorie $nom, puis recupere tous les appareils de la catégorie $nom
     */
    public function categoriesAction($nom, Request $request){

        $manager   = $this->getDoctrine()->getManager();
    	
    	$marques = $manager->getRepository('GGGNoticesBundle:Marque')->findAll();


        /* Création du formulaire */
        /* si on a bien récupéré les marques, on les prend une par une pour stocker leurs noms dans un tableau $choix */
        if( $marques ){
        $choix = array();
        foreach( $marques as $marque ){
            $choix[$marque->getNom()] = $marque->getNom();
        }

        /* on instancie un formulaire */
        $form = $this->get('form.factory')->createBuilder('form');

        /* on crée le contenu du formulaire, ici un bouton select ayant la liste des catégories par nom grâce à $choix */
        $form->add('nom','choice',array('choices' => $choix));

        $form = $form->getForm();

        }

        /* Gestion/Réception du formulaire (après envoi) */
        /* Ceci n'a rien a voir avec la partie juste au dessus qui s'occupe de la création du formulaire */
        $marqueNom = $request->request->get('form');
        
        if( $marqueNom ){
            $marqueNom = $marqueNom['nom'];

            if( $marqueNom == null ){
                $marqueNom = 'Aucune marque sélectionnée';
            }else{
                $repo = $manager->getRepository('GGGNoticesBundle:Marque');
                $marque = $repo->findBy(array("nom" => $marqueNom));
            }
            /* si on n'a pas de categorie on initialise le message d'erreur, sinon on conserve la categorie dans appareilOptions */
            if(!$marque[0]){
                $session = $request->getSession();
                $session->getFlashBag()->add('erreur','Nous n\'avons pas réussi à filtrer avec la marque');
            }
            else{
                $appareilOptions['marque'] = $marque[0];
            }
        }


        /* On cherche la marque qui correspond au nom $nom */
        $repo    = $manager->getRepository('GGGNoticesBundle:Categorie');
        $categorie  = $repo->findBy(array("nom" => $nom));

    	/* on regarde si la categorie demandée existe bien */
    	/* si elle n'existe pas on redirige */
    	if( $categorie == null ){
       // throw new NotFoundHttpException('La catégorie '.$nom.' n\'existe pas.');
        $session = $request->getSession();
        $session->getFlashBag()->add('erreur','Nous n\'avons pas de catégorie <b>'.$nom.'</b> dans notre base de données.');
        return $this->redirect($this->generateUrl('ggg_notices_categories_nom',array("nom"=> $nom)));
    	}
        else{
            $appareilOptions['categorie'] = $categorie[0];
        }

    	/* si la categorie existe on recupere les appareils associés */
    	$repo      = $manager->getRepository('GGGNoticesBundle:Appareil');
    	$appareils = $repo->findBy($appareilOptions);

    	/* on verifie qu'on a bien récupéré des appareils, sinon on redirige */
    	if( $appareils == null ){
       // throw new NotFoundHttpException('Il n\'y a encore aucun appareil pour la catégorie '.$nom);
        $session = $request->getSession();
        $session->getFlashBag()->add('erreur','Il n\'y a pas encore d\'appareil '.strtoupper($marqueNom).' pour la catégorie '.$nom);
        return $this->redirect($this->generateUrl('ggg_notices_categories_nom',array("nom"=>$nom)));
    	}

    	return $this->render('GGGNoticesBundle:Default:categorie.html.twig',array( "appareils"   => $appareils, 
    																               "nom"         => $nom,
                                                                                   "form_filtre" => $form->createView(),
                                                                                   "marqueNom"   => $marqueNom));
    }

    /**
     * marques($nom) recupere la marque $nom, puis recupere tous les appareils de la marque $nom
     * elle récupère également les categories pour créer un champ select afin de trier par catégories
     */
    public function marquesAction($nom, Request $request){
        
        $manager = $this->getDoctrine()->getManager();
        

        $categories = $manager->getRepository('GGGNoticesBundle:Categorie')->findAll();

        /* Création du formulaire */
        /* si on a bien récupéré les catégories, on les prend une par une pour stocker leurs noms dans un tableau $choix */
        if( $categories ){
            $choix = array();
            foreach( $categories as $cat ){
                $choix[$cat->getNom()] = $cat->getNom();
            }

        /* on instancie un formulaire */
        $form = $this->get('form.factory')->createBuilder('form');

        /* on crée le contenu du formulaire, ici un bouton select ayant la liste des catégories par nom grâce à $choix */
        $form->add('nom','choice',array('choices' => $choix));

        $form = $form->getForm();

        }

        /* Gestion/Réception du formulaire (après envoi) */
        /* Ceci n'a rien a voir avec la partie juste au dessus qui s'occupe de la création du formulaire */
        $categorieNom = $request->request->get('form');
        

        if( $categorieNom ){

        $categorieNom = $categorieNom['nom'];

            if( $categorieNom == null ){
                $categorieNom = 'Aucune catégorie sélectionnée';
            }

        $repo = $manager->getRepository('GGGNoticesBundle:Categorie');
        $categorie = $repo->findBy(array("nom" => $categorieNom));

        /* si on n'a pas de categorie on initialise le message d'erreur, sinon on conserve la categorie dans appareilOptions */
            if(!isset($categorie[0])){
                $session = $request->getSession();
                $session->getFlashBag()->add('erreur','Nous n\'avons pas réussi à filtrer avec la catégorie');
            }
            else{
                $appareilOptions['categorie'] = $categorie[0];
            }
        }

        /* On cherche la marque qui correspond au nom $nom */
        $repo    = $manager->getRepository('GGGNoticesBundle:Marque');
        $marque  = $repo->findBy(array("nom" => $nom));

    	/* on regarde si la marque demandée existe bien */
    	/* si elle n'existe pas on redirige */
        /* si elle existe on conserve la marque dans appareilOptions */
    	if( $marque == null ){
        //throw new NotFoundHttpException('Nous n\'avons pas de marque '.$nom.' dans notre base de données.');
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','Nous n\'avons pas de marque <b>'.$nom.'</b> dans notre base de données.');
            return $this->redirect($this->generateUrl('ggg_notices_marques_nom',array("nom"=>$nom)));
    	}
        else{
            $appareilOptions['marque'] = $marque[0];
        }

    	/* si la marque existe on recupere les appareils associés */
    	$repo      = $manager->getRepository('GGGNoticesBundle:Appareil');
    	$appareils = $repo->findBy($appareilOptions);

    	/* on verifie qu'on a bien récupéré des appareils, sinon on redirige */
    	if( $appareils == null ){
        //throw new NotFoundHttpException('Il n\'y a encore aucun appareil pour la marque '.$nom);
        $session = $request->getSession();
        $session->getFlashBag()->add('erreur','Il n\'y a pas encore d\'appareil correspondant pour la marque '.strtoupper($nom));
        return $this->redirect($this->generateUrl('ggg_notices_marques_nom',array("nom"=>$nom)));
    	}

        

    	return $this->render('GGGNoticesBundle:Default:marque.html.twig',array(	"appareils"    => $appareils, 
    																			"nom" 	       => $nom,
                                                                                "form_filtre"  => $form->createView(),
                                                                                "categorieNom" => $categorieNom));
    }


    /**
     * appareilAction($id, Request $request) récupère eun appareil par son $id et le retourne dans la vue
     */
    public function appareilAction($id, Request $request){
        $manager = $this->getDoctrine()->getManager();
        $repo = $manager->getRepository('GGGNoticesBundle:Appareil');

        $appareil = $repo->find($id);

        if( $appareil == null ){
            $session = $request->getSession();
            $session->getFlashBag()->add('erreur','Nous n\'avons pas trouvé l\'appareil correspondant, veuillez nous excuser');
            $referer = $request->server->get('HTTP_REFERER');
            
            if( !empty($referer) ){
                return $this->redirect($request->server->get('HTTP_REFERER'));
            }
            else{
                return $this->redirect($this->generateUrl('ggg_notices_homepage'));
            }

        }
    return $this->render('GGGNoticesBundle:Default:appareil.html.twig', array("appareil" => $appareil));

    }



    public function rechercheAction($motif, Request $request){

        if( $request->isXMLHttpRequest() ){

            $manager = $this->getDoctrine()->getManager();
            $repo = $manager->getRepository('GGGNoticesBundle:Appareil');
            
            $propositions = $repo->recherche($motif);
            //var_dump($propositions);
            /* 
            $propositions est un tableau, l'objet response ne peut retourner que des strings et des objets,
            on retroune donc un objet JSON, qui sera facilement utilisable pour le formatage en JS
            */         
            return new Response(json_encode($propositions));
        }
    }


}
