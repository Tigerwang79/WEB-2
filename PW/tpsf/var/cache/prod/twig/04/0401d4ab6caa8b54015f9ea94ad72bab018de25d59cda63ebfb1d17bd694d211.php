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

/* Sandbox/Layouts/footer.html.twig */
class __TwigTemplate_ca744534d5b5801788f37497f76595fb7f628cccb6a9c8159e5b171166009c81 extends Template
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
        echo "<p>
    Ceci est le bandeau de bas de page.
</p>";
    }

    public function getTemplateName()
    {
        return "Sandbox/Layouts/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/Layouts/footer.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/Layouts/footer.html.twig");
    }
}
