<?php

/* GGGNoticesBundle:Default:layout.html.twig */
class __TwigTemplate_b417d30fd57b76bf3ef91a658566bb4dae82f91c911cececf6de0dee5c572781 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'connexion' => array($this, 'block_connexion'),
            'menu' => array($this, 'block_menu'),
            'wrapper' => array($this, 'block_wrapper'),
            'h1' => array($this, 'block_h1'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

<meta charset=\"ISO-8859-1\"/>

";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/css/style.css"), "html", null, true);
        echo "\"/>

<title>
";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 14
        echo "</title>

</head>
<body>

<header>
<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/images/logo_happy.png"), "html", null, true);
        echo "\" 
\t alt=\"logo\" 
\t title=\"bienvenue sur mon-aspirateur.fr\"/>
<span class=\"titre\">Faîtes durer vos appareils et économisez</span>



";
        // line 27
        $this->displayBlock('connexion', $context, $blocks);
        // line 53
        echo "

";
        // line 55
        $this->displayBlock('menu', $context, $blocks);
        // line 66
        echo "

</header>

<div class=\"wrapper\">
";
        // line 71
        $this->displayBlock('wrapper', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('js', $context, $blocks);
        // line 106
        echo "</body>
</html>";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Honeypot-1";
    }

    // line 27
    public function block_connexion($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"log\">

";
        // line 30
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 31
            echo "<div>Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "
<br/>
<a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" title=\"se déconnecter\">déconnexion</a>
</div>
";
        } else {
            // line 36
            echo "
";
            // line 37
            if (array_key_exists("error", $context)) {
                // line 38
                echo "<p class=\"error\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
                echo "</p>
";
            }
            // line 40
            echo "
<form action=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
<input type=\"text\" name=\"_username\" placeholder=\"pseudo ou mail\" />
<input type=\"password\" name=\"_password\" placeholder=\"password\" />
<input type=\"submit\" value=\"Connexion\"/>
vous n'avez pas encore de compte ? <a href=\" ";
            // line 45
            echo $this->env->getExtension('routing')->getPath("ggg_user_inscription");
            echo "\" title=\"page des inscriptions\">inscrivez-vous</a>
</form>


";
        }
        // line 50
        echo "
</div>
";
    }

    // line 55
    public function block_menu($context, array $blocks = array())
    {
        // line 56
        echo "
<div class=\"menu\">
<ul>
<li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("ggg_notices_homepage");
        echo "\" \ttitle=\"retour à l'accueil\">Accueil</a></li>
<li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\" \ttitle=\"trier par marques\">Marques</a></li>
<li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\"  title=\"trier par catégories\">Catégories</a></li>
</ul>
</div>

";
    }

    // line 71
    public function block_wrapper($context, array $blocks = array())
    {
        // line 72
        echo "


";
        // line 75
        $this->displayBlock('h1', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "





";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 98
        echo "
</div><!-- fin wrapper-->

";
    }

    // line 75
    public function block_h1($context, array $blocks = array())
    {
        // line 76
        echo "<h1>
Trouvez la notice de votre appareil en 3 clics
</h1>
";
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
        // line 91
        echo "
<div id=\"recherches\">
<input name=\"motif\" id=\"motif\" type=\"search\"/>
<div id=\"propositions\"></div>
</div>

";
    }

    // line 103
    public function block_js($context, array $blocks = array())
    {
        // line 104
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/recherches.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 104,  252 => 103,  242 => 91,  239 => 90,  232 => 76,  229 => 75,  222 => 98,  220 => 90,  212 => 84,  203 => 82,  199 => 81,  196 => 80,  194 => 75,  189 => 72,  186 => 71,  177 => 61,  173 => 60,  169 => 59,  164 => 56,  161 => 55,  155 => 50,  147 => 45,  140 => 41,  137 => 40,  131 => 38,  129 => 37,  126 => 36,  120 => 33,  114 => 31,  112 => 30,  108 => 28,  105 => 27,  99 => 13,  94 => 8,  91 => 7,  86 => 106,  84 => 103,  81 => 102,  79 => 71,  72 => 66,  70 => 55,  66 => 53,  64 => 27,  54 => 20,  46 => 14,  44 => 13,  37 => 10,  35 => 7,  27 => 1,);
    }
}
