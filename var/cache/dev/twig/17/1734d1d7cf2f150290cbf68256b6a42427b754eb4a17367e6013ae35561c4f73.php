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

/* reservation/afficheResAdmin.html.twig */
class __TwigTemplate_2cc77013249fbd7430607adeb1508c24f265f979a8ffc81b8c7a3a3d296209ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/afficheResAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/afficheResAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "reservation/afficheResAdmin.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <table class=\"table mb-0\">
        <div style=\"margin-left:1250px;\">
            <a class=\"btn btn-info\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutResAdmin");
        echo "\"> Ajouter une Reservation </a>

        </div>
        <tr>
            <td>
                ID
            </td>
            <td>
                DateReservation
            </td>
            <td>
                nbrPersonne
            </td>
            <td>
                Date
            </td>
            <td>
                Event
            </td>

        </tr>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "            <tr>

                <td>
                    ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDateRes", [], "method", false, false, false, 36), "d-m-Y H:i:s"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "event", [], "any", false, false, false, 39), "Nom", [], "any", false, false, false, 39), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "nbrPersonnes", [], "any", false, false, false, 42), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["i"], "Event", [], "any", false, false, false, 45), "Nom", [], "any", false, false, false, 45), "html", null, true);
            echo "
                </td>

                <td>

                    <a class=\"btn btn-info\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppRes", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">
                        <button>Supprimer</button>
                    </a>

                </td>
                <td>
                    <a class=\"btn btn-info\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifRes", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">
                        <button>modifier</button>
                    </a>
                </td>


            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/afficheResAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 64,  147 => 56,  138 => 50,  130 => 45,  124 => 42,  118 => 39,  112 => 36,  106 => 33,  101 => 30,  97 => 29,  73 => 8,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base-back.html.twig' %}

{% block body %}

    <table class=\"table mb-0\">
        <div style=\"margin-left:1250px;\">
            <a class=\"btn btn-info\" href=\"{{path('ajoutResAdmin')}}\"> Ajouter une Reservation </a>

        </div>
        <tr>
            <td>
                ID
            </td>
            <td>
                DateReservation
            </td>
            <td>
                nbrPersonne
            </td>
            <td>
                Date
            </td>
            <td>
                Event
            </td>

        </tr>
        {%  for i in r %}
            <tr>

                <td>
                    {{ i.id }}
                </td>
                <td>
                    {{ i.getDateRes()|date('d-m-Y H:i:s') }}
                </td>
                <td>
                    {{ i.event.Nom}}
                </td>
                <td>
                    {{ i.nbrPersonnes }}
                </td>
                <td>
                    {{ i.Event.Nom }}
                </td>

                <td>

                    <a class=\"btn btn-info\" href=\"{{ path('suppRes',{'id':i.id}) }}\">
                        <button>Supprimer</button>
                    </a>

                </td>
                <td>
                    <a class=\"btn btn-info\" href=\"{{ path('modifRes',{'id':i.id}) }}\">
                        <button>modifier</button>
                    </a>
                </td>


            </tr>
        {% endfor %}

    </table>
{% endblock %}
", "reservation/afficheResAdmin.html.twig", "C:\\Users\\firas\\FirstProject\\templates\\reservation\\afficheResAdmin.html.twig");
    }
}
