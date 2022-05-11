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

/* Sandbox/SandboxPrefix/hello4.html.twig */
class __TwigTemplate_46e3b27e9a2ef69b5f8070fdf0f74a33f37216ae46ed55deb87ede153c5f9a66 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxPrefix/hello4.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxPrefix/hello4.html.twig"));

        // line 1
        echo "<body>
<h1> Bienvenue ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</h1>
<p>
    Mes jeux préférés sont&nbsp;:
    <table>
    ";
        // line 6
        $context["i"] = 1;
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 8
            echo "        <tr>
            <td>";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 9, $this->source); })()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["jeu"], "html", null, true);
            echo "</td>
        </tr>
        ";
            // line 11
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 11, $this->source); })()) + 1);
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </table>
</p>
</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxPrefix/hello4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  72 => 12,  70 => 11,  63 => 9,  60 => 8,  55 => 7,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
<h1> Bienvenue {{ prenom }}</h1>
<p>
    Mes jeux préférés sont&nbsp;:
    <table>
    {% set i = 1 %}
    {% for jeu in jeux %}
        <tr>
            <td>{{ i }} : {{ jeu }}</td>
        </tr>
        {% set i = i+1 %}
    {% endfor %}
    </table>
</p>
</body>", "Sandbox/SandboxPrefix/hello4.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxPrefix/hello4.html.twig");
    }
}
