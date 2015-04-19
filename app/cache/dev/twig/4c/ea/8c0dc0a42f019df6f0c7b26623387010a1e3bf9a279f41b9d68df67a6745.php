<?php

/* GGGNoticesBundle:Default:listemarques.html.twig */
class __TwigTemplate_4cea8c0dc0a42f019df6f0c7b26623387010a1e3bf9a279f41b9d68df67a6745 extends Twig_Template
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
        echo "Toutes les marques
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

    // line 12
    public function block_wrapper($context, array $blocks = array())
    {
        // line 13
        echo "

";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "<p class=\"erreur\">
\tInfo: ";
            // line 17
            echo $context["message"];
            echo "
</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
<div class=\"marques\">
";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["marques"]) ? $context["marques"] : $this->getContext($context, "marques")));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 23
            echo "<div class=\"marque\"><a href=\"";
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
            echo "</a></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</div>

";
    }

    // line 29
    public function block_js($context, array $blocks = array())
    {
        // line 30
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/resize_img.js"), "html", null, true);
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
        return array (  120 => 30,  117 => 29,  111 => 25,  88 => 23,  84 => 22,  80 => 20,  71 => 17,  68 => 16,  64 => 15,  60 => 13,  57 => 12,  50 => 7,  47 => 6,  42 => 3,  39 => 2,  11 => 1,);
    }
}
