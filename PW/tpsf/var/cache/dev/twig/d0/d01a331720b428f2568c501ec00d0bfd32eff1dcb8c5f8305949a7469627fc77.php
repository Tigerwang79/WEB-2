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

/* Sandbox/SandboxDoctrine/critiqueView2.html.twig */
class __TwigTemplate_84794e9af2b29da3a5ba289279f360def33909ee4a3caa3a9fdf7dbb70ef2cc6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxDoctrine/critiqueView2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxDoctrine/critiqueView2.html.twig"));

        $this->parent = $this->loadTemplate("Sandbox/Layouts/layout4.html.twig", "Sandbox/SandboxDoctrine/critiqueView2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        // line 4
        echo "    <p><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sandbox_doctrine_list");
        echo "\">Retour vers la liste complète</a>.</p>

    ";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 6, $this->source); })()));
        echo "

    <h2>Film</h2>

    ";
        // line 10
        if ((null === (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 10, $this->source); })()))) {
            // line 11
            echo "        <p>Le film n’existe pas</p>
    ";
        } else {
            // line 13
            echo "        <table>
            <tr><th>id</th><td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</td></tr>
            <tr><th>nom</th><td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</td></tr>
            <tr><th>année</th><td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 16, $this->source); })()), "annee", [], "any", false, false, false, 16), "html", null, true);
            echo "</td></tr>
            <tr><th>en stock</th><td>";
            // line 17
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 17, $this->source); })()), "enstock", [], "any", false, false, false, 17)) ? ("oui") : ("non"));
            echo "</td></tr>
            <tr><th>prix</th><td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), "html", null, true);
            echo " €</td></tr>
            <tr><th>quantitée</th><td>";
            // line 19
            (((null === twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 19, $this->source); })()), "quantite", [], "any", false, false, false, 19))) ? (print ("non renseigné")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 19, $this->source); })()), "quantite", [], "any", false, false, false, 19), "html", null, true))));
            echo "</td></tr>
        </table>
    ";
        }
        // line 22
        echo "
    <h2>Critiques</h2>
    <ul>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 25, $this->source); })()), "critiques", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["critique"]) {
            // line 26
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["critique"], "note", [], "any", false, false, false, 26), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["critique"], "avis", [], "any", false, false, false, 26), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['critique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxDoctrine/critiqueView2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 28,  125 => 26,  121 => 25,  116 => 22,  110 => 19,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  90 => 14,  87 => 13,  83 => 11,  81 => 10,  74 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Sandbox/Layouts/layout4.html.twig' %}

{% block vue %}
    <p><a href=\"{{ path('sandbox_doctrine_list') }}\">Retour vers la liste complète</a>.</p>

    {{ dump(film) }}

    <h2>Film</h2>

    {% if film is null %}
        <p>Le film n’existe pas</p>
    {% else %}
        <table>
            <tr><th>id</th><td>{{ film.id }}</td></tr>
            <tr><th>nom</th><td>{{ film.nom }}</td></tr>
            <tr><th>année</th><td>{{ film.annee }}</td></tr>
            <tr><th>en stock</th><td>{{ film.enstock ? 'oui' : 'non' }}</td></tr>
            <tr><th>prix</th><td>{{ film.prix }} €</td></tr>
            <tr><th>quantitée</th><td>{{ film.quantite is null ? 'non renseigné' : film.quantite }}</td></tr>
        </table>
    {% endif %}

    <h2>Critiques</h2>
    <ul>
        {% for critique in film.critiques %}
            <li>{{ critique.note }} : {{ critique.avis }}</li>
        {% endfor %}
    </ul>
{% endblock %}", "Sandbox/SandboxDoctrine/critiqueView2.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxDoctrine/critiqueView2.html.twig");
    }
}
