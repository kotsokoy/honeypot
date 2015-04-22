<?php

/* GGGNoticesBundle:Default:listecategories.html.twig */
class __TwigTemplate_03182b5b1afe6cae0a73f6657b21f5412160c86d4efbf4afc6bcaf3d36f954a0 extends Twig_Template
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
        // line 21
        $this->env->loadTemplate("GGGNoticesBundle:Default:header2.html.twig")->display($context);
        // line 22
        echo "


<div class=\"wrapper\">
";
        // line 26
        $this->displayBlock('wrapper', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->env->loadTemplate("GGGNoticesBundle:Default:footer.html.twig")->display($context);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('js', $context, $blocks);
        // line 61
        echo "
</body>
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
        echo "<title>mon-aspirateur.net | Toutes les catégories</title>
";
    }

    // line 26
    public function block_wrapper($context, array $blocks = array())
    {
        // line 27
        echo "

<ul id=\"propositions\">
</ul>

<h2>Retrouvez votre aspirateur par sa catégorie</h2>


";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            echo "<p class=\"erreur\">
\tInfo: ";
            // line 37
            echo $context["message"];
            echo "
</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "


<ul class=\"categories\">
";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 45
            echo "<li class=\"categorie\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_categories_nom", array("nom" => $this->getAttribute($context["categorie"], "nom", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["categorie"], "nom", array())), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "<li class=\"categorie\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories_nom", array("nom" => "toto"));
        echo "\">toto</a></li>
</ul>


</div><!-- fin wrapper-->
";
    }

    // line 56
    public function block_js($context, array $blocks = array())
    {
        // line 57
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/resize_img.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/recherches.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/propositions.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:listecategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 59,  160 => 58,  155 => 57,  152 => 56,  141 => 47,  130 => 45,  126 => 44,  120 => 40,  111 => 37,  108 => 36,  104 => 35,  94 => 27,  91 => 26,  86 => 13,  83 => 12,  76 => 8,  73 => 7,  67 => 61,  65 => 56,  62 => 55,  60 => 54,  57 => 53,  55 => 26,  49 => 22,  47 => 21,  39 => 15,  37 => 12,  33 => 10,  31 => 7,  23 => 1,);
    }
}
