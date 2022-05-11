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

/* Sandbox/Layouts/layout2.html.twig */
class __TwigTemplate_5c2b9153d3008114acbb2113d23d279d5f9fbdaa6335819e07bfbe8dd5e4cf3f extends Template
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
    <footer>
        <div id=\"footer\">
            <!-- ici inclusion du template footer.html.twig -->
            ";
        // line 16
        $this->loadTemplate("Sandbox/Layouts/footer.html.twig", "Sandbox/Layouts/layout2.html.twig", 16)->display($context);
        // line 17
        echo "        </div>
    </footer>
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
        echo "<!-- ici le bloc titre_principal -->";
    }

    // line 10
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<!-- ici le bloc vue -->";
    }

    public function getTemplateName()
    {
        return "Sandbox/Layouts/layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 10,  81 => 9,  74 => 4,  68 => 17,  66 => 16,  59 => 11,  57 => 10,  53 => 9,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/Layouts/layout2.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/Layouts/layout2.html.twig");
    }
}
