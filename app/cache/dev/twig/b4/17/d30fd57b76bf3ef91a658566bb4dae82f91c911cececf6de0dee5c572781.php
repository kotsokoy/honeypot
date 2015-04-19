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
            'h1' => array($this, 'block_h1'),
            'connexion' => array($this, 'block_connexion'),
            'wrapper' => array($this, 'block_wrapper'),
            'content' => array($this, 'block_content'),
            'menu' => array($this, 'block_menu'),
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
        echo " | Notices et manuels d'utilisation pour aspirateurs
</title>

</head>
<body>

<header>
<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/images/logo_happy.png"), "html", null, true);
        echo "\" 
\t alt=\"logo\" 
\t title=\"bienvenue sur mon-aspirateur.fr\"/>

";
        // line 24
        $this->displayBlock('h1', $context, $blocks);
        // line 29
        echo "

";
        // line 31
        $this->displayBlock('connexion', $context, $blocks);
        // line 57
        echo "

</header>

<div class=\"wrapper\">
";
        // line 62
        $this->displayBlock('wrapper', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('js', $context, $blocks);
        // line 104
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
        echo "mon-aspirateur.net";
    }

    // line 24
    public function block_h1($context, array $blocks = array())
    {
        // line 25
        echo "<h1>
Trouvez la notice de votre aspirateur en quelques clics
</h1>
";
    }

    // line 31
    public function block_connexion($context, array $blocks = array())
    {
        // line 32
        echo "<div class=\"log\">

";
        // line 34
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 35
            echo "<div>Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
<br/>
<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" title=\"se déconnecter\">déconnexion</a>
</div>
";
        } else {
            // line 40
            echo "
";
            // line 41
            if (array_key_exists("error", $context)) {
                // line 42
                echo "<p class=\"erreur\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
                echo "</p>
";
            }
            // line 44
            echo "
<form action=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
<input type=\"text\" name=\"_username\" placeholder=\"pseudo ou mail\" />
<input type=\"password\" name=\"_password\" placeholder=\"password\" />
<input type=\"submit\" value=\"Connexion\"/>
vous n'avez pas encore de compte ? <a href=\" ";
            // line 49
            echo $this->env->getExtension('routing')->getPath("ggg_user_inscription");
            echo "\" title=\"page des inscriptions\">inscrivez-vous</a>
</form>


";
        }
        // line 54
        echo "
</div>
";
    }

    // line 62
    public function block_wrapper($context, array $blocks = array())
    {
        // line 63
        echo "

";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 66
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "


";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "
</div><!-- fin wrapper-->

";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        // line 72
        echo "
<div id=\"recherches\">
Entrez le nom ou la référence de votre aspirateur:
<div id=\"noRes\">Aucun résultats</div>
<input name=\"motif\" id=\"motif\" type=\"search\" placeholder=\"Exemples: PHILIPS, MV5 PREMIUM,... \"/>
<ul id=\"propositions\">
</ul>
</div>

Ou retrouvez votre aspirateur par sa marque ou sa catégorie:


";
        // line 84
        $this->displayBlock('menu', $context, $blocks);
        // line 93
        echo "

";
    }

    // line 84
    public function block_menu($context, array $blocks = array())
    {
        // line 85
        echo "
<ul class=\"menu\">

<li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("ggg_notices_marques");
        echo "\" \ttitle=\"trier par marques\">Marques</a></li>
<li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories");
        echo "\"  title=\"trier par catégories\">Catégories</a></li>
</ul>

";
    }

    // line 101
    public function block_js($context, array $blocks = array())
    {
        // line 102
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
        return array (  250 => 102,  247 => 101,  239 => 89,  235 => 88,  230 => 85,  227 => 84,  221 => 93,  219 => 84,  205 => 72,  202 => 71,  195 => 96,  193 => 71,  188 => 68,  179 => 66,  175 => 65,  171 => 63,  168 => 62,  162 => 54,  154 => 49,  147 => 45,  144 => 44,  138 => 42,  136 => 41,  133 => 40,  127 => 37,  121 => 35,  119 => 34,  115 => 32,  112 => 31,  105 => 25,  102 => 24,  96 => 13,  91 => 8,  88 => 7,  83 => 104,  81 => 101,  78 => 100,  76 => 62,  69 => 57,  67 => 31,  63 => 29,  61 => 24,  54 => 20,  44 => 13,  37 => 10,  35 => 7,  27 => 1,);
    }
}
