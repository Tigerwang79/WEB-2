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

/* base/base.html.twig */
class __TwigTemplate_62bf56139706faa75caeb317854cb9e9c4c7969a9d9ac40e4ab25f2ad071a502 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'vue' => [$this, 'block_vue'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base/base-vide.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/base-vide.html.twig", "base/base.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Uel Vente de pierre précieuse";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style_text.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 54
        echo "        </header>

        <div class=\"vue\">

                ";
        // line 58
        $this->displayBlock('vue', $context, $blocks);
        // line 84
        echo "        </div>

        <footer style=\"position: absolute;bottom: 0;left: 0;right: 0;\">
            ";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "
        </footer>

";
    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <header class=\"header\">
            ";
        // line 16
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "                <img style=\"width:100%\"  src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/anonymous.jpg"), "html", null, true);
            echo "\" alt=\"anonymous\">

            ";
        } else {
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 21
                echo "                    ";
                if ((0 === twig_compare($context["role"], "ROLE_SUPER_ADMIN"))) {
                    // line 22
                    echo "                    <img style=\"width:100%\"  src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/admin.jpg"), "html", null, true);
                    echo "\" alt=\"admin\">

                    ";
                } elseif ((0 === twig_compare(                // line 24
$context["role"], "ROLE_ADMIN"))) {
                    // line 25
                    echo "                        <img style=\"width:100%\"  src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/admin.jpg"), "html", null, true);
                    echo "\" alt=\"admin\">

                    ";
                } elseif ((0 === twig_compare(                // line 27
$context["role"], "ROLE_CLIENT"))) {
                    // line 28
                    echo "                        <img style=\"width:100%\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.jpg"), "html", null, true);
                    echo "\" alt=\"admin\">

                    ";
                }
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        }
        // line 33
        echo "                <nav class=\"nav\">
                    ";
        // line 35
        echo "                    <a style=\"font-size: 35px;line-height: 80px;padding: 0 100px;font-weight: bold;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
        echo "\" >UEL</a>
                    <ul>
                        ";
        // line 38
        echo "                        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "
                            ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeAnonyme"));
            echo "
                        ";
        } else {
            // line 42
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdminController::routeSuperAdmin"));
            echo "
                            ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeAdmin"));
            echo "
                            ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeUtilisateur"));
            echo "

                            <li>
                                <a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_app_logout");
            echo "\">Déconnexion</a>
                            </li>
                        ";
        }
        // line 50
        echo "
                    </ul>
                </nav>
            ";
    }

    // line 58
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                    <h1>Bienvenue sur notre site de vente de pierre précieuses !</h1>
                    ";
        // line 60
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 60)) {
            // line 61
            echo "                        <br>
                        <span>SESSION ANONYME</span>
                        <p>Je vois que vous n'êtes pas connecté sur notre site. N'hésitez pas à vous inscrire ou vous connecter !</p>
                    ";
        } else {
            // line 65
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 65), "roles", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 66
                echo "                        ";
                if ((0 === twig_compare($context["role"], "ROLE_SUPER_ADMIN"))) {
                    // line 67
                    echo "                            <br>
                            <span>SESSION SUPER ADMIN</span>
                            <p>Bonjour super maitre, prenez soins de nos admins !</p>

                        ";
                } elseif ((0 === twig_compare(                // line 71
$context["role"], "ROLE_ADMIN"))) {
                    // line 72
                    echo "                            <br>
                            <span>SESSION ADMIN</span>
                            <p>Bonjour maitre, prenez soins de nos utilisateurs !</p>

                        ";
                } elseif ((0 === twig_compare(                // line 76
$context["role"], "ROLE_CLIENT"))) {
                    // line 77
                    echo "                            <br>
                            <span>SESSION CLIENT</span>
                            <p> Salut, N'hésite pas à regarder nos produits peut être que tu auras un coup de coeur !</p>
                        ";
                }
                // line 81
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                    ";
        }
        // line 83
        echo "                ";
    }

    // line 87
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                <img style=\"width:100%\"  src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/footer.jpg"), "html", null, true);
        echo "\" alt=\"anonymous\">
            ";
    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 88,  265 => 87,  261 => 83,  258 => 82,  252 => 81,  246 => 77,  244 => 76,  238 => 72,  236 => 71,  230 => 67,  227 => 66,  222 => 65,  216 => 61,  214 => 60,  211 => 59,  207 => 58,  200 => 50,  194 => 47,  188 => 44,  184 => 43,  179 => 42,  174 => 40,  171 => 39,  168 => 38,  162 => 35,  159 => 33,  156 => 32,  150 => 31,  143 => 28,  141 => 27,  135 => 25,  133 => 24,  127 => 22,  124 => 21,  119 => 20,  112 => 17,  109 => 16,  106 => 14,  102 => 13,  95 => 90,  93 => 87,  88 => 84,  86 => 58,  80 => 54,  77 => 13,  73 => 12,  67 => 8,  62 => 7,  58 => 6,  51 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/base.html.twig", "C:\\wamp64\\www\\SiteFinal\\site\\templates\\base\\base.html.twig");
    }
}
