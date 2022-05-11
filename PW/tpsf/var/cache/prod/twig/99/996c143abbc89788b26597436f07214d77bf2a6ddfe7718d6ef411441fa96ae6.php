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

/* Sandbox/SandboxDoctrine/viewFlash.html.twig */
class __TwigTemplate_b2d5bc2eb9e8df21bcf535cd9139c9c98c44d12938e32ce76edcc7aa8be2f1c2 extends Template
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
        $this->parent = $this->loadTemplate("Sandbox/Layouts/layout4.html.twig", "Sandbox/SandboxDoctrine/viewFlash.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " : Doctrine";
    }

    // line 5
    public function block_titre_principal($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Doctrine : view";
    }

    // line 7
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <h2>Détails du film n°";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "</h2>

    ";
        // line 10
        if ((null === ($context["film"] ?? null))) {
            // line 11
            echo "        <p>Le film ";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo " n'existe pas</p>
    ";
        } else {
            // line 13
            echo "        <ul>
            <li>id : ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "</li>
            <li>nom : ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "nom", [], "any", false, false, false, 15), "html", null, true);
            echo "</li>
            <li>année : ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "annee", [], "any", false, false, false, 16), "html", null, true);
            echo "</li>
            <li>en stock : ";
            // line 17
            echo ((twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "enstock", [], "any", false, false, false, 17)) ? ("oui") : ("non"));
            echo "</li>
            <li>prix : ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "prix", [], "any", false, false, false, 18), "html", null, true);
            echo " €</li>
            <li>quantité : ";
            // line 19
            (((null === twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "quantite", [], "any", false, false, false, 19))) ? (print ("non renseigné")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["film"] ?? null), "quantite", [], "any", false, false, false, 19), "html", null, true))));
            echo "</li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxDoctrine/viewFlash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  81 => 13,  75 => 11,  73 => 10,  67 => 8,  63 => 7,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/SandboxDoctrine/viewFlash.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxDoctrine/viewFlash.html.twig");
    }
}
