<?php

/* GGGUserBundle:Default:inscription.html.twig */
class __TwigTemplate_a0a2630878eeee96944a077fa2a8d3bd73757ed285122e5e53045d9dc4d31557 extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Page des inscriptions
";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ggguser/css/form_ins.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 12
    public function block_wrapper($context, array $blocks = array())
    {
        // line 13
        echo "<h1>Créer votre compte pour consulter les notices, recevoir des alertes sur la parution des notices, etc.</h1>

";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "succes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["succes"]) {
            echo "<p class=\"info\">";
            echo $context["succes"];
            echo "</p>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['succes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "erreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["erreur"]) {
            echo "<p class=\"erreur\">";
            echo $context["erreur"];
            echo "</p>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['erreur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "<form action=\"\" method=\"POST\" id=\"form_ins\">

<div class=\"login\"><label for=\"login\" title=\"login\">Login</label><input id=\"login\" name=\"login\" type=\"text\" value=\"";
        // line 19
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        }
        echo "\"/></div>

<div class=\"password\"><label for=\"password\" title=\"password\">Mot de passe</label><input id=\"password\" name=\"password\" type=\"password\" value=\"\"/></div>

<div class=\"password\"><label for=\"password_conf\" title=\"confirm password\">Confirmation mot de passe</label><input id=\"password_conf\" name=\"password_conf\" type=\"password\" value=\"\"/></div>

<div class=\"email\"><label for=\"email\" title=\"confirm e-mail\">E-mail</label><input id=\"email\" name=\"email\" type=\"email\" value=\"";
        // line 25
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        }
        echo "\"/></div>

<div class=\"email\"><label for=\"email_conf\" title=\"confirm e-mail\">Email confirmation</label><input id=\"email_conf\" name=\"email_conf\" type=\"email\" /></div>

<input name=\"btn_submit\" type=\"submit\" value=\"Je m'inscris\"/>
</form>

";
    }

    public function getTemplateName()
    {
        return "GGGUserBundle:Default:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  89 => 19,  85 => 17,  74 => 16,  63 => 15,  59 => 13,  56 => 12,  49 => 9,  46 => 8,  41 => 5,  38 => 4,  11 => 1,);
    }
}
