<?php

/* GGGNoticesBundle:Default:header.html.twig */
class __TwigTemplate_bcb59f435137603e3e1b0a0f05cadd4c66d145b2d8af5d6b1525c9527efda7f7 extends Twig_Template
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
        // line 14
        $this->env->loadTemplate("GGGNoticesBundle:Default:connexion.html.twig")->display($context);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('h1', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('menu', $context, $blocks);
        // line 36
        echo "
</div><!-- FIN <div id=\"header\"> -->";
    }

    // line 16
    public function block_h1($context, array $blocks = array())
    {
        // line 17
        echo "<h1>
Trouvez rapidement la notice de votre aspirateur
</h1>
";
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "
<nav>

<ul class=\"menu\">
<li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("ggg_notices_homepage");
        echo "\" \ttitle=\"retour à l'accueil\">Accueil</a></li>
<li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\" \ttitle=\"trier par marques\">Marques</a></li>
<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\"  title=\"trier par catégories\">Catégories</a></li>
</ul>


</nav>

";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  79 => 28,  75 => 27,  69 => 23,  66 => 22,  59 => 17,  56 => 16,  51 => 36,  49 => 22,  46 => 21,  44 => 16,  41 => 15,  39 => 14,  27 => 5,  21 => 1,);
    }
}
