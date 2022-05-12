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

/* security/registration.html.twig */
class __TwigTemplate_bf2bc9216819e66bc61c53a4e80254a0e0fb33c8dccd44f07eca233010ee26ad extends Template
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
        $this->parent = $this->loadTemplate("base/base.html.twig", "security/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <h1>Inscrition sur le site</h1><br>
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 6), 'row', ["label" => "Nom ", "attr" => ["placeholder" => "Votre Nom"]]);
        echo "<br>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 7), 'row', ["label" => "Prenom ", "attr" => ["placeholder" => "Votre Prenom"]]);
        echo "<br>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "birthday", [], "any", false, false, false, 8), 'row', ["label" => "Date de naissance ", "attr" => ["placeholder" => "Votre date de naissance"]]);
        echo "<br>
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 9), 'row', ["label" => "identifant ", "attr" => ["placeholder" => "Votre identidiant"]]);
        echo "<br>
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 10), 'row', ["label" => "Mot de passe ", "attr" => ["placeholder" => "mot de passe"]]);
        echo "<br>
    <button type=\"submit\" class=\"btn btn-success\">Inscription !</button><br>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/registration.html.twig", "C:\\wamp64\\www\\SiteFinal\\site\\templates\\security\\registration.html.twig");
    }
}
