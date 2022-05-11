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

/* Sandbox/SandboxDoctrine/viewendur.twig */
class __TwigTemplate_be2d0e731b43235d0ef4b0cb3312cd56cf4588a81edc50c6b12d7e175ff62ee7 extends Template
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
        return "Sandbox/Layouts/layout4.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Sandbox/Layouts/layout4.html.twig", "Sandbox/SandboxDoctrine/viewendur.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " : viewendur";
    }

    // line 5
    public function block_titre_principal($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "View En Dur";
    }

    // line 7
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <p>
        Bloc Vue !
    </p>
";
    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxDoctrine/viewendur.twig";
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
        return new Source("", "Sandbox/SandboxDoctrine/viewendur.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxDoctrine/viewendur.twig");
    }
}
