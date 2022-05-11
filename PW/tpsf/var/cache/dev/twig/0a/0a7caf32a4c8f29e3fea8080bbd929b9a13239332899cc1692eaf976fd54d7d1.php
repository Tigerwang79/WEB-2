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

/* Sandbox/SandboxDoctrine/critiqueView1.html.twig */
class __TwigTemplate_b1b94f1cee90ab41f2a70b6f3fd1de14a3d1031d18a04447fa1890aa27586d21 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxDoctrine/critiqueView1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxDoctrine/critiqueView1.html.twig"));

        $this->parent = $this->loadTemplate("Sandbox/Layouts/layout4.html.twig", "Sandbox/SandboxDoctrine/critiqueView1.html.twig", 1);
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
    ";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["critiques"]) || array_key_exists("critiques", $context) ? $context["critiques"] : (function () { throw new RuntimeError('Variable "critiques" does not exist.', 7, $this->source); })()));
        echo "

    <h2>Film</h2>

    ";
        // line 11
        if ((null === (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "        <p>Le film n’existe pas</p>
    ";
        } else {
            // line 14
            echo "        <table>
             <tr><th>id</th><td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "</td></tr>
             <tr><th>nom</th><td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "</td></tr>
             <tr><th>année</th><td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 17, $this->source); })()), "annee", [], "any", false, false, false, 17), "html", null, true);
            echo "</td></tr>
             <tr><th>en stock</th><td>";
            // line 18
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 18, $this->source); })()), "enstock", [], "any", false, false, false, 18)) ? ("oui") : ("non"));
            echo "</td></tr>
             <tr><th>prix</th><td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 19, $this->source); })()), "prix", [], "any", false, false, false, 19), "html", null, true);
            echo " €</td></tr>
             <tr><th>quantitée</th><td>";
            // line 20
            (((null === twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 20, $this->source); })()), "quantite", [], "any", false, false, false, 20))) ? (print ("non renseigné")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 20, $this->source); })()), "quantite", [], "any", false, false, false, 20), "html", null, true))));
            echo "</td></tr>
         </table>
    ";
        }
        // line 23
        echo "
    <h2>Critiques</h2>
     <ul>
         ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["critiques"]) || array_key_exists("critiques", $context) ? $context["critiques"] : (function () { throw new RuntimeError('Variable "critiques" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["critique"]) {
            // line 27
            echo "             <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["critique"], "note", [], "any", false, false, false, 27), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["critique"], "avis", [], "any", false, false, false, 27), "html", null, true);
            echo "</li>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['critique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "     </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxDoctrine/critiqueView1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 29,  129 => 27,  125 => 26,  120 => 23,  114 => 20,  110 => 19,  106 => 18,  102 => 17,  98 => 16,  94 => 15,  91 => 14,  87 => 12,  85 => 11,  78 => 7,  74 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Sandbox/Layouts/layout4.html.twig' %}

{% block vue %}
    <p><a href=\"{{ path('sandbox_doctrine_list') }}\">Retour vers la liste complète</a>.</p>

    {{ dump(film) }}
    {{ dump(critiques) }}

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
         {% for critique in critiques %}
             <li>{{ critique.note }} : {{ critique.avis }}</li>
         {% endfor %}
     </ul>
{% endblock %}", "Sandbox/SandboxDoctrine/critiqueView1.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxDoctrine/critiqueView1.html.twig");
    }
}
