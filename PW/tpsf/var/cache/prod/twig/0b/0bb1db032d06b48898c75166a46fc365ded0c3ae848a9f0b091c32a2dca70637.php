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

/* Sandbox/SandboxPrefix/hello2.html.twig */
class __TwigTemplate_e06c85e649aa4f602aa4df7a756b38f54673a680b12c628682f07561885ef0a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Bienvenue !</title>
    </head>
    <body>
    <h1>Bienvenue dans le bac à sable</h1>
    <p>
        Si vous voyez ce message, cela signifie que votre
        premier template Twig (sans code Twig) fonctionne.<br />
        Et bien sûr&nbsp;: <q>Hello World!</q>
    </p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxPrefix/hello2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/SandboxPrefix/hello2.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxPrefix/hello2.html.twig");
    }
}
