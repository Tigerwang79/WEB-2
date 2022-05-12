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
class __TwigTemplate_bf2ab241f31b61a961bcbb288532b50961ec8edf1b5c105be488f87e82772ede extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        $this->parent = $this->loadTemplate("base/base-vide.html.twig", "base/base.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "GPUStore";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style_text.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "        </header>
        <div class=\"vue\">

                ";
        // line 56
        $this->displayBlock('vue', $context, $blocks);
        // line 90
        echo "        </div>
        <footer style=\"position: absolute;bottom: 0;left: 0;right: 0;\">
            ";
        // line 92
        $this->displayBlock('footer', $context, $blocks);
        // line 95
        echo "
        </footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "        <header class=\"header\">
            ";
        // line 16
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "                <img style=\"width:100%\"  src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/anonymous.jpg"), "html", null, true);
            echo "\" alt=\"anonymous\">

            ";
        } else {
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 21
                echo "                    ";
                if ((0 === twig_compare($context["role"], "ROLE_SUPER_ADMIN"))) {
                    // line 22
                    echo "                    <img style=\"width:100%\"  src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/superAdmin.jpg"), "html", null, true);
                    echo "\" alt=\"superadmin\">

                    ";
                } elseif ((0 === twig_compare(                // line 24
$context["role"], "ROLE_ADMIN"))) {
                    // line 25
                    echo "                        <img style=\"width:100%\" height=\"100\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/admin.jpg"), "html", null, true);
                    echo "\" alt=\"admin\">

                    ";
                } elseif ((0 === twig_compare(                // line 27
$context["role"], "ROLE_CLIENT"))) {
                    // line 28
                    echo "                        <img style=\"width:100%\"  height=\"100\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/userTest.jpg"), "html", null, true);
                    echo "\" alt=\"client\">

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
        echo "                    <a style=\"font-size: 35px;line-height: 80px;padding: 50px;font-weight: bold;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
        echo "\" >GPUStore</a>
                    <ul>
                        ";
        // line 38
        echo "                        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeAnonyme"));
            echo "
                        ";
        } else {
            // line 41
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdminController::routeSuperAdmin"));
            echo "
                            ";
            // line 42
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeAdmin"));
            echo "
                            ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeUtilisateur"));
            echo "

                            <li>
                                <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_app_logout");
            echo "\">Déconnexion</a>
                            </li>
                        ";
        }
        // line 49
        echo "
                    </ul>
                </nav>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        // line 57
        echo "                    <h1>Bienvenue sur notre site de vente de cartes graphiques !</h1>
                    ";
        // line 58
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) {
            // line 59
            echo "                        <br>
                        <span>SESSION ANONYME</span>
                        <br>
                        <br>
                        <p>Vous n'êtes pas connecté sur notre site. N'hésitez pas à vous inscrire ou vous connecter afin de pouvoir consulter nos produits !</p>
                    ";
        } else {
            // line 65
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "roles", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 66
                echo "                        ";
                if ((0 === twig_compare($context["role"], "ROLE_SUPER_ADMIN"))) {
                    // line 67
                    echo "                            <br>
                            <span>SESSION SUPER ADMINISTRATEUR</span>
                            <br>
                            <br>
                            <p>Bonjour ";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "prenom", [], "any", false, false, false, 71), "html", null, true);
                    echo ", prenez soins de nos admins !</p>

                        ";
                } elseif ((0 === twig_compare(                // line 73
$context["role"], "ROLE_ADMIN"))) {
                    // line 74
                    echo "                            <br>
                            <span>SESSION ADMIN</span>
                            <br>
                            <br>
                            <p>Bonjour ";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "prenom", [], "any", false, false, false, 78), "html", null, true);
                    echo ", prenez soins de nos clients !</p>

                        ";
                } elseif ((0 === twig_compare(                // line 80
$context["role"], "ROLE_CLIENT"))) {
                    // line 81
                    echo "                            <br>
                            <span>SESSION CLIENT</span>
                            <br>
                            <br>
                            <p> Bonjour ";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "prenom", [], "any", false, false, false, 85), "html", null, true);
                    echo ", N'hésite pas à regarder nos produits peut être que tu auras un coup de coeur !</p>
                        ";
                }
                // line 87
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                    ";
        }
        // line 89
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 93
        echo "                <img style=\"width:100%\"  height=\"200\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/footerTest.jpg"), "html", null, true);
        echo "\" alt=\"anonymous\">
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  360 => 93,  350 => 92,  340 => 89,  337 => 88,  331 => 87,  326 => 85,  320 => 81,  318 => 80,  313 => 78,  307 => 74,  305 => 73,  300 => 71,  294 => 67,  291 => 66,  286 => 65,  278 => 59,  276 => 58,  273 => 57,  263 => 56,  250 => 49,  244 => 46,  238 => 43,  234 => 42,  229 => 41,  223 => 39,  220 => 38,  214 => 35,  211 => 33,  208 => 32,  202 => 31,  195 => 28,  193 => 27,  187 => 25,  185 => 24,  179 => 22,  176 => 21,  171 => 20,  164 => 17,  161 => 16,  158 => 14,  148 => 13,  135 => 95,  133 => 92,  129 => 90,  127 => 56,  122 => 53,  119 => 13,  109 => 12,  97 => 8,  92 => 7,  82 => 6,  63 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base/base-vide.html.twig' %}

