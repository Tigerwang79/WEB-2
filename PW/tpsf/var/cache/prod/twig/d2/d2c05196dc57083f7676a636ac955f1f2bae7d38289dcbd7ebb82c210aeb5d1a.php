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

/* Sandbox/SandboxInjection/displayFlash.html.twig */
class __TwigTemplate_fdc65d2fde4fde63b1f55310abb649c97b766631c322580b8124021b0676f151 extends Template
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
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <title>Display Flash</title>
    </head>
    <body>
        <h2>type \"info\"</h2>
        <ul>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 10), "flashBag", [], "any", false, false, false, 10), "get", [0 => "info"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 11
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>
        <h2>type \"error\"</h2>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 15), "flashBag", [], "any", false, false, false, 15), "get", [0 => "error"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 16
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxInjection/displayFlash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  69 => 16,  65 => 15,  61 => 13,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/SandboxInjection/displayFlash.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxInjection/displayFlash.html.twig");
    }
}
