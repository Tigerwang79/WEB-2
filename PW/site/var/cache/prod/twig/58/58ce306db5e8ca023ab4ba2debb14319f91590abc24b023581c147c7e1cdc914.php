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

/* menu/admin.html.twig */
class __TwigTemplate_15aefc299887c70ec332f48c691f330d8fce6a605033c8829d1fa6c2ffcb7c35 extends Template
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
            if ((0 === twig_compare($context["roles"], "ROLE_ADMIN"))) {
                // line 3
                echo "        <li>
            <a href=\"";
                // line 4
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_product");
                echo "\">Ajouter un produit</a>
        </li>
        <li>
            <a href=\"";
                // line 7
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
                echo "\">Administration</a>

        </li>

        <li>
            <a href=\"https://safemoon.net/\" target=\"_blank\">ToTheMoon</a>
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
        return "menu/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu/admin.html.twig", "C:\\wamp64\\www\\SiteFinal\\site\\templates\\menu\\admin.html.twig");
    }
}