{% block title %}GPUStore{% endblock %}

{% block stylesheets %}
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" >
    <link href=\"{{ asset('css/style_text.css') }}\" rel=\"stylesheet\" >
{% endblock %}


{% block body %}
    {% block header %}
        <header class=\"header\">
            {# en fonction du role(client/admin) de l'utilisateur une image lui est donnée de même pour ceux qui ne sont pas inscrit #}
            {% if not app.user %}
                <img style=\"width:100%\"  src=\"{{ asset('images/anonymous.jpg') }}\" alt=\"anonymous\">

            {% else %}
                {% for role in app.user.roles %}
                    {% if role==\"ROLE_SUPER_ADMIN\" %}
                    <img style=\"width:100%\"  src=\"{{ asset('images/superAdmin.jpg') }}\" alt=\"superadmin\">

                    {% elseif role==\"ROLE_ADMIN\" %}
                        <img style=\"width:100%\" height=\"100\" src=\"{{ asset('images/admin.jpg') }}\" alt=\"admin\">

                    {% elseif role==\"ROLE_CLIENT\" %}
                        <img style=\"width:100%\"  height=\"100\" src=\"{{ asset('images/userTest.jpg') }}\" alt=\"client\">

                    {% endif %}
                {% endfor %}
            {% endif %}
                <nav class=\"nav\">
                    {#Renvoie l'utilisateur à la page d'accueil#}
                    <a style=\"font-size: 35px;line-height: 80px;padding: 50px;font-weight: bold;\" href=\"{{ path('site') }}\" >GPUStore</a>
                    <ul>
                        {#en fonction de si on est connecté ou non, un menu s'affiche pour l'utilisateur#}
                        {% if not app.user %}
                            {{ render(controller('App\\\\Controller\\\\SiteController::routeAnonyme')) }}
                        {% else %}
                            {{ render(controller('App\\\\Controller\\\\AdminController::routeSuperAdmin')) }}
                            {{ render(controller('App\\\\Controller\\\\SiteController::routeAdmin')) }}
                            {{ render(controller('App\\\\Controller\\\\SiteController::routeUtilisateur')) }}

                            <li>
                                <a href=\"{{ path('security_app_logout') }}\">Déconnexion</a>
                            </li>
                        {% endif %}

                    </ul>
                </nav>
    {% endblock %}
        </header>
        <div class=\"vue\">

                {% block vue %}
                    <h1>Bienvenue sur notre site de vente de cartes graphiques !</h1>
                    {% if not app.user %}
                        <br>
                        <span>SESSION ANONYME</span>
                        <br>
                        <br>
                        <p>Vous n'êtes pas connecté sur notre site. N'hésitez pas à vous inscrire ou vous connecter afin de pouvoir consulter nos produits !</p>
                    {% else %}
                    {% for role in app.user.roles %}
                        {% if role==\"ROLE_SUPER_ADMIN\" %}
                            <br>
                            <span>SESSION SUPER ADMINISTRATEUR</span>
                            <br>
                            <br>
                            <p>Bonjour {{ app.user.prenom }}, prenez soins de nos admins !</p>

                        {% elseif role==\"ROLE_ADMIN\" %}
                            <br>
                            <span>SESSION ADMIN</span>
                            <br>
                            <br>
                            <p>Bonjour {{ app.user.prenom }}, prenez soins de nos clients !</p>

                        {% elseif role==\"ROLE_CLIENT\" %}
                            <br>
                            <span>SESSION CLIENT</span>
                            <br>
                            <br>
                            <p> Bonjour {{ app.user.prenom }}, N'hésite pas à regarder nos produits peut être que tu auras un coup de coeur !</p>
                        {% endif %}
                    {% endfor %}
                    {% endif %}
                {% endblock %}
        </div>
        <footer style=\"position: absolute;bottom: 0;left: 0;right: 0;\">
            {% block footer %}
                <img style=\"width:100%\"  height=\"200\" src=\"{{ asset('images/footerTest.jpg') }}\" alt=\"anonymous\">
            {% endblock %}

        </footer>

{% endblock %}
", "base/base.html.twig", "C:\\wamp64\\www\\SiteFinal\\site\\templates\\base\\base.html.twig");
    }
}
