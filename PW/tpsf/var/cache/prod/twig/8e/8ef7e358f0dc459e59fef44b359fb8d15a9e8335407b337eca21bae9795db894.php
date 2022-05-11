<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Sandbox/Layouts/layout1.html.twig */
class __TwigTemplate_68b503a3fb65d385b37b60cce8938394273f57e5fcf33fd003ce32c1604e12b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titre_principal' => [$this, 'block_titre_principal'],
            'vue' => [$this, 'block_vue'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div id=\"vue\">
        <h1>";
        // line 9
        $this->displayBlock('titre_principal', $context, $blocks);
        echo "</h1>
        ";
        // line 10
        $this->displayBlock('vue', $context, $blocks);
        // line 11
        echo "        </div>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Sandbox";
    }

    // line 9
    public function block_titre_principal($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "Sandbox/Layouts/layout1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  72 => 9,  65 => 4,  59 => 11,  57 => 10,  53 => 9,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/Layouts/layout1.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/Layouts/layout1.html.twig");
    }
}
