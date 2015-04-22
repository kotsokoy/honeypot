<?php

/* GGGNoticesBundle:Default:header_appareil.html.twig */
class __TwigTemplate_8a71007d57a180ab8eb3e4d0471b9fa61cdb0461436084e5bfc1094874ab97af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'h1' => array($this, 'block_h1'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"header\"><!-- On aurait pu mettre une balise <header> mais IE 8 ne connait pas...a débattre (question: POV Gooogle, Yahoo, Bing pour le referencement ? )-->

<span class=\"wykoo\">
<a href=\"http://www.wykoo.com\" title=\"Wykoo, faites durer vos appareils et économisez\">
<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/images/logo_happy.png"), "html", null, true);
        echo "\" 
\t alt=\"logo\" 
\t title=\"bienvenue sur mon-aspirateur.fr\" width=\"120px\" height=\"42px\"/>
<i>Faite durer vos appareils et économisez</i>
</a>
</span>

";
        // line 12
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 13
            echo "<div class=\"log\">Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
<br/>
<a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" title=\"se déconnecter\">déconnexion</a>
</div>
";
        }
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('h1', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('menu', $context, $blocks);
        // line 39
        echo "
</div><!-- FIN <div id=\"header\"> -->";
    }

    // line 19
    public function block_h1($context, array $blocks = array())
    {
        // line 20
        echo "<h1>
Trouvez rapidement la notice de votre aspirateur
</h1>
";
    }

    // line 25
    public function block_menu($context, array $blocks = array())
    {
        // line 26
        echo "
<nav>

<ul class=\"menu\">
<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("ggg_notices_homepage");
        echo "\" \ttitle=\"retour à l'accueil\">Accueil</a></li>
<li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\" \ttitle=\"trier par marques\">Marques</a></li>
<li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\"  title=\"trier par catégories\">Catégories</a></li>
</ul>


</nav>

";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:header_appareil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 32,  89 => 31,  85 => 30,  79 => 26,  76 => 25,  69 => 20,  66 => 19,  61 => 39,  59 => 25,  56 => 24,  54 => 19,  51 => 18,  45 => 15,  39 => 13,  37 => 12,  27 => 5,  21 => 1,);
    }
}
