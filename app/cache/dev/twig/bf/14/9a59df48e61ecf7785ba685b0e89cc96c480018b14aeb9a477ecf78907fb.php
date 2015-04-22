<?php

/* GGGNoticesBundle:Default:marque.html.twig */
class __TwigTemplate_bf149a59df48e61ecf7785ba685b0e89cc96c480018b14aeb9a477ecf78907fb extends Twig_Template
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
        // line 61
        echo "</div><!-- fin wrapper-->
";
        // line 62
        $this->env->loadTemplate("GGGNoticesBundle:Default:footer.html.twig")->display($context);
        // line 63
        echo "

";
        // line 65
        $this->displayBlock('js', $context, $blocks);
        // line 68
        echo "
</body>
</html>

";
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
        echo "Tous les aspirateurs ";
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
<h2>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), "nom", array()), 'label', array("label" => "Filtre par catégories"));
        echo "</h2>
";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), "nom", array()), 'widget');
        echo "
";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), 'form_end');
        echo "


";
        // line 40
        if ( !(null === (isset($context["categorieNom"]) ? $context["categorieNom"] : $this->getContext($context, "categorieNom")))) {
            // line 41
            echo "<p class=\"info\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["categorieNom"]) ? $context["categorieNom"] : $this->getContext($context, "categorieNom"))), "html", null, true);
            echo " de la marque ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom"))), "html", null, true);
            echo "</p>
";
        }
        // line 43
        echo "
";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appareils"]) ? $context["appareils"] : $this->getContext($context, "appareils")));
        foreach ($context['_seq'] as $context["_key"] => $context["appareil"]) {
            // line 45
            echo "
<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_appareil_id", array("id" => $this->getAttribute($context["appareil"], "id", array()))), "html", null, true);
            echo "\">
<div class=\"appareil\">

<img src=\"/bundles/gggnotices/images/";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "photo", array()), "html", null, true);
            echo ".jpg\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "nom", array()), "html", null, true);
            echo "\"/>

<strong class=\"nom\">";
            // line 51
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
        // line 56
        echo "



";
    }

    // line 65
    public function block_js($context, array $blocks = array())
    {
        // line 66
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/formulaires.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:marque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 66,  193 => 65,  185 => 56,  172 => 51,  165 => 49,  159 => 46,  156 => 45,  152 => 44,  149 => 43,  141 => 41,  139 => 40,  133 => 37,  129 => 36,  125 => 35,  121 => 34,  118 => 33,  109 => 31,  105 => 30,  100 => 27,  97 => 26,  90 => 15,  87 => 14,  80 => 9,  77 => 8,  69 => 68,  67 => 65,  63 => 63,  61 => 62,  58 => 61,  56 => 26,  51 => 23,  49 => 22,  41 => 16,  39 => 14,  34 => 11,  32 => 8,  23 => 1,);
    }
}
