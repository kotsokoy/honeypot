<?php

/* GGGNoticesBundle:Default:categorie.html.twig */
class __TwigTemplate_ecb8090d6959107590f95f61145adbd1fde0693b02e331d8145dd1c9ff34d138 extends Twig_Template
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
            'h1' => array($this, 'block_h1'),
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
        // line 10
        $this->displayBlock('h1', $context, $blocks);
        // line 15
        echo "

";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "<p class=\"erreur\">";
            echo $context["message"];
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), 'form_start');
        echo "
<h3>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), "nom", array()), 'label', array("label" => "Filtre par marques"));
        echo "</h3>
";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), "nom", array()), 'widget');
        echo "
";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_filtre"]) ? $context["form_filtre"] : $this->getContext($context, "form_filtre")), 'form_end');
        echo "



";
        // line 28
        if ( !(null === (isset($context["marqueNom"]) ? $context["marqueNom"] : $this->getContext($context, "marqueNom")))) {
            // line 29
            echo "<p class=\"info\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom"))), "html", null, true);
            echo " de la marque ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["marqueNom"]) ? $context["marqueNom"] : $this->getContext($context, "marqueNom"))), "html", null, true);
            echo "</p>
";
        }
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appareils"]) ? $context["appareils"] : $this->getContext($context, "appareils")));
        foreach ($context['_seq'] as $context["_key"] => $context["appareil"]) {
            // line 32
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ggg_notices_appareil_id", array("id" => $this->getAttribute($context["appareil"], "id", array()))), "html", null, true);
            echo "\">
<div class=\"appareil\">
<img src=\"/bundles/gggnotices/images/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "photo", array()), "html", null, true);
            echo ".jpg\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "nom", array()), "html", null, true);
            echo "\"/>
<strong class=\"nom\">";
            // line 35
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["appareil"], "marque", array()), "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["appareil"], "nom", array())), "html", null, true);
            echo "</strong> 
<!--p class=\"description\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["appareil"], "description", array()), "html", null, true);
            echo "</p-->
</div>
</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appareil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
<!--a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ggg_notices_appareil_id", array("id" => 50));
        echo "\">toto</a-->


";
    }

    // line 10
    public function block_h1($context, array $blocks = array())
    {
        // line 11
        echo "
<h1>Trouvez votre la notice de votre ";
        // line 12
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom"))), "html", null, true);
        echo "</h1>

";
    }

    // line 46
    public function block_js($context, array $blocks = array())
    {
        // line 47
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
        return array (  164 => 47,  161 => 46,  154 => 12,  151 => 11,  148 => 10,  140 => 41,  137 => 40,  127 => 36,  121 => 35,  115 => 34,  109 => 32,  105 => 31,  97 => 29,  95 => 28,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  73 => 20,  64 => 18,  60 => 17,  56 => 15,  54 => 10,  51 => 9,  48 => 8,  42 => 3,  39 => 2,  11 => 1,);
    }
}
