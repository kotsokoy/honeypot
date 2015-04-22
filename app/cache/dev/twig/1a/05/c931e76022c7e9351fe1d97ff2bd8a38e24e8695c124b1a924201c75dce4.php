<?php

/* GGGNoticesBundle:Default:connexion.html.twig */
class __TwigTemplate_1a05c931e76022c7e9351fe1d97ff2bd8a38e24e8695c124b1a924201c75dce4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'connexion' => array($this, 'block_connexion'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('connexion', $context, $blocks);
    }

    public function block_connexion($context, array $blocks = array())
    {
        // line 2
        echo "<span class=\"log\">

";
        // line 4
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 5
            echo "<div>Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
<br/>
<a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" title=\"se déconnecter\">déconnexion</a>
</div>
";
        } else {
            // line 10
            echo "
";
            // line 11
            if (array_key_exists("error", $context)) {
                // line 12
                echo "<p class=\"erreur\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
                echo "</p>
";
            }
            // line 14
            echo "
<form action=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
<input type=\"text\" name=\"_username\" placeholder=\"pseudo ou mail\" />
<input type=\"password\" name=\"_password\" placeholder=\"password\" />
<input type=\"submit\" value=\"Connexion\"/>

</form>
vous n'avez pas encore de compte ? <a href=\" ";
            // line 21
            echo $this->env->getExtension('routing')->getPath("ggg_user_inscription");
            echo "\" title=\"page des inscriptions\">inscrivez-vous</a>

";
        }
        // line 24
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:connexion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  67 => 21,  58 => 15,  55 => 14,  49 => 12,  47 => 11,  44 => 10,  38 => 7,  32 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }
}
