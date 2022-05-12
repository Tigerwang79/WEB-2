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

/* user/panier.html.twig */
class __TwigTemplate_c29d1546309b77af887d7af42d0a57bb57b962baee361d770e241c79179915e5 extends Template
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
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/base.html.twig", "user/panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<h1>Votre Panier</h1>
    <table class=\"table\" style=\"border-spacing: 75px 1rem\">
        <thead>
            <th>Libelle</th>
            <th>prix unitaire</th>
            <th>Quantite</th>
            <th>prix total</th>
            <th>Action</th>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paniers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
            // line 16
            echo "                 <tr>
                     <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 17), "libelle", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                     <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 18), "prix", [], "any", false, false, false, 18), "html", null, true);
            echo " €</td>
                     <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                     <td>";
            // line 20
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 20), "prix", [], "any", false, false, false, 20) * twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 20)), "html", null, true);
            echo " €</td>
                     <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete_product", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo " \">Supprimer</a></td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "

                 </tr>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td>
                        ";
        // line 30
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["reponse"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        echo " €
                    </td>

                    <td>
                        ";
        // line 34
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["reponse"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "html", null, true);
        echo " €
                    </td>
                </tr>
        </tbody>
    </table>
";
    }

    public function getTemplateName()
    {
        return "user/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  103 => 30,  94 => 23,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  67 => 16,  63 => 15,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/panier.html.twig", "C:\\wamp64\\www\\SiteFinal\\site\\templates\\user\\panier.html.twig");
    }
}
