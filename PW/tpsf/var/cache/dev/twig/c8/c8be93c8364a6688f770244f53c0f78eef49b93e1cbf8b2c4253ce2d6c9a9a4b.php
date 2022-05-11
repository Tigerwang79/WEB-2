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

/* Sandbox/SandboxTwig/vue6.html.twig */
class __TwigTemplate_74aba6a6dc1209b76b76cb3cc13def1a9d3ccf624dd3587174adf1030ce09a47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titre_principal' => [$this, 'block_titre_principal'],
            'vue' => [$this, 'block_vue'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Sandbox/Layouts/layout3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxTwig/vue6.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Sandbox/SandboxTwig/vue6.html.twig"));

        $this->parent = $this->loadTemplate("Sandbox/Layouts/layout3.html.twig", "Sandbox/SandboxTwig/vue6.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " : vue 6";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_titre_principal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre_principal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre_principal"));

        echo "Titre principal de la vue 6";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        // line 8
        echo "    <h2> Qui suis-je ?</h2>
    <p>
        Je suis ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " et vous pouvez me contacter par mail à : <em>";
        echo twig_escape_filter($this->env, (isset($context["mail"]) || array_key_exists("mail", $context) ? $context["mail"] : (function () { throw new RuntimeError('Variable "mail" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</em> .
    </p>

    <h2>Nom des mentions</h2>
    <ul>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 15, $this->source); })()), "mentions", [], "array", false, false, false, 15));
        foreach ($context['_seq'] as $context["nomCourt"] => $context["mention"]) {
            // line 16
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "nom", [], "any", false, false, false, 16)), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $context["nomCourt"], "html", null, true);
            echo ")</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nomCourt'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>

    <h2>Nom des UEs avec leur volumes horaires</h2>
    <ul>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 22, $this->source); })()), "ues", [], "array", false, false, false, 22));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 23
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23), "html", null, true);
            echo ". (";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ue"], "nom", [], "array", false, false, false, 23) . " : ") . twig_get_attribute($this->env, $this->source, $context["ue"], "volume", [], "array", false, false, false, 23)), "html", null, true);
            echo "h)</li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

    <h2>Tableau complet</h2>
    <ul>
        <li>
            Mentions
            <ul>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 32, $this->source); })()), "mentions", [], "array", false, false, false, 32));
        foreach ($context['_seq'] as $context["nomCourt"] => $context["mention"]) {
            // line 33
            echo "                    <li>";
            echo twig_escape_filter($this->env, $context["nomCourt"], "html", null, true);
            echo "
                        <ul>
                            <li>nom : ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "nom", [], "array", false, false, false, 35), "html", null, true);
            echo "</li>
                            <li>parcours :
                                <ul>
                                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["mention"], "parcours", [], "array", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["parcour"]) {
                // line 39
                echo "                                        <li>";
                echo twig_escape_filter($this->env, $context["parcour"], "html", null, true);
                echo "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parcour'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                </ul>
                            </li>
                            <li>responsable : ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mention"], "responsable", [], "array", false, false, false, 43), "html", null, true);
            echo "</li>
                        </ul>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nomCourt'], $context['mention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </ul>
        </li>
        <li>UEs
            <ul>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 51, $this->source); })()), "ues", [], "array", false, false, false, 51));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 52
            echo "                    <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 52), "html", null, true);
            echo "
                        <ul>
                            <li>nom : ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</li>
                            <li>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "volume", [], "any", false, false, false, 55), "html", null, true);
            echo " heure(s)</li>
                        </ul>
                    </li>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "            </ul>
        </li>
    </ul>

    <h2>Nombre de mentions</h2>
    <p>";
        // line 64
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 64, $this->source); })()), "mentions", [], "array", false, false, false, 64)), "html", null, true);
        echo " mention(s)</p>

    <h2>Le filtre <code>format</code></h2>
    ";
        // line 67
        $context["ville"] = "Poitiers";
        // line 68
        echo "    <p>";
        echo twig_escape_filter($this->env, twig_sprintf("il est %d heures à %s", 17, (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 68, $this->source); })())), "html", null, true);
        echo "</p>

    <h2>Variable globale <code>app</code></h2>
    <p>
        app.session : ";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "session", [], "any", false, false, false, 72));
        echo "
        app.request : ";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73));
        echo "
        app.environment : ";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "environment", [], "any", false, false, false, 74));
        echo "
        app.debug : ";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "debug", [], "any", false, false, false, 75));
        echo "
        app.user : ";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76));
        echo "
    </p>

    <h2>UEs dont le volume horaire est &ge; 30h</h2>
    <ul>
        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 81, $this->source); })()), "ues", [], "array", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["ue"]) {
            // line 82
            echo "            ";
            if ((0 <= twig_compare(twig_get_attribute($this->env, $this->source, $context["ue"], "volume", [], "array", false, false, false, 82), 30))) {
                // line 83
                echo "                <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "nom", [], "array", false, false, false, 83), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ue"], "volume", [], "array", false, false, false, 83), "html", null, true);
                echo "h)</li>
            ";
            }
            // line 85
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Sandbox/SandboxTwig/vue6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 86,  345 => 85,  337 => 83,  334 => 82,  330 => 81,  322 => 76,  318 => 75,  314 => 74,  310 => 73,  306 => 72,  298 => 68,  296 => 67,  290 => 64,  283 => 59,  265 => 55,  261 => 54,  255 => 52,  238 => 51,  232 => 47,  222 => 43,  218 => 41,  209 => 39,  205 => 38,  199 => 35,  193 => 33,  189 => 32,  180 => 25,  161 => 23,  144 => 22,  138 => 18,  127 => 16,  123 => 15,  113 => 10,  109 => 8,  99 => 7,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Sandbox/Layouts/layout3.html.twig' %}

