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

/* reservation/addResAdmin.html.twig */
class __TwigTemplate_b30c59025d0d0c75d8dcea68364d0a6ca652a50660901b38f0a61f3348e4eb28 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/addResAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/addResAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "reservation/addResAdmin.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"app-content\">

    <div class=\"side-app\">

    <div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"card m-b-20\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">Réserver évenement</h3>

            </div>
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
            <div class=\"card-body\">

                <form>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputname\">date de la réservation</label>
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 21, $this->source); })()), "dateRes", [], "any", false, false, false, 21), 'widget');
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 22, $this->source); })()), "dateRes", [], "any", false, false, false, 22), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">nombres de personnes (max 2)</label>
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 26, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "nombres de personnes"]]);
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 27, $this->source); })()), "nbrPersonnes", [], "any", false, false, false, 27), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Event</label>
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 31, $this->source); })()), "event", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Event"]]);
        echo "

                    </div>

                    <div class=\"form-group mb-0\">
                        <div class=\"checkbox checkbox-secondary\">
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 37, $this->source); })()), 'widget');
        echo "
                            <button id=\"checkout-button\" type=\"submit\" class=\"btn btn-success \" ><i class=\"fe fe-check mr-2\"></i>réserver</button>
                        </div>
                    </div>
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 42
            echo "                        <div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                            <i class=\"fa fa-check-circle-o mr-2\" aria-hidden=\"true\"></i>";
            // line 43
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </form>
            </div>
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

    <script src=\"https://js.stripe.com/v3/\"></script>
    <script type=\"text/javascript\"></script>

    <script>
        function validateSubmit() {
            result = confirm(\"Êtes-vous sur de vouloir réserver ?\");
            if (result) {
                \$('#form').submit();


            }
        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/addResAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  145 => 46,  136 => 43,  133 => 42,  129 => 41,  122 => 37,  113 => 31,  106 => 27,  102 => 26,  95 => 22,  91 => 21,  82 => 15,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block body %}

    <div class=\"app-content\">

    <div class=\"side-app\">

    <div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"card m-b-20\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">Réserver évenement</h3>

            </div>
            {{ form_start(r)}}
            <div class=\"card-body\">

                <form>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputname\">date de la réservation</label>
                        {{ form_widget(r.dateRes ) }}
                        {{ form_errors(r.dateRes) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">nombres de personnes (max 2)</label>
                        {{ form_widget(r.nbrPersonnes , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'nombres de personnes'}} ) }}
                        {{ form_errors(r.nbrPersonnes) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Event</label>
                        {{ form_widget(r.event, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Event'}} ) }}

                    </div>

                    <div class=\"form-group mb-0\">
                        <div class=\"checkbox checkbox-secondary\">
                            {{ form_widget(r) }}
                            <button id=\"checkout-button\" type=\"submit\" class=\"btn btn-success \" ><i class=\"fe fe-check mr-2\"></i>réserver</button>
                        </div>
                    </div>
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                            <i class=\"fa fa-check-circle-o mr-2\" aria-hidden=\"true\"></i>{{ message }}
                        </div>
                    {% endfor %}
                </form>
            </div>
            {{ form_end(r) }}
        </div>
    </div>

    <script src=\"https://js.stripe.com/v3/\"></script>
    <script type=\"text/javascript\"></script>

    <script>
        function validateSubmit() {
            result = confirm(\"Êtes-vous sur de vouloir réserver ?\");
            if (result) {
                \$('#form').submit();


            }
        }
    </script>

{% endblock %}", "reservation/addResAdmin.html.twig", "C:\\Users\\firas\\FirstProject\\templates\\reservation\\addResAdmin.html.twig");
    }
}
