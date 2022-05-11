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

/* Sandbox/SandboxTwig/vue4.html.twig */
class __TwigTemplate_faec33d2295ae6f841fe1ec1f5f18c0546b18f1d00cbdcb9a1bc41cb973897e2 extends Template
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
        return "Sandbox/Layouts/layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Sandbox/Layouts/layout2.html.twig", "Sandbox/SandboxTwig/vue4.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " : vue 4";
    }

    // line 5
    public function block_titre_principal($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Titre principal de la vue 4";
    }

    // line 7
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <p>
        Ceci est un paragraphe de la vue 4.
    </p>
";
    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxTwig/vue4.html.twig";
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
        return new Source("", "Sandbox/SandboxTwig/vue4.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxTwig/vue4.html.twig");
    }
}
