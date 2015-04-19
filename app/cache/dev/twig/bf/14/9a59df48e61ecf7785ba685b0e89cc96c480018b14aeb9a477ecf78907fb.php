<?php

/* GGGNoticesBundle:Default:marque.html.twig */
class __TwigTemplate_bf149a59df48e61ecf7785ba685b0e89cc96c480018b14aeb9a477ecf78907fb extends Twig_Template
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
            'wrapper' => array($this, 'block_wrapper'),
            'js' => array($this, 'block_js'),
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
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_wrapper($context, array $blocks = array())
    {
        // line 9
        echo "


";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), 'form_start');
        echo "
<h3>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), "nom", array()), 'label', array("label" => "Filtre par catégories"));
        echo "</h3>
";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), "nom", array()), 'widget');
        echo "
";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), 'form_end');
        echo "


";
        // line 22
        if ( !(null === (isset($context["categorieNom"]) ? $context["categorieNom"] : $this->getContext($context, "categorieNom")))) {
            // line 23
            echo "<p class=\"info\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["categorieNom"]) ? $context["categorieNom"] : $this->getContext($context, "categorieNom"))), "html", null, true);
            echo " de la marque ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom"))), "html", null, true);
            echo "</p>
";
        }
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appareils"]) ? $context["appareils"] : $this->getContext($context, "appareils")));
        foreach ($context['_seq'] as $context["_key"] => $context["appareil"]) {
            // line 26
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_appareil_id", array("id" => $this->getAttribute($context["appareil"], "id", array()))), "html", null, true);
            echo "\">
<div class=\"appareil\">
<img src=\"/bundles/gggnotices/images/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "photo", array()), "html", null, true);
            echo ".jpg\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "nom", array()), "html", null, true);
            echo "\"/>
<strong class=\"nom\">";
            // line 29
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["appareil"], "marque", array()), "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["appareil"], "nom", array())), "html", null, true);
            echo "</strong> 
<!--p class=\"description\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "description", array()), "html", null, true);
            echo "</p-->
</div>
</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appareil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
<!--a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("ggg_notices_appareil_id", array("id" => 50));
        echo "\">toto</a-->


";
    }

    // line 40
    public function block_js($context, array $blocks = array())
    {
        // line 41
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
        return array (  145 => 41,  142 => 40,  134 => 35,  131 => 34,  121 => 30,  115 => 29,  109 => 28,  103 => 26,  99 => 25,  91 => 23,  89 => 22,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  68 => 15,  59 => 13,  55 => 12,  50 => 9,  47 => 8,  41 => 3,  38 => 2,  11 => 1,);
    }
}
