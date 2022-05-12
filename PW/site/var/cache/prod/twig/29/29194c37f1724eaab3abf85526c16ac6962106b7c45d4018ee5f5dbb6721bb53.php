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

/* @email/default/notification/body.txt.twig */
class __TwigTemplate_fc9991f7e3b3961c90d49cd31856cda244fabdf352a1775dc981cc0917f6809a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@email/zurb_2/notification/body.txt.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@email/zurb_2/notification/body.txt.twig", "@email/default/notification/body.txt.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@email/default/notification/body.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@email/default/notification/body.txt.twig", "C:\\wamp64\\www\\SiteFinal\\site\\vendor\\symfony\\twig-bridge\\Resources\\views\\Email\\default\\notification\\body.txt.twig");
    }
}
