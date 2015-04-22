<?php

/* GGGNoticesBundle:Default:header_ins.html.twig */
class __TwigTemplate_c9fbc698afc92db72913990f98b2aad6544fa172d68e4b7ccebe5d939b392e4f extends Twig_Template
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
        // line 13
        $this->displayBlock('h1', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('menu', $context, $blocks);
        // line 43
        echo "
</div><!-- FIN <div id=\"header\"> -->";
    }

    // line 13
    public function block_h1($context, array $blocks = array())
    {
        // line 14
        echo "<h1>
Trouvez rapidement la notice de votre aspirateur
</h1>
";
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "
<nav>

<ul class=\"menu\">
<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ggg_notices_homepage");
        echo "\" \ttitle=\"retour à l'accueil\">Accueil</a></li>
<li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\" \ttitle=\"trier par marques\">Marques</a></li>
<li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\"  title=\"trier par catégories\">Catégories</a></li>
</ul>

<div id=\"recherches\">

<div id=\"noRes\">Aucun résultats</div>
<input name=\"motif\" id=\"motif\" type=\"search\" placeholder=\"Entrer votre recherche\"/>
<img id=\"loupe\"
\t src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/images/loupe.png"), "html", null, true);
        echo "\"
\t alt=\"barre de recherche\"/>

</div>


</nav>

";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:header_ins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  77 => 26,  73 => 25,  69 => 24,  63 => 20,  60 => 19,  53 => 14,  50 => 13,  45 => 43,  43 => 19,  40 => 18,  38 => 13,  27 => 5,  21 => 1,);
    }
}
