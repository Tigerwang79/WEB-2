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

/* Sandbox/Layouts/layout3.html.twig */
class __TwigTemplate_0c640e637d1d2c182f48d5b654cb3334b8bf47f1308c38cdf623a3503117e9fb extends Template
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
        <div id=\"menu\">
            <!-- ici inclusion du controller::action SandboxTwig::menu -->
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\Sandbox\\SandboxTwigController::menuAction"));
        echo "
        </div>
        <div id=\"vue\">
            <h1>";
        // line 13
        $this->displayBlock('titre_principal', $context, $blocks);
        echo "</h1>
            ";
        // line 14
        $this->displayBlock('vue', $context, $blocks);
        // line 15
        echo "        </div>
    </body>
    <footer>
        <div id=\"footer\">
            <!-- ici inclusion du template footer.html.twig -->
            ";
        // line 20
        $this->loadTemplate("Sandbox/Layouts/footer.html.twig", "Sandbox/Layouts/layout3.html.twig", 20)->display($context);
        // line 21
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

    // line 13
    public function block_titre_principal($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<!-- ici le bloc titre_principal -->";
    }

    // line 14
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<!-- ici le bloc vue -->";
    }

    public function getTemplateName()
    {
        return "Sandbox/Layouts/layout3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  88 => 13,  81 => 4,  75 => 21,  73 => 20,  66 => 15,  64 => 14,  60 => 13,  54 => 10,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/Layouts/layout3.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/Layouts/layout3.html.twig");
    }
}
