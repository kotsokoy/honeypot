<?php

/* GGGNoticesBundle:Default:header2.html.twig */
class __TwigTemplate_e70efdb6e28a2942e1455e86f7467e893b9d68f8bc2e613f3242914b124a48b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'connexion' => array($this, 'block_connexion'),
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
        // line 16
        $this->displayBlock('connexion', $context, $blocks);
        // line 42
        echo "

";
        // line 44
        $this->displayBlock('h1', $context, $blocks);
        // line 49
        echo "


";
        // line 52
        $this->displayBlock('menu', $context, $blocks);
        // line 75
        echo "
</div><!-- FIN <div id=\"header\"> -->";
    }

    // line 16
    public function block_connexion($context, array $blocks = array())
    {
        // line 17
        echo "<span class=\"log\">

";
        // line 19
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 20
            echo "<div>Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
<br/>
<a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" title=\"se déconnecter\">déconnexion</a>
</div>
";
        } else {
            // line 25
            echo "
";
            // line 26
            if (array_key_exists("error", $context)) {
                // line 27
                echo "<p class=\"erreur\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
                echo "</p>
";
            }
            // line 29
            echo "
<form action=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
<input type=\"text\" name=\"_username\" placeholder=\"pseudo ou mail\" />
<input type=\"password\" name=\"_password\" placeholder=\"password\" />
<input type=\"submit\" value=\"Connexion\"/>
vous n'avez pas encore de compte ? <a href=\" ";
            // line 34
            echo $this->env->getExtension('routing')->getPath("ggg_user_inscription");
            echo "\" title=\"page des inscriptions\">inscrivez-vous</a>
</form>


";
        }
        // line 39
        echo "
</span>
";
    }

    // line 44
    public function block_h1($context, array $blocks = array())
    {
        // line 45
        echo "<h1>
Trouvez rapidement la notice de votre aspirateur
</h1>
";
    }

    // line 52
    public function block_menu($context, array $blocks = array())
    {
        // line 53
        echo "
<nav>

<ul class=\"menu\">
<li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("ggg_notices_homepage");
        echo "\" \ttitle=\"retour à l'accueil\">Accueil</a></li>
<li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\" \ttitle=\"trier par marques\">Marques</a></li>
<li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\"  title=\"trier par catégories\">Catégories</a></li>
</ul>

<div id=\"recherches\">

<div id=\"noRes\">Aucun résultats</div>
<input name=\"motif\" id=\"motif\" type=\"search\" placeholder=\"Entrer votre recherche\"/>
<img id=\"loupe\"
\t src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/images/loupe.png"), "html", null, true);
        echo "\"
\t alt=\"barre de recherche\"/>

</div>

</nav>

";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:header2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 67,  145 => 59,  141 => 58,  137 => 57,  131 => 53,  128 => 52,  121 => 45,  118 => 44,  112 => 39,  104 => 34,  97 => 30,  94 => 29,  88 => 27,  86 => 26,  83 => 25,  77 => 22,  71 => 20,  69 => 19,  65 => 17,  62 => 16,  57 => 75,  55 => 52,  50 => 49,  48 => 44,  44 => 42,  42 => 16,  28 => 5,  22 => 1,);
    }
}
