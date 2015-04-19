<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // ggg_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ggg_user_homepage')), array (  '_controller' => 'GGG\\Bundle\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // ggg_user_inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'GGG\\Bundle\\UserBundle\\Controller\\DefaultController::inscriptionAction',  '_route' => 'ggg_user_inscription',);
        }

        // ggg_notices_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ggg_notices_homepage');
            }

            return array (  '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ggg_notices_homepage',);
        }

        if (0 === strpos($pathinfo, '/marques')) {
            // ggg_notices_marques
            if ($pathinfo === '/marques') {
                return array (  '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::listemarquesAction',  '_route' => 'ggg_notices_marques',);
            }

            // ggg_notices_marques_nom
            if (preg_match('#^/marques/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ggg_notices_marques_nom')), array (  '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::marquesAction',));
            }

        }

        if (0 === strpos($pathinfo, '/categories')) {
            // ggg_notices_categories
            if ($pathinfo === '/categories') {
                return array (  '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::listecategoriesAction',  '_route' => 'ggg_notices_categories',);
            }

            // ggg_notices_categories_nom
            if (preg_match('#^/categories/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ggg_notices_categories_nom')), array (  '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::categoriesAction',));
            }

        }

        // ggg_notices_appareil_id
        if (0 === strpos($pathinfo, '/appareil') && preg_match('#^/appareil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ggg_notices_appareil_id')), array (  '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::appareilAction',));
        }

        // ggg_notices_recherche
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::rechercheAction',  '_route' => 'ggg_notices_recherche',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'GGG\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'GGG\\Bundle\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
