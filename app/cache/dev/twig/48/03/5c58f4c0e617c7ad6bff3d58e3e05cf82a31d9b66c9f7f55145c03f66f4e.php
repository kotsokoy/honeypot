<?php

/* GGGNoticesBundle:Default:appareil.html.twig */
class __TwigTemplate_48035c58f4c0e617c7ad6bff3d58e3e05cf82a31d9b66c9f7f55145c03f66f4e extends Twig_Template
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

    // line 4
    public function block_wrapper($context, array $blocks = array())
    {
        // line 5
        echo "

";
        // line 7
        $this->displayBlock('h1', $context, $blocks);
        // line 10
        echo "
<div class=\"appareil\">
<img src=\"/bundles/gggnotices/images/";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "photo", array()), "html", null, true);
        echo ".jpg\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array()), "html", null, true);
        echo "\"/>
<!--p class=\"description\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "description", array()), "html", null, true);
        echo "</p-->

";
        // line 15
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") && $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : null), "notice", array(), "any", false, true), "fichier", array(), "any", true, true))) {
            // line 16
            echo "
<a href=\"/bundles/gggnotices/notices/";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "notice", array()), "fichier", array()), "html", null, true);
            echo ".pdf\" title=\"notice pour ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array()), "html", null, true);
            echo "\">
Télécharger la notice de ";
            // line 18
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "categorie", array()), "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "marque", array()), "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array())), "html", null, true);
            echo "
</a>
";
        } elseif ((($this->env->getExtension('security')->isGranted("ROLE_USER") == false) && $this->getAttribute($this->getAttribute(        // line 20
(isset($context["appareil"]) ? $context["appareil"] : null), "notice", array(), "any", false, true), "fichier", array(), "any", true, true))) {
            // line 21
            echo "<p class=\"info\">veuillez vous connecter pour consulter ou télécharger le reste de la notice</p>
";
        } else {
            // line 23
            echo "<p class=\"error\">
Nous n'avons pas encore de notice pour 
";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "categorie", array()), "nom", array())), "html", null, true);
            echo " 
";
            // line 26
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "marque", array()), "nom", array())), "html", null, true);
            echo " 
";
            // line 27
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array())), "html", null, true);
            echo "
</p>
";
        }
        // line 30
        echo "
</div>


";
    }

    // line 7
    public function block_h1($context, array $blocks = array())
    {
        // line 8
        echo "<h1> Notice pour ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nom", array()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "marque", array()), "nom", array())), "html", null, true);
        echo "</h1>
";
    }

    // line 36
    public function block_js($context, array $blocks = array())
    {
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
        return array (  126 => 36,  117 => 8,  114 => 7,  106 => 30,  100 => 27,  96 => 26,  92 => 25,  88 => 23,  84 => 21,  82 => 20,  73 => 18,  67 => 17,  64 => 16,  62 => 15,  57 => 13,  51 => 12,  47 => 10,  45 => 7,  41 => 5,  38 => 4,  11 => 1,);
    }
}
