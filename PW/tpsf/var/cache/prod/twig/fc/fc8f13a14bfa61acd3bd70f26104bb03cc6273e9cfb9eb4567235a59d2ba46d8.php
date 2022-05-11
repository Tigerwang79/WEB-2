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

/* Sandbox/SandboxTwig/vue5.html.twig */
class __TwigTemplate_fbf57edfee524c474d98a76aa98634875e1f0d60a6921993c7823452c38d6eb1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titre_principal' => [$this, 'block_titre_principal'],
            'vue' => [$this, 'block_vue'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Sandbox/Layouts/layout3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Sandbox/Layouts/layout3.html.twig", "Sandbox/SandboxTwig/vue5.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " : vue 5";
    }

    // line 5
    public function block_titre_principal($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Titre principal de la vue 5";
    }

    // line 7
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <p>
        Ceci est un paragraphe de la vue 5.
    </p>
";
    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxTwig/vue5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  63 => 7,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/SandboxTwig/vue5.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxTwig/vue5.html.twig");
    }
}
