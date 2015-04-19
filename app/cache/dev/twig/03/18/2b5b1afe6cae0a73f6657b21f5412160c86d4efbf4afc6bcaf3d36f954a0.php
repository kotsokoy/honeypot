<?php

/* GGGNoticesBundle:Default:listecategories.html.twig */
class __TwigTemplate_03182b5b1afe6cae0a73f6657b21f5412160c86d4efbf4afc6bcaf3d36f954a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("GGGNoticesBundle:Default:layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'wrapper' => array($this, 'block_wrapper'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GGGNoticesBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "Toutes les catégories
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/css/style_liste.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 11
    public function block_wrapper($context, array $blocks = array())
    {
        // line 12
        echo "

";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "<p class=\"erreur\">
\tInfo: ";
            // line 16
            echo $context["message"];
            echo "
</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "

<div class=\"gauche\">

<ul>
";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 25
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_categories_nom", array("nom" => $this->getAttribute($context["categorie"], "nom", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["categorie"], "nom", array())), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("ggg_notices_categories_nom", array("nom" => "toto"));
        echo "\">toto</a></li>
</ul>

</div>


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
        return array (  101 => 27,  90 => 25,  86 => 24,  79 => 19,  70 => 16,  67 => 15,  63 => 14,  59 => 12,  56 => 11,  49 => 7,  46 => 6,  41 => 3,  38 => 2,  11 => 1,);
    }
}
