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

/* admin/ajouterProduit.html.twig */
class __TwigTemplate_36d079d4ec4e5e27bcb9efa463d0a01df4b436eb9f6f08e2e78b71cf7c91136e extends Template
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
        $this->parent = $this->loadTemplate("base/base.html.twig", "admin/ajouterProduit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h1>Ajouter un produit</h1>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "libelle", [], "any", false, false, false, 6), 'row', ["attr" => ["placeholder" => "Nom du produit"]]);
        echo "<br>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prix", [], "any", false, false, false, 7), 'row', ["attr" => ["placeholder" => "Prix du produit"]]);
        echo "<br>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantite", [], "any", false, false, false, 8), 'row', ["attr" => ["placeholder" => "Quantite du produit"]]);
        echo "<br>
    <button type=\"submit\">
        Ajouter le produit
    </button>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


";
    }

    public function getTemplateName()
    {
        return "admin/ajouterProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/ajouterProduit.html.twig", "C:\\wamp64\\www\\SiteFinal\\site\\templates\\admin\\ajouterProduit.html.twig");
    }
}
