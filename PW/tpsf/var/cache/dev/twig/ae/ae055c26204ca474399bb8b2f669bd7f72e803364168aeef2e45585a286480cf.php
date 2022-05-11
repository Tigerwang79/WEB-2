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

/* Sandbox/SandboxRoute/test1-2-3-4.html.twig */
class __TwigTemplate_86933e3e8ad9b800b51102a2ff0d9279ef82e4a953758dec068fa2f261794d45 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxRoute/test1-2-3-4.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxRoute/test1-2-3-4.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>test</title>
    </head>
    <body>
    <h1>TP3 : ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " Action</h1>
    <table>
        <tr>
            <td>year :</td><td>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>month :</td><td>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>filename :</td><td>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>ext :</td><td>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
    </table>
    <!-- ";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 23, $this->source); })()), (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 23, $this->source); })()), (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 23, $this->source); })()), (isset($context["ext"]) || array_key_exists("ext", $context) ? $context["ext"] : (function () { throw new RuntimeError('Variable "ext" does not exist.', 23, $this->source); })()));
        echo " -->
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxRoute/test1-2-3-4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  76 => 20,  70 => 17,  64 => 14,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>test</title>
    </head>
    <body>
    <h1>TP3 : {{ title }} Action</h1>
    <table>
        <tr>
            <td>year :</td><td>{{ year }}</td>
        </tr>
        <tr>
            <td>month :</td><td>{{ month }}</td>
        </tr>
        <tr>
            <td>filename :</td><td>{{ filename }}</td>
        </tr>
        <tr>
            <td>ext :</td><td>{{ ext }}</td>
        </tr>
    </table>
    <!-- {{ dump(year, month, filename, ext) }} -->
    </body>
</html>", "Sandbox/SandboxRoute/test1-2-3-4.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxRoute/test1-2-3-4.html.twig");
    }
}
