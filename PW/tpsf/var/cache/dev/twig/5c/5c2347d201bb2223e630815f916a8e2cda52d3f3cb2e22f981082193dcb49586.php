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
class __TwigTemplate_05127a80c8d2db49a64bc9f4ccbfd45fcdbfe4f4fd96610a98be067e101d04ca extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxPrefix/hello3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxPrefix/hello3.html.twig"));

        // line 1
        echo "<body>
    <h1> Bienvenue ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</h1>
    <p>
        Mes jeux préférés sont&nbsp;:
        ";
        // line 5
        $context["i"] = 1;
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 7, $this->source); })()), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $context["jeu"], "html", null, true);
            echo "
        ";
            // line 8
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 8, $this->source); })()) + 1);
            // line 9
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </p>
</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  74 => 10,  68 => 9,  66 => 8,  59 => 7,  54 => 6,  52 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
    <h1> Bienvenue {{ prenom }}</h1>
    <p>
        Mes jeux préférés sont&nbsp;:
        {% set i = 1 %}
        {% for jeu in jeux %}
        {{ i }}:{{ jeu }}
        {% set i = i+1 %}
        {% endfor %}
    </p>
</body>", "Sandbox/SandboxPrefix/hello3.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxPrefix/hello3.html.twig");
    }
}
