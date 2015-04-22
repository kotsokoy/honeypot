<?php

/* GGGNoticesBundle:Default:categorie.html.twig */
class __TwigTemplate_ecb8090d6959107590f95f61145adbd1fde0693b02e331d8145dd1c9ff34d138 extends Twig_Template
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
        $this->env->loadTemplate("GGGNoticesBundle:Default:header.html.twig")->display($context);
        // line 23
        echo "

<div class=\"wrapper\">
";
        // line 26
        $this->displayBlock('wrapper', $context, $blocks);
        // line 56
        echo "</div><!-- fin wrapper-->
";
        // line 57
        $this->env->loadTemplate("GGGNoticesBundle:Default:footer.html.twig")->display($context);
        // line 58
        echo "

";
        // line 60
        $this->displayBlock('js', $context, $blocks);
        // line 63
        echo "
</body>
</html>";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/css/style.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "Tous les ";
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " | mon-aspirateur.net
";
    }

    // line 26
    public function block_wrapper($context, array $blocks = array())
    {
        // line 27
        echo "


";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), 'form_start');
        echo "
<h3>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), "nom", array()), 'label', array("label" => "Filtre par marques"));
        echo "</h3>
";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), "nom", array()), 'widget');
        echo "
";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), 'form_end');
        echo "



";
        // line 41
        if ( !(null === (isset($context["marqueNom"]) ? $context["marqueNom"] : $this->getContext($context, "marqueNom")))) {
            // line 42
            echo "<p class=\"info\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom"))), "html", null, true);
            echo " de la marque ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["marqueNom"]) ? $context["marqueNom"] : $this->getContext($context, "marqueNom"))), "html", null, true);
            echo "</p>
";
        }
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appareils"]) ? $context["appareils"] : $this->getContext($context, "appareils")));
        foreach ($context['_seq'] as $context["_key"] => $context["appareil"]) {
            // line 45
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_appareil_id", array("id" => $this->getAttribute($context["appareil"], "id", array()))), "html", null, true);
            echo "\">
<div class=\"appareil\">
<img src=\"/bundles/gggnotices/images/";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "photo", array()), "html", null, true);
            echo ".jpg\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "nom", array()), "html", null, true);
            echo "\"/>
<strong class=\"nom\">";
            // line 48
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["appareil"], "marque", array()), "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["appareil"], "nom", array())), "html", null, true);
            echo "</strong> 

</div>
</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appareil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "

";
    }

    // line 60
    public function block_js($context, array $blocks = array())
    {
        // line 61
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/formulaires.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 61,  183 => 60,  177 => 53,  164 => 48,  158 => 47,  152 => 45,  148 => 44,  140 => 42,  138 => 41,  131 => 37,  127 => 36,  123 => 35,  119 => 34,  116 => 33,  107 => 31,  103 => 30,  98 => 27,  95 => 26,  88 => 15,  85 => 14,  78 => 9,  75 => 8,  69 => 63,  67 => 60,  63 => 58,  61 => 57,  58 => 56,  56 => 26,  51 => 23,  49 => 22,  41 => 16,  39 => 14,  34 => 11,  32 => 8,  23 => 1,);
    }
}