{% block title %}{{ parent() }} : vue 6{% endblock %}

{% block titre_principal %}Titre principal de la vue 6{% endblock %}

{% block vue %}
    <h2> Qui suis-je ?</h2>
    <p>
        Je suis {{ prenom }} et vous pouvez me contacter par mail à : <em>{{ mail }}</em> .
    </p>

    <h2>Nom des mentions</h2>
    <ul>
        {% for nomCourt, mention in offre['mentions'] %}
        <li>{{ mention.nom|upper }} ({{ nomCourt }})</li>
        {% endfor %}
    </ul>

    <h2>Nom des UEs avec leur volumes horaires</h2>
    <ul>
        {% for ue in offre['ues'] %}
            <li>{{ loop.index }}. ({{ ue['nom'] ~ ' : ' ~ ue['volume'] }}h)</li>
        {% endfor %}
    </ul>

    <h2>Tableau complet</h2>
    <ul>
        <li>
            Mentions
            <ul>
                {% for nomCourt, mention in offre['mentions'] %}
                    <li>{{ nomCourt }}
                        <ul>
                            <li>nom : {{ mention['nom'] }}</li>
                            <li>parcours :
                                <ul>
                                    {% for parcour in mention['parcours'] %}
                                        <li>{{ parcour }}</li>
                                    {% endfor %}
                                </ul>
                            </li>
                            <li>responsable : {{ mention['responsable'] }}</li>
                        </ul>
                    </li>
                {% endfor %}
            </ul>
        </li>
        <li>UEs
            <ul>
                {% for ue in offre['ues'] %}
                    <li>{{ loop.index0 }}
                        <ul>
                            <li>nom : {{ ue.nom }}</li>
                            <li>{{ ue.volume }} heure(s)</li>
                        </ul>
                    </li>
                {% endfor %}
            </ul>
        </li>
    </ul>

    <h2>Nombre de mentions</h2>
    <p>{{ offre['mentions'] | length }} mention(s)</p>

    <h2>Le filtre <code>format</code></h2>
    {% set ville = 'Poitiers' %}
    <p>{{ 'il est %d heures à %s' | format(17, ville)}}</p>

    <h2>Variable globale <code>app</code></h2>
    <p>
        app.session : {{ dump(app.session) }}
        app.request : {{ dump(app.request) }}
        app.environment : {{ dump(app.environment) }}
        app.debug : {{ dump(app.debug) }}
        app.user : {{ dump(app.user) }}
    </p>

    <h2>UEs dont le volume horaire est &ge; 30h</h2>
    <ul>
        {% for ue in offre['ues'] %}
            {% if ue['volume'] >= 30 %}
                <li>{{ ue['nom'] }} ({{ ue['volume'] }}h)</li>
            {% endif %}
        {% endfor %}
    </ul>
{% endblock %}", "Sandbox/SandboxTwig/vue6.html.twig", "/opt/lampp/htdocs/tpsf/templates/Sandbox/SandboxTwig/vue6.html.twig");
    }
}
