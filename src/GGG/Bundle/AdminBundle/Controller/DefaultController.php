<?php

namespace GGG\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
    	if( $this->get('security.context')->isGranted('ROLE_ADMIN') ){
        	return $this->render('GGGAdminBundle:Default:index.html.twig');
    	}
    	else{
    		$session = $request->getSession();
            $session->getFlashBag()->add('erreur','accès refusé');
    		return $this->redirect($this->generateUrl('ggg_notices_homepage'));
    	}
    }
}
