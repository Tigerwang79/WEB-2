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

/* Sandbox/SandboxPrefix/hello4.html.twig */
class __TwigTemplate_24db3d4620cbf2b32ae0f959ec0dbc07a95d148ad5db8ad586cba25bad433845 extends Template
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
        echo "<body>
<h1> Bienvenue ";
        // line 2
        echo twig_escape_filter($this->env, ($context["prenom"] ?? null), "html", null, true);
        echo "</h1>
<p>
    Mes jeux préférés sont&nbsp;:
    <table>
    ";
        // line 6
        $context["i"] = 1;
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jeux"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 8
            echo "        <tr>
            <td>";
            // line 9
            echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["jeu"], "html", null, true);
            echo "</td>
        </tr>
        ";
            // line 11
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </table>
</p>
</body>";
    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxPrefix/hello4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  66 => 12,  64 => 11,  57 => 9,  54 => 8,  49 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Sandbox/SandboxPrefix/hello4.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxPrefix/hello4.html.twig");
    }
}
