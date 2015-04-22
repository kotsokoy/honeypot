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
            'wrapper' => array($this, 'block_wrapper'),
            'content' => array($this, 'block_content'),
            'recherches' => array($this, 'block_recherches'),
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

<title>
";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 15
        echo " 
</title>

</head>
<body>

";
        // line 21
        $this->env->loadTemplate("GGGNoticesBundle:Default:header.html.twig")->display($context);
        // line 22
        echo "

<div class=\"wrapper\">
";
        // line 25
        $this->displayBlock('wrapper', $context, $blocks);
        // line 54
        echo "
";
        // line 55
        $this->env->loadTemplate("GGGNoticesBundle:Default:footer.html.twig ")->display($context);
        // line 56
        $this->displayBlock('js', $context, $blocks);
        // line 59
        echo "</body>
</html>";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/css/style.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        // line 14
        echo "mon-aspirateur.net | Notices et manuels d'utilisation pour aspirateurs
";
    }

    // line 25
    public function block_wrapper($context, array $blocks = array())
    {
        // line 26
        echo "

";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "


";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "
</div><!-- fin wrapper-->

";
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('recherches', $context, $blocks);
        // line 48
        echo "
";
    }

    // line 36
    public function block_recherches($context, array $blocks = array())
    {
        // line 37
        echo "<div id=\"recherches\">
<h2>Entrez le nom ou la référence de votre aspirateur<h2>
<div id=\"noRes\">Aucun résultats</div>
<input name=\"motif\" id=\"motif\" type=\"search\" placeholder=\"Exemples: PHILIPS, MV5 PREMIUM,... \"/>
<img id=\"loupe\"
\t src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/images/loupe.png"), "html", null, true);
        echo "\"
\t alt=\"barre de recherche\"/>
<ul id=\"propositions\">
</ul>
</div>
";
    }

    // line 56
    public function block_js($context, array $blocks = array())
    {
        // line 57
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
        return array (  159 => 57,  156 => 56,  146 => 42,  139 => 37,  136 => 36,  131 => 48,  129 => 36,  126 => 35,  123 => 34,  116 => 50,  114 => 34,  109 => 31,  100 => 29,  96 => 28,  92 => 26,  89 => 25,  84 => 14,  81 => 13,  74 => 8,  71 => 7,  66 => 59,  64 => 56,  62 => 55,  59 => 54,  57 => 25,  52 => 22,  50 => 21,  42 => 15,  40 => 13,  35 => 10,  33 => 7,  25 => 1,);
    }
}
