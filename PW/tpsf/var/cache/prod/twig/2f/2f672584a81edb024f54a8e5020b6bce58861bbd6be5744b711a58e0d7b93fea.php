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

/* Sandbox/SandboxPrefix/hello3.html.twig */
class __TwigTemplate_b1fb3a6cbc8c199181e95430b5cc5f0102692f033e19ee605e989fcb9f9b6062 extends Template
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
        echo "<body>
    <h1> Bienvenue ";
        // line 2
        echo twig_escape_filter($this->env, ($context["prenom"] ?? null), "html", null, true);
        echo "</h1>
    <p>
        Mes jeux préférés sont&nbsp;:
        ";
        // line 5
        $context["i"] = 1;
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jeux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $context["jeu"], "html", null, true);
            echo "
        ";
            // line 8
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 9
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </p>
</body>";
    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxPrefix/hello3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  62 => 9,  60 => 8,  53 => 7,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/SandboxPrefix/hello3.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxPrefix/hello3.html.twig");
    }
}
