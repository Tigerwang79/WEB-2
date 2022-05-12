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

/* produit/productList.html.twig */
class __TwigTemplate_0f37e5a45aa2ac14764660336b38b1e1fbd64c36c59ad1a376c8fb1dfcb10ce9 extends Template
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
        $this->parent = $this->loadTemplate("base/base.html.twig", "produit/productList.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <form method=\"post\">
        <table class=\"table\" style=\"border-spacing: 75px 1rem\">
            <thead>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Choix</th>
            </thead>
            <tbody>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "
            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "libelle", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 17), "html", null, true);
            echo " €</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantite", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 20
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product"], "quantite", [], "any", false, false, false, 20), 0))) {
                // line 21
                echo "                    ";
            } else {
                // line 22
                echo "                        <label>
                            <select name=\"choix[]\">
                                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_get_attribute($this->env, $this->source, $context["product"], "quantite", [], "any", false, false, false, 24)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 25
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                            </select>
                        </label>
                    ";
            }
            // line 30
            echo "                </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tr>
            </tbody>
        </table>
        <br><br><br><button type=\"submit\" style=\"padding: 5px 15px;\">Commander</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "produit/productList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  111 => 30,  106 => 27,  95 => 25,  91 => 24,  87 => 22,  84 => 21,  82 => 20,  77 => 18,  73 => 17,  69 => 16,  65 => 14,  61 => 13,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "produit/productList.html.twig", "C:\\wamp64\\www\\SiteFinal\\site\\templates\\produit\\productList.html.twig");
    }
}
