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

/* evenement/afficheEvenement.html.twig */
class __TwigTemplate_86bed0a91f060f29dd25963a4a4da256303a4211856a5ef0a30af10fe9a53366 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/afficheEvenement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/afficheEvenement.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "evenement/afficheEvenement.html.twig", 1);
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "    <tr>

        <td>
            ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "
        </td>
        <td>
            ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Nom", [], "any", false, false, false, 36), "html", null, true);
            echo "
        </td>
        <td>
            ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Capacite", [], "any", false, false, false, 39), "html", null, true);
            echo "
        </td>
        <td>
            ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "getDate", [], "method", false, false, false, 42), "d-m-Y H:i:s"), "html", null, true);
            echo "
        </td>

        <td>
            ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Description", [], "any", false, false, false, 46), "html", null, true);
            echo "
        </td>
        <td>
            ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Image", [], "any", false, false, false, 49), "html", null, true);
            echo "
        </td>

        <td>
            ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "Adresse", [], "any", false, false, false, 53), "html", null, true);
            echo "
        </td>

        <td>
            <form action=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutE", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">
                <button>Ajouter</button>
            </form>
        </td>

        <td>
            <form action=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">
                <button>Supprimer</button>
            </form>
        </td>


    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/afficheEvenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 71,  158 => 63,  149 => 57,  142 => 53,  135 => 49,  129 => 46,  122 => 42,  116 => 39,  110 => 36,  104 => 33,  99 => 30,  95 => 29,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block body %}

<table class=\"table mb-0\">
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
            {{ i.getDate()|date('d-m-Y H:i:s') }}
        </td>

        <td>
            {{ i.Description}}
        </td>
        <td>
            {{ i.Image}}
        </td>

        <td>
            {{ i.Adresse}}
        </td>

        <td>
            <form action=\"{{ path('ajoutE',{'id':i.id}) }}\">
                <button>Ajouter</button>
            </form>
        </td>

        <td>
            <form action=\"{{ path('delete',{'id':i.id}) }}\">
                <button>Supprimer</button>
            </form>
        </td>


    </tr>
    {% endfor %}

</table>
{% endblock %}", "evenement/afficheEvenement.html.twig", "C:\\Users\\firas\\FirstProject\\templates\\evenement\\afficheEvenement.html.twig");
    }
}
