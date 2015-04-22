<?php

/* GGGNoticesBundle:Default:appareil.html.twig */
class __TwigTemplate_48035c58f4c0e617c7ad6bff3d58e3e05cf82a31d9b66c9f7f55145c03f66f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'wrapper' => array($this, 'block_wrapper'),
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
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "

<title>
";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo " 
</title>

</head>
<body>

";
        // line 22
        $this->env->loadTemplate("GGGNoticesBundle:Default:header_appareil.html.twig")->display($context);
        // line 23
        echo "

<div class=\"wrapper\">
";
        // line 26
        $this->displayBlock('wrapper', $context, $blocks);
        // line 103
        echo "
";
        // line 104
        $this->env->loadTemplate("GGGNoticesBundle:Default:footer.html.twig")->display($context);
        // line 105
        echo "

";
        // line 107
        $this->displayBlock('js', $context, $blocks);
        // line 110
        echo "
</body>
</html>";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/css/style_appareil.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "Notice pour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "marque", array()), "nom", array()), "html", null, true);
        echo " | mon-aspirateur.net
";
    }

    // line 26
    public function block_wrapper($context, array $blocks = array())
    {
        // line 27
        echo "

";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "succes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            echo "<p class=\"info\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "




<div class=\"appareil\">

<img src=\"/bundles/gggnotices/images/";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "photo", array()), "html", null, true);
        echo ".jpg\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array()), "html", null, true);
        echo "\"/>


";
        // line 46
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") && $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : null), "notice", array(), "any", false, true), "fichier", array(), "any", true, true))) {
            // line 47
            echo "
<a href=\"/bundles/gggnotices/notices/";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "notice", array()), "fichier", array()), "html", null, true);
            echo ".pdf\" title=\"notice pour ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array()), "html", null, true);
            echo "\">
Télécharger la notice de ";
            // line 49
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "categorie", array()), "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "marque", array()), "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array())), "html", null, true);
            echo "
</a>

";
        } elseif ((($this->env->getExtension('security')->isGranted("ROLE_USER") == false) && $this->getAttribute($this->getAttribute(        // line 52
(isset($context["appareil"]) ? $context["appareil"] : null), "notice", array(), "any", false, true), "fichier", array(), "any", true, true))) {
            // line 53
            echo "
<div class=\"info\">
<h2>Notice pour ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array()), "html", null, true);
            echo " de ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "marque", array()), "nom", array())), "html", null, true);
            echo "</h2>
<p>veuillez vous connecter pour consulter ou télécharger le reste de la notice</p>
<form action=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
<input type=\"text\" name=\"_username\" placeholder=\"pseudo ou mail\" />
<input type=\"password\" name=\"_password\" placeholder=\"password\" />
<input type=\"submit\" value=\"Connexion\"/>

</form>
vous n'avez pas encore de compte ? <a href=\" ";
            // line 63
            echo $this->env->getExtension('routing')->getPath("ggg_user_inscription");
            echo "\" title=\"page des inscriptions\">inscrivez-vous</a>
</div>
";
        } elseif (($this->env->getExtension('security')->isGranted("ROLE_USER") &&  !$this->getAttribute($this->getAttribute(        // line 65
(isset($context["appareil"]) ? $context["appareil"] : null), "notice", array(), "any", false, true), "fichier", array(), "any", true, true))) {
            // line 66
            echo "
<div class=\"error\">
Nous n'avons pas encore de notice pour 
";
            // line 69
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "categorie", array()), "nom", array())), "html", null, true);
            echo " 
";
            // line 70
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "marque", array()), "nom", array())), "html", null, true);
            echo " 
";
            // line 71
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array())), "html", null, true);
            echo "
<br/>
<a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_user_alerte", array("id" => $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "id", array()))), "html", null, true);
            echo "\">je souhaite être averti quand la notice sera disponible</a>
</p>


";
        } else {
            // line 78
            echo "
<div class=\"info\">
Nous n'avons pas encore de notice pour 
";
            // line 81
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "categorie", array()), "nom", array())), "html", null, true);
            echo " 
";
            // line 82
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "marque", array()), "nom", array())), "html", null, true);
            echo " 
";
            // line 83
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array())), "html", null, true);
            echo "
<br/>
Connectez-vous pour faire une demande d'alerte
<form action=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
<input type=\"text\" name=\"_username\" placeholder=\"pseudo ou mail\" />
<input type=\"password\" name=\"_password\" placeholder=\"password\" />
<input type=\"submit\" value=\"Connexion\"/>
</div>


";
        }
        // line 94
        echo "
</div>



</div><!-- fin wrapper-->


";
    }

    // line 107
    public function block_js($context, array $blocks = array())
    {
        // line 108
        echo "
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:appareil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 108,  268 => 107,  256 => 94,  245 => 86,  239 => 83,  235 => 82,  231 => 81,  226 => 78,  218 => 73,  213 => 71,  209 => 70,  205 => 69,  200 => 66,  198 => 65,  193 => 63,  184 => 57,  177 => 55,  173 => 53,  171 => 52,  161 => 49,  155 => 48,  152 => 47,  150 => 46,  142 => 43,  133 => 36,  124 => 34,  120 => 33,  117 => 32,  108 => 30,  104 => 29,  100 => 27,  97 => 26,  88 => 15,  85 => 14,  78 => 9,  75 => 8,  69 => 110,  67 => 107,  63 => 105,  61 => 104,  58 => 103,  56 => 26,  51 => 23,  49 => 22,  41 => 16,  39 => 14,  34 => 11,  32 => 8,  23 => 1,);
    }
}
