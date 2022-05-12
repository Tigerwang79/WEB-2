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

/* menu/users.html.twig */
class __TwigTemplate_f2a105aeaf9491bc519cacff61e674b000db82978cc605ee3436e9096c5f5bca extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1), "roles", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
            // line 2
            echo "    ";
            if ((0 === twig_compare($context["roles"], "ROLE_CLIENT"))) {
                // line 3
                echo "        <li>
            <a href=\"";
                // line 4
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit2", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)]), "html", null, true);
                echo "\">Profil</a>
        </li>

        <li>
            <a href=\"";
                // line 8
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_products");
                echo "\">Listes des produits</a>
        </li>

        <li>
            <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_panier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)]), "html", null, true);
                echo "\">Panier</a>
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "menu/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  54 => 8,  47 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu/users.html.twig", "C:\\wamp64\\www\\SiteFinal\\site\\templates\\menu\\users.html.twig");
    }
}
