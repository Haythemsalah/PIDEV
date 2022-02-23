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

/* evenement/ajoutE.html.twig */
class __TwigTemplate_7c6469ff9af00e742a8b8872629142dfdaa77265b9a2fb1477e6805eab2d5021 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/ajoutE.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/ajoutE.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "evenement/ajoutE.html.twig", 1);
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
                <h3 class=\"card-title\">Ajouter un évenement</h3>

            </div>
            ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <div class=\"card-body\">


                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputname\">Nom</label>
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 21, $this->source); })()), "Nom", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom"]]);
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 22, $this->source); })()), "Nom", [], "any", false, false, false, 22), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputname\">Capacité</label>
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 26, $this->source); })()), "Capacite", [], "any", false, false, false, 26), 'widget');
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 27, $this->source); })()), "Capacite", [], "any", false, false, false, 27), 'errors');
        echo "
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Date</label>
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 31, $this->source); })()), "Date", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Date"]]);
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 32, $this->source); })()), "Date", [], "any", false, false, false, 32), 'errors');
        echo "

                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Image</label>
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 37, $this->source); })()), "Image", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Image"]]);
        echo "

                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Adresse</label>
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 42, $this->source); })()), "Adresse", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Adresse"]]);
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 43, $this->source); })()), "Adresse", [], "any", false, false, false, 43), 'errors');
        echo "

                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Description</label>
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 49, $this->source); })()), "Description", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Description"]]);
        echo "
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 50, $this->source); })()), "Description", [], "any", false, false, false, 50), 'errors');
        echo "

                    </div>


                    <div class=\"form-group mb-0\">
                        <div class=\"checkbox checkbox-secondary\">
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 57, $this->source); })()), 'widget');
        echo "
                            <button id=\"checkout-button\" type=\"submit\" class=\"btn btn-success \" ><i class=\"fe fe-check mr-2\"></i>Ajouter</button>
                        </div>
                    </div>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 62
            echo "                        <div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                            <i class=\"fa fa-check-circle-o mr-2\" aria-hidden=\"true\"></i>";
            // line 63
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
            </div>
            ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>

    <script src=\"https://js.stripe.com/v3/\"></script>
    <script type=\"text/javascript\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/ajoutE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 68,  183 => 66,  174 => 63,  171 => 62,  167 => 61,  160 => 57,  150 => 50,  146 => 49,  137 => 43,  133 => 42,  125 => 37,  117 => 32,  113 => 31,  106 => 27,  102 => 26,  95 => 22,  91 => 21,  82 => 15,  68 => 3,  58 => 2,  35 => 1,);
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
                <h3 class=\"card-title\">Ajouter un évenement</h3>

            </div>
            {{ form_start(f,{'attr' : {'novalidate' : 'novalidate'}})}}
            <div class=\"card-body\">


                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputname\">Nom</label>
                        {{ form_widget(f.Nom, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom'}}) }}
                        {{ form_errors(f.Nom) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputname\">Capacité</label>
                        {{ form_widget(f.Capacite) }}
                        {{ form_errors(f.Capacite) }}
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Date</label>
                        {{ form_widget(f.Date , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Date'}} ) }}
                        {{ form_errors(f.Date) }}

                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Image</label>
                        {{ form_widget(f.Image, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Image'}} ) }}

                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Adresse</label>
                        {{ form_widget(f.Adresse , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Adresse'}} ) }}
                        {{ form_errors(f.Adresse) }}

                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"exampleInputEmail2\">Description</label>
                        {{ form_widget(f.Description , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Description'}} ) }}
                        {{ form_errors(f.Description) }}

                    </div>


                    <div class=\"form-group mb-0\">
                        <div class=\"checkbox checkbox-secondary\">
                            {{ form_widget(f) }}
                            <button id=\"checkout-button\" type=\"submit\" class=\"btn btn-success \" ><i class=\"fe fe-check mr-2\"></i>Ajouter</button>
                        </div>
                    </div>
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                            <i class=\"fa fa-check-circle-o mr-2\" aria-hidden=\"true\"></i>{{ message }}
                        </div>
                    {% endfor %}

            </div>
            {{ form_end(f) }}
        </div>
    </div>

    <script src=\"https://js.stripe.com/v3/\"></script>
    <script type=\"text/javascript\"></script>

{% endblock %}", "evenement/ajoutE.html.twig", "C:\\Users\\firas\\FirstProject\\templates\\evenement\\ajoutE.html.twig");
    }
}
