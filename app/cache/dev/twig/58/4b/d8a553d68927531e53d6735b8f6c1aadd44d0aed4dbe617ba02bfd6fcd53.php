<?php

/* GGGNoticesBundle:Default:footer.html.twig */
class __TwigTemplate_584bd8a553d68927531e53d6735b8f6c1aadd44d0aed4dbe617ba02bfd6fcd53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div id=\"footer\">
";
        // line 3
        $this->displayBlock('footer', $context, $blocks);
        // line 8
        echo "</div>
";
    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"\">Plan du site</a>
<a href=\"\">Mentions Légales</a>
<a href=\"\">Contact</a>
";
    }

    public function getTemplateName()
    {
        return "GGGNoticesBundle:Default:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  26 => 8,  24 => 3,  20 => 1,);
    }
}