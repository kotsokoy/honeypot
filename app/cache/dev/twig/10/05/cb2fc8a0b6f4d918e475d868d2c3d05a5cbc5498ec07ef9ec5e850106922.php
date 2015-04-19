<?php

/* GGGUserBundle:Security:login.html.twig */
class __TwigTemplate_1005cb2fc8a0b6f4d918e475d868d2c3d05a5cbc5498ec07ef9ec5e850106922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "<p class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</p>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
<label for=\"username\">Login</label>
<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
<label for=\"password\">Password</label>
<input type=\"password\" id=\"password\" name=\"_password\"/>
<br/>
<input type=\"submit\" value=\"Connexion\"/>
</form>
";
    }

    public function getTemplateName()
    {
        return "GGGUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  33 => 7,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }
}
