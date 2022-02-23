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

/* evenement/afficheE.html.twig */
class __TwigTemplate_708be2183948300a464e66b73532bd364b56974e6db7bf96dafc826d48c65b3e extends Template
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
        // line 1
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/afficheE.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/afficheE.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "evenement/afficheE.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <table class=\"table mb-0\">
        <div style=\"margin-left:1250px;\">
            <a class=\"btn btn-info\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutE");
        echo "\"> Ajouter un Event </a>
        </div>
        <tr>
            <td>
                ID
            </td>
            <td>
                Nom
            </td>
            <td>
                Capacite
            </td>
            <td>
                Date
            </td>
            <td>
                Description
            </td>
            <td>
                Image
            </td>
            <td>
                Adresse
            </td>
        </tr>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 33
            echo "            <tr>

                <td>
                    ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Nom", [], "any", false, false, false, 39), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Capacite", [], "any", false, false, false, 42), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDate", [], "method", false, false, false, 45), "d-m-Y"), "html", null, true);
            echo "
                </td>

                <td>
                    ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Description", [], "any", false, false, false, 49), "html", null, true);
            echo "
                </td>
                <td><img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/" . twig_get_attribute($this->env, $this->source, $context["i"], "Image", [], "any", false, false, false, 51))), "html", null, true);
            echo "\" alt=\"img\" class=\"image\" style=\"max-height: 180px; width: 150px;\" ></td>

                <td>
                    ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Adresse", [], "any", false, false, false, 54), "html", null, true);
            echo "
                </td>

                <td>
                    <form action=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutE", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">
                        <button>Ajouter</button>
                    </form>
                </td>

                <td>
                    <form action=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppE", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">
                        <button>Supprimer</button>
                    </form>
                </td>
                <td>
                    <form action=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifE", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">
                        <button>modifier</button>
                    </form>
                </td>


            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/afficheE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 77,  170 => 69,  162 => 64,  153 => 58,  146 => 54,  140 => 51,  135 => 49,  128 => 45,  122 => 42,  116 => 39,  110 => 36,  105 => 33,  101 => 32,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block body %}

    <table class=\"table mb-0\">
        <div style=\"margin-left:1250px;\">
            <a class=\"btn btn-info\" href=\"{{path('ajoutE')}}\"> Ajouter un Event </a>
        </div>
        <tr>
            <td>
                ID
            </td>
            <td>
                Nom
            </td>
            <td>
                Capacite
            </td>
            <td>
                Date
            </td>
            <td>
                Description
            </td>
            <td>
                Image
            </td>
            <td>
                Adresse
            </td>
        </tr>
        {%  for i in e %}
            <tr>

                <td>
                    {{ i.id }}
                </td>
                <td>
                    {{ i.Nom }}
                </td>
                <td>
                    {{ i.Capacite}}
                </td>
                <td>
                    {{ i.getDate()|date('d-m-Y') }}
                </td>

                <td>
                    {{ i.Description}}
                </td>
                <td><img src=\"{{ asset('/uploads/' ~ i.Image ) }}\" alt=\"img\" class=\"image\" style=\"max-height: 180px; width: 150px;\" ></td>

                <td>
                    {{ i.Adresse}}
                </td>

                <td>
                    <form action=\"{{ path('ajoutE',{'id':i.id}) }}\">
                        <button>Ajouter</button>
                    </form>
                </td>

                <td>
                    <form action=\"{{ path('suppE',{'id':i.id}) }}\">
                        <button>Supprimer</button>
                    </form>
                </td>
                <td>
                    <form action=\"{{ path('modifE',{'id':i.id}) }}\">
                        <button>modifier</button>
                    </form>
                </td>


            </tr>
        {% endfor %}

    </table>
{% endblock %}", "evenement/afficheE.html.twig", "C:\\Users\\firas\\FirstProject\\templates\\evenement\\afficheE.html.twig");
    }
}
