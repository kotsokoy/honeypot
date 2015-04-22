<?php

/* GGGUserBundle:Default:inscription.html.twig */
class __TwigTemplate_a0a2630878eeee96944a077fa2a8d3bd73757ed285122e5e53045d9dc4d31557 extends Twig_Template
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
        // line 14
        echo "

<title>
";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        // line 20
        echo "</title>

</head>
<body>

";
        // line 25
        $this->env->loadTemplate("GGGNoticesBundle:Default:header_ins.html.twig")->display($context);
        // line 26
        echo "

<div class=\"wrapper\">
";
        // line 29
        $this->displayBlock('wrapper', $context, $blocks);
        // line 55
        echo "</div><!-- fin wrapper-->
";
        // line 56
        $this->env->loadTemplate("GGGNoticesBundle:Default:footer.html.twig")->display($context);
        // line 57
        echo "

";
        // line 59
        $this->displayBlock('js', $context, $blocks);
        // line 64
        echo "
</body>
</html>";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/css/style_liste.css"), "html", null, true);
        echo "\"/>
<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ggguser/css/form_ins.css"), "html", null, true);
        echo "\"/>

";
    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        // line 18
        echo "Page des inscriptions | mon-aspirateur.net
";
    }

    // line 29
    public function block_wrapper($context, array $blocks = array())
    {
        // line 30
        echo "
<ul id=\"propositions\">
</ul>

<h2>Créer votre compte pour consulter les notices, recevoir des alertes sur la parution des notices, etc.</h2>

";
        // line 36
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
        // line 37
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
        // line 38
        echo "<form action=\"\" method=\"POST\" id=\"form_ins\">

<div class=\"login\"><label for=\"login\" title=\"login\">Login</label><input id=\"login\" name=\"login\" type=\"text\" value=\"";
        // line 40
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        }
        echo "\"/></div>

<div class=\"password\"><label for=\"password\" title=\"password\">Mot de passe</label><input id=\"password\" name=\"password\" type=\"password\" value=\"\"/></div>

<div class=\"password\"><label for=\"password_conf\" title=\"confirm password\">Confirmation mot de passe</label><input id=\"password_conf\" name=\"password_conf\" type=\"password\" value=\"\"/></div>

<div class=\"email\"><label for=\"email\" title=\"confirm e-mail\">E-mail</label><input id=\"email\" name=\"email\" type=\"email\" value=\"";
        // line 46
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array(), "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        }
        echo "\"/></div>

<div class=\"email\"><label for=\"email_conf\" title=\"confirm e-mail\">Email confirmation</label><input id=\"email_conf\" name=\"email_conf\" type=\"email\" /></div>

<input name=\"btn_submit\" type=\"submit\" value=\"Je m'inscris\"/>
</form>


";
    }

    // line 59
    public function block_js($context, array $blocks = array())
    {
        // line 60
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/formulaires.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/recherches.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gggnotices/js/propositions.js"), "html", null, true);
        echo "\"></script>
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
        return array (  174 => 62,  170 => 61,  165 => 60,  162 => 59,  147 => 46,  136 => 40,  132 => 38,  121 => 37,  110 => 36,  102 => 30,  99 => 29,  94 => 18,  91 => 17,  84 => 11,  80 => 10,  77 => 9,  74 => 8,  68 => 64,  66 => 59,  62 => 57,  60 => 56,  57 => 55,  55 => 29,  50 => 26,  48 => 25,  41 => 20,  39 => 17,  34 => 14,  32 => 8,  23 => 1,);
    }
}
