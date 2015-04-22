<?php

/* GGGNoticesBundle:Default:listemarques.html.twig */
class __TwigTemplate_4cea8c0dc0a42f019df6f0c7b26623387010a1e3bf9a279f41b9d68df67a6745 extends Twig_Template
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
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "

";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo "
</head>
<body>




";
        // line 22
        $this->env->loadTemplate("GGGNoticesBundle:Default:header2.html.twig")->display($context);
        // line 23
        echo "


<div class=\"wrapper\">
";
        // line 27
        $this->displayBlock('wrapper', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->env->loadTemplate("GGGNoticesBundle:Default:footer.html.twig")->display($context);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('js', $context, $blocks);
        // line 56
        echo "</body>
</html>";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/css/style_liste.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        // line 13
        echo "<title>mon-aspirateur.net | Toutes les marques</title>
";
    }

    // line 27
    public function block_wrapper($context, array $blocks = array())
    {
        // line 28
        echo "
<ul id=\"propositions\">
</ul>

<h2>Retrouvez votre aspirateur parmi toutes les marques repertoriées</h2>

";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "<p class=\"erreur\">
\tInfo: ";
            // line 36
            echo $context["message"];
            echo "
</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
<ul class=\"marques\">
";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marques"]) ? $context["marques"] : $this->getContext($context, "marques")));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 42
            echo "<li class=\"marque\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_marques_nom", array("nom" => $this->getAttribute($context["marque"], "nom", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["marque"], "nom", array())), "html", null, true);
            echo "  ";
            if ($this->getAttribute($context["marque"], "logo", array())) {
                echo "<img src=\"/bundles/gggnotices/images/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "logo", array()), "html", null, true);
                echo ".jpg\" alt=\"logo ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "nom", array()), "html", null, true);
                echo "\"/>";
            } else {
                echo "<img src=\"/bundles/gggnotices/images/erreur_logo_marque.png\" alt=\"pas de logo disponible pour la marque ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "nom", array()), "html", null, true);
                echo "\"/>";
            }
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</ul>

</div><!-- fin wrapper-->
";
    }

    // line 51
    public function block_js($context, array $blocks = array())
    {
        // line 52
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/resize_img.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/recherches.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/propositions.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:listemarques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 54,  164 => 53,  159 => 52,  156 => 51,  149 => 44,  126 => 42,  122 => 41,  118 => 39,  109 => 36,  106 => 35,  102 => 34,  94 => 28,  91 => 27,  86 => 13,  83 => 12,  76 => 8,  73 => 7,  68 => 56,  66 => 51,  63 => 50,  61 => 49,  58 => 48,  56 => 27,  50 => 23,  48 => 22,  39 => 15,  37 => 12,  33 => 10,  31 => 7,  23 => 1,);
    }
}
