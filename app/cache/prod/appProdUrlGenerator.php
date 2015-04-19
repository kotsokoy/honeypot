<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'ggg_user_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'GGG\\Bundle\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ggg_user_inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GGG\\Bundle\\UserBundle\\Controller\\DefaultController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ggg_notices_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ggg_notices_marques' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::listemarquesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/marques',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ggg_notices_marques_nom' => array (  0 =>   array (    0 => 'nom',  ),  1 =>   array (    '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::marquesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nom',    ),    1 =>     array (      0 => 'text',      1 => '/marques',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ggg_notices_categories' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::listecategoriesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ggg_notices_categories_nom' => array (  0 =>   array (    0 => 'nom',  ),  1 =>   array (    '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::categoriesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nom',    ),    1 =>     array (      0 => 'text',      1 => '/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ggg_notices_appareil_id' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::appareilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/appareil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ggg_notices_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GGG\\Bundle\\NoticesBundle\\Controller\\DefaultController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GGG\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GGG\\Bundle\\UserBundle\\Controller\\SecurityController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
