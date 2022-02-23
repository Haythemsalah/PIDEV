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

/* base-front.html.twig */
class __TwigTemplate_9df104623d55fcef600b611daa83552821068d30c9fdcf8c4212d2a14d55f7af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>

<html lang=\"zxx\">

<head>

    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Gym Template\">
    <meta name=\"keywords\" content=\"Gym, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/css/flaticon.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/css/barfiller.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
</head>

<body>

<!-- Offcanvas Menu Section Begin -->
<div class=\"offcanvas-menu-overlay\"></div>
<div class=\"offcanvas-menu-wrapper\">
    <div class=\"canvas-close\">
        <i class=\"fa fa-close\"></i>
    </div>
    <div class=\"canvas-search search-switch\">
        <i class=\"fa fa-search\"></i>
    </div>
    <nav class=\"canvas-menu mobile-menu\">
        <ul>
            <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./index.html"), "html", null, true);
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./about-us.html"), "html", null, true);
        echo "\">About Us</a></li>
            <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./classes.html"), "html", null, true);
        echo "\">Classes</a></li>
            <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./services.html"), "html", null, true);
        echo "\">Services</a></li>
            <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./team.html"), "html", null, true);
        echo "\">Our Team</a></li>
           <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./reservationEvenement.html"), "html", null, true);
        echo "\">Réserver un Evenement</a></li>
            <li><a href=\"#\">Pages</a>
                <ul class=\"dropdown\">
                    <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./about-us.html"), "html", null, true);
        echo "\">About us</a></li>
                    <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./class-timetable.html"), "html", null, true);
        echo "\">Classes timetable</a></li>
                    <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./bmi-calculator.html"), "html", null, true);
        echo "\">Bmi calculate</a></li>
                    <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./team.html"), "html", null, true);
        echo "\">Our team</a></li>
                    <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./reservationEvenement.html"), "html", null, true);
        echo "\">Nos Evenement</a></li>
                    <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./gallery.html"), "html", null, true);
        echo "\">Gallery</a></li>
                    <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./blog.html"), "html", null, true);
        echo "\">Our blog</a></li>
                    <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./404.html"), "html", null, true);
        echo "\">404</a></li>
                </ul>
            </li>
            <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./contact.html"), "html", null, true);
        echo "\">Contact</a></li>
        </ul>
    </nav>
    <div id=\"mobile-menu-wrap\"></div>
    <div class=\"canvas-social\">
        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a>
        <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a>
        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-youtube-play\"></i></a>
        <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("#"), "html", null, true);
        echo "\"><i class=\"fa fa-instagram\"></i></a>
    </div>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->

<header class=\"header-section\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"logo\">
                    <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./index.html"), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <nav class=\"nav-menu\">
                    <ul>
                        <li class=\"active\"><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./index.html"), "html", null, true);
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./about-us.html"), "html", null, true);
        echo "\">About Us</a></li>
                        <li><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./class-details.html"), "html", null, true);
        echo "\">Classes</a></li>
                        <li><a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./services.html"), "html", null, true);
        echo "\">Services</a></li>
                        <li><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./team.html"), "html", null, true);
        echo "\">Our Team</a></li>
                        <li><a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./reservationEvenement.html"), "html", null, true);
        echo "\">Réserver un Evenement</a></li>
                        <li><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\">Pages</a>
                            <ul class=\"dropdown\">
                                <li><a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./about-us.html"), "html", null, true);
        echo "\">About us</a></li>
                                <li><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./class-timetable.html"), "html", null, true);
        echo "\">Classes timetable</a></li>
                                <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./bmi-calculator.html"), "html", null, true);
        echo "\">Bmi calculate</a></li>
                                <li><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./team.html"), "html", null, true);
        echo "\">Our team</a></li>
                                <li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./reservationEvenement.html"), "html", null, true);
        echo "\">Nos Evenement</a></li>
                                <li><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./gallery.html"), "html", null, true);
        echo "\">Gallery</a></li>
                                <li><a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./blog.html"), "html", null, true);
        echo "\">Our blog</a></li>
                                <li><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./404.html"), "html", null, true);
        echo "\">404</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/./contact.html"), "html", null, true);
        echo "\">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"top-option\">
                    <div class=\"to-search search-switch\">
                        <i class=\"fa fa-search\"></i>
                    </div>
                    <div class=\"to-social\">
                        <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"canvas-open\">
            <i class=\"fa fa-bars\"></i>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Hero Section Begin -->
<section class=\"hero-section\">
    <div class=\"hs-slider owl-carousel\">
        <div class=\"hs-item set-bg\" data-setbg=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/hero/hero-1.jpg"), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-6\">
                        <div class=\"hi-text\">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                            <a href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\" class=\"primary-btn\">Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"hs-item set-bg\" data-setbg=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/hero/hero-2.jpg"), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-6\">
                        <div class=\"hi-text\">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                            <a href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\" class=\"primary-btn\">Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- ChoseUs Section Begin -->
<section class=\"choseus-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Why chose us?</span>
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"cs-item\">
                    <span class=\"flaticon-034-stationary-bike\"></span>
                    <h4>Modern equipment</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        dolore facilisis.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"cs-item\">
                    <span class=\"flaticon-033-juice\"></span>
                    <h4>Healthy nutrition plan</h4>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"cs-item\">
                    <span class=\"flaticon-002-dumbell\"></span>
                    <h4>Proffesponal training plan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        dolore facilisis.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"cs-item\">
                    <span class=\"flaticon-014-heart-beat\"></span>
                    <h4>Unique to your needs</h4>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- Classes Section Begin -->
<section class=\"classes-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Our Classes</span>
                    <h2>WHAT WE CAN OFFER</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"class-item\">
                    <div class=\"ci-pic\">
                        <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/classes/class-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"ci-text\">
                        <span>STRENGTH</span>
                        <h5>Weightlifting</h5>
                        <a href=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"class-item\">
                    <div class=\"ci-pic\">
                        <img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/classes/class-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"ci-text\">
                        <span>Cardio</span>
                        <h5>Indoor cycling</h5>
                        <a href=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"class-item\">
                    <div class=\"ci-pic\">
                        <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/classes/class-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"ci-text\">
                        <span>STRENGTH</span>
                        <h5>Kettlebell power</h5>
                        <a href=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"class-item\">
                    <div class=\"ci-pic\">
                        <img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/classes/class-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"ci-text\">
                        <span>Cardio</span>
                        <h4>Indoor cycling</h4>
                        <a href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"class-item\">
                    <div class=\"ci-pic\">
                        <img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/classes/class-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"ci-text\">
                        <span>Training</span>
                        <h4>Boxing</h4>
                        <a href=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- Banner Section Begin -->
<section class=\"banner-section set-bg\" data-setbg=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/banner-bg.jpg"), "html", null, true);
        echo "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"bs-text\">
                    <h2>registration now to get more deals</h2>
                    <div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
                    <a href=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\" class=\"primary-btn  btn-normal\">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Pricing Section Begin -->
<section class=\"pricing-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Our Plan</span>
                    <h2>Choose your pricing plan</h2>
                </div>
            </div>
        </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-8\">
                <div class=\"ps-item\">
                    <h3>Class drop-in</h3>
                    <div class=\"pi-price\">
                        <h2>\$ 39.0</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\" class=\"primary-btn pricing-btn\">Enroll now</a>
                    <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-8\">
                <div class=\"ps-item\">
                    <h3>12 Month unlimited</h3>
                    <div class=\"pi-price\">
                        <h2>\$ 99.0</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\" class=\"primary-btn pricing-btn\">Enroll now</a>
                    <a href=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-8\">
                <div class=\"ps-item\">
                    <h3>6 Month unlimited</h3>
                    <div class=\"pi-price\">
                        <h2>\$ 59.0</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\" class=\"primary-btn pricing-btn\">Enroll now</a>
                    <a href=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Section End -->

<!-- Gallery Section Begin -->
<div class=\"gallery-section\">
    <div class=\"gallery\">
        <div class=\"grid-sizer\"></div>
        <div class=\"gs-item grid-wide set-bg\" data-setbg=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-1.jpg"), "html", null, true);
        echo "\">
            <a href=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-1.jpg"), "html", null, true);
        echo "\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
        <div class=\"gs-item set-bg\" data-setbg=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-2.jpg"), "html", null, true);
        echo "\">
            <a href=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-2.jpg"), "html", null, true);
        echo "\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
        <div class=\"gs-item set-bg\" data-setbg=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-3.jpg"), "html", null, true);
        echo "\">
            <a href=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-3.jpg"), "html", null, true);
        echo "\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
        <div class=\"gs-item set-bg\" data-setbg=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-4.jpg"), "html", null, true);
        echo "\">
            <a href=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-4.jpg"), "html", null, true);
        echo "\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
        <div class=\"gs-item set-bg\" data-setbg=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-5.jpg"), "html", null, true);
        echo "\">
            <a href=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-5.jpg"), "html", null, true);
        echo "\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
        <div class=\"gs-item grid-wide set-bg\" data-setbg=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-6.jpg"), "html", null, true);
        echo "\">
            <a href=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/gallery/gallery-6.jpg"), "html", null, true);
        echo "\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
    </div>
</div>
<!-- Gallery Section End -->

<!-- Team Section Begin -->
<section class=\"team-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"team-title\">
                    <div class=\"section-title\">
                        <span>Our Team</span>
                        <h2>TRAIN WITH EXPERTS</h2>
                    </div>
                    <a href=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\" class=\"primary-btn btn-normal appoinment-btn\">appointment</a>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"ts-slider owl-carousel\">
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/team/team-1.jpg"), "html", null, true);
        echo "\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/team/team-2.jpg"), "html", null, true);
        echo "\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/team/team-3.jpg"), "html", null, true);
        echo "\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/team/team-4.jpg"), "html", null, true);
        echo "\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/team/team-5.jpg"), "html", null, true);
        echo "\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/team/team-6.jpg"), "html", null, true);
        echo "\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Reservation Event Section Begin -->


<section class=\"pricing-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Nos Evenements</span>
                    <h2>Une Réservation est obligatoire</h2>
                </div>
            </div>
        </div>
            <div class=\"col-lg-15 col-md-15\">
                <div class=\"ps-item\">

                    ";
        // line 494
        $this->displayBlock('body', $context, $blocks);
        // line 495
        echo "
             </div>
                </div>

    </div>
</section>

<section class=\"contact-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-title contact-title\">
                    <span>Contact Us</span>
                    <h2>GET IN TOUCH</h2>
                </div>
                <div class=\"contact-widget\">
                    <div class=\"cw-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br> NH 03461</p>
                    </div>
                    <div class=\"cw-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>24889416</li>

                        </ul>
                    </div>
                    <div class=\"cw-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>xtremeGym@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"leave-comment\">
                    <form action=\"#\">
                        <input type=\"text\" placeholder=\"Name\">
                        <input type=\"text\" placeholder=\"Email\">
                        <input type=\"text\" placeholder=\"Website\">
                        <textarea placeholder=\"Comment\"></textarea>
                        <button type=\"submit\">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"map\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd\" height=\"550\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
        </div>
    </div>
</section>

<!-- Reservation Event Section End -->



<!-- Get In Touch Section Begin -->
<div class=\"gettouch-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"gt-text\">
                    <i class=\"fa fa-map-marker\"></i>
                    <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"gt-text\">
                    <i class=\"fa fa-mobile\"></i>
                    <ul>
                        <li>125-711-811</li>
                        <li>125-668-886</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"gt-text email\">
                    <i class=\"fa fa-envelope\"></i>
                    <p>Support.gymcenter@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get In Touch Section End -->

<!-- Footer Section Begin -->
<section class=\"footer-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"fs-about\">
                    <div class=\"fa-logo\">
                        <a href=\"#\"><img src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                    <div class=\"fa-social\">
                        <a href=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\"><i class=\"fa  fa-envelope-o\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-3 col-sm-6\">
                <div class=\"fs-widget\">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\">Blog</a></li>
                        <li><a href=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\">Classes</a></li>
                        <li><a href=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-3 col-sm-6\">
                <div class=\"fs-widget\">
                    <h4>Support</h4>
                    <ul>
                        <li><a href=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\">Login</a></li>
                        <li><a href=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\">My account</a></li>
                        <li><a href=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\">Subscribe</a></li>
                        <li><a href=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/#"), "html", null, true);
        echo "\">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"fs-widget\">
                    <h4>Tips & Guides</h4>
                    <div class=\"fw-recent\">
                        <h6><a href=\"#\">Physical fitness may help prevent depression, anxiety</a></h6>
                        <ul>
                            <li>3 min read</li>
                            <li>20 Comment</li>
                        </ul>
                    </div>
                    <div class=\"fw-recent\">
                        <h6><a href=\"#\">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                        <ul>
                            <li>3 min read</li>
                            <li>20 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"copyright-text\">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section End -->

<!-- Search model Begin -->
<div class=\"search-model\">
    <div class=\"h-100 d-flex align-items-center justify-content-center\">
        <div class=\"search-close-switch\">+</div>
        <form class=\"search-model-form\">
            <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src=\"";
        // line 668
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 671
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/js/masonry.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/js/jquery.barfiller.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-end/js/main.js"), "html", null, true);
        echo "\"></script>



</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 494
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1071 => 494,  1053 => 675,  1049 => 674,  1045 => 673,  1041 => 672,  1037 => 671,  1033 => 670,  1029 => 669,  1025 => 668,  972 => 618,  968 => 617,  964 => 616,  960 => 615,  949 => 607,  945 => 606,  941 => 605,  937 => 604,  926 => 596,  922 => 595,  918 => 594,  914 => 593,  910 => 592,  902 => 587,  808 => 495,  806 => 494,  774 => 465,  763 => 457,  752 => 449,  741 => 441,  730 => 433,  719 => 425,  709 => 418,  690 => 402,  686 => 401,  681 => 399,  677 => 398,  672 => 396,  668 => 395,  663 => 393,  659 => 392,  654 => 390,  650 => 389,  645 => 387,  641 => 386,  626 => 374,  622 => 373,  601 => 355,  597 => 354,  575 => 335,  536 => 299,  526 => 292,  513 => 282,  505 => 277,  495 => 270,  487 => 265,  477 => 258,  469 => 253,  459 => 246,  451 => 241,  441 => 234,  433 => 229,  356 => 155,  346 => 148,  337 => 142,  327 => 135,  309 => 120,  305 => 119,  301 => 118,  297 => 117,  284 => 107,  278 => 104,  274 => 103,  270 => 102,  266 => 101,  262 => 100,  258 => 99,  254 => 98,  250 => 97,  245 => 95,  241 => 94,  237 => 93,  233 => 92,  229 => 91,  225 => 90,  221 => 89,  211 => 82,  207 => 81,  192 => 69,  188 => 68,  184 => 67,  180 => 66,  172 => 61,  166 => 58,  162 => 57,  158 => 56,  154 => 55,  150 => 54,  146 => 53,  142 => 52,  138 => 51,  132 => 48,  128 => 47,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>

<html lang=\"zxx\">

<head>

    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Gym Template\">
    <meta name=\"keywords\" content=\"Gym, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Gym | Template</title>

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap\" rel=\"stylesheet\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('front-end/css/bootstrap.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-end/css/font-awesome.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-end/css/flaticon.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-end/css/owl.carousel.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-end/css/barfiller.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-end/css/magnific-popup.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-end/css/slicknav.min.css')}}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('front-end/css/style.css')}}\" type=\"text/css\">
</head>

<body>

<!-- Offcanvas Menu Section Begin -->
<div class=\"offcanvas-menu-overlay\"></div>
<div class=\"offcanvas-menu-wrapper\">
    <div class=\"canvas-close\">
        <i class=\"fa fa-close\"></i>
    </div>
    <div class=\"canvas-search search-switch\">
        <i class=\"fa fa-search\"></i>
    </div>
    <nav class=\"canvas-menu mobile-menu\">
        <ul>
            <li><a href=\"{{ asset('front-end/./index.html')}}\">Home</a></li>
            <li><a href=\"{{ asset('front-end/./about-us.html')}}\">About Us</a></li>
            <li><a href=\"{{ asset('front-end/./classes.html')}}\">Classes</a></li>
            <li><a href=\"{{ asset('front-end/./services.html')}}\">Services</a></li>
            <li><a href=\"{{ asset('front-end/./team.html')}}\">Our Team</a></li>
           <li><a href=\"{{ asset('front-end/./reservationEvenement.html')}}\">Réserver un Evenement</a></li>
            <li><a href=\"#\">Pages</a>
                <ul class=\"dropdown\">
                    <li><a href=\"{{ asset('front-end/./about-us.html')}}\">About us</a></li>
                    <li><a href=\"{{ asset('front-end/./class-timetable.html')}}\">Classes timetable</a></li>
                    <li><a href=\"{{ asset('front-end/./bmi-calculator.html')}}\">Bmi calculate</a></li>
                    <li><a href=\"{{ asset('front-end/./team.html')}}\">Our team</a></li>
                    <li><a href=\"{{ asset('front-end/./reservationEvenement.html')}}\">Nos Evenement</a></li>
                    <li><a href=\"{{ asset('front-end/./gallery.html')}}\">Gallery</a></li>
                    <li><a href=\"{{ asset('front-end/./blog.html')}}\">Our blog</a></li>
                    <li><a href=\"{{ asset('front-end/./404.html')}}\">404</a></li>
                </ul>
            </li>
            <li><a href=\"{{ asset('front-end/./contact.html')}}\">Contact</a></li>
        </ul>
    </nav>
    <div id=\"mobile-menu-wrap\"></div>
    <div class=\"canvas-social\">
        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-facebook\"></i></a>
        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-twitter\"></i></a>
        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-youtube-play\"></i></a>
        <a href=\"{{ asset('#')}}\"><i class=\"fa fa-instagram\"></i></a>
    </div>
</div>
<!-- Offcanvas Menu Section End -->

<!-- Header Section Begin -->

<header class=\"header-section\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"logo\">
                    <a href=\"{{ asset('./index.html')}}\">
                        <img src=\"{{ asset('img/logo.png')}}\" alt=\"\">
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <nav class=\"nav-menu\">
                    <ul>
                        <li class=\"active\"><a href=\"{{ asset('front-end/./index.html')}}\">Home</a></li>
                        <li><a href=\"{{ asset('front-end/./about-us.html')}}\">About Us</a></li>
                        <li><a href=\"{{ asset('front-end/./class-details.html')}}\">Classes</a></li>
                        <li><a href=\"{{ asset('front-end/./services.html')}}\">Services</a></li>
                        <li><a href=\"{{ asset('front-end/./team.html')}}\">Our Team</a></li>
                        <li><a href=\"{{ asset('front-end/./reservationEvenement.html')}}\">Réserver un Evenement</a></li>
                        <li><a href=\"{{ asset('front-end/#')}}\">Pages</a>
                            <ul class=\"dropdown\">
                                <li><a href=\"{{ asset('front-end/./about-us.html')}}\">About us</a></li>
                                <li><a href=\"{{ asset('front-end/./class-timetable.html')}}\">Classes timetable</a></li>
                                <li><a href=\"{{ asset('front-end/./bmi-calculator.html')}}\">Bmi calculate</a></li>
                                <li><a href=\"{{ asset('front-end/./team.html')}}\">Our team</a></li>
                                <li><a href=\"{{ asset('front-end/./reservationEvenement.html')}}\">Nos Evenement</a></li>
                                <li><a href=\"{{ asset('front-end/./gallery.html')}}\">Gallery</a></li>
                                <li><a href=\"{{ asset('front-end/./blog.html')}}\">Our blog</a></li>
                                <li><a href=\"{{ asset('front-end/./404.html')}}\">404</a></li>
                            </ul>
                        </li>
                        <li><a href=\"{{ asset('front-end/./contact.html')}}\">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"top-option\">
                    <div class=\"to-search search-switch\">
                        <i class=\"fa fa-search\"></i>
                    </div>
                    <div class=\"to-social\">
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"canvas-open\">
            <i class=\"fa fa-bars\"></i>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Hero Section Begin -->
<section class=\"hero-section\">
    <div class=\"hs-slider owl-carousel\">
        <div class=\"hs-item set-bg\" data-setbg=\"{{ asset('front-end/img/hero/hero-1.jpg')}}\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-6\">
                        <div class=\"hi-text\">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                            <a href=\"{{ asset('front-end/#')}}\" class=\"primary-btn\">Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"hs-item set-bg\" data-setbg=\"{{ asset('front-end/img/hero/hero-2.jpg')}}\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-6\">
                        <div class=\"hi-text\">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                            <a href=\"{{ asset('front-end/#')}}\" class=\"primary-btn\">Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- ChoseUs Section Begin -->
<section class=\"choseus-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Why chose us?</span>
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"cs-item\">
                    <span class=\"flaticon-034-stationary-bike\"></span>
                    <h4>Modern equipment</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        dolore facilisis.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"cs-item\">
                    <span class=\"flaticon-033-juice\"></span>
                    <h4>Healthy nutrition plan</h4>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"cs-item\">
                    <span class=\"flaticon-002-dumbell\"></span>
                    <h4>Proffesponal training plan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        dolore facilisis.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"cs-item\">
                    <span class=\"flaticon-014-heart-beat\"></span>
                    <h4>Unique to your needs</h4>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- Classes Section Begin -->
<section class=\"classes-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Our Classes</span>
                    <h2>WHAT WE CAN OFFER</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"class-item\">
                    <div class=\"ci-pic\">
                        <img src=\"{{ asset('front-end/img/classes/class-1.jpg')}}\" alt=\"\">
                    </div>
                    <div class=\"ci-text\">
                        <span>STRENGTH</span>
                        <h5>Weightlifting</h5>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"class-item\">
                    <div class=\"ci-pic\">
                        <img src=\"{{ asset('front-end/img/classes/class-2.jpg')}}\" alt=\"\">
                    </div>
                    <div class=\"ci-text\">
                        <span>Cardio</span>
                        <h5>Indoor cycling</h5>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"class-item\">
                    <div class=\"ci-pic\">
                        <img src=\"{{ asset('front-end/img/classes/class-3.jpg')}}\" alt=\"\">
                    </div>
                    <div class=\"ci-text\">
                        <span>STRENGTH</span>
                        <h5>Kettlebell power</h5>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"class-item\">
                    <div class=\"ci-pic\">
                        <img src=\"{{ asset('front-end/img/classes/class-4.jpg')}}\" alt=\"\">
                    </div>
                    <div class=\"ci-text\">
                        <span>Cardio</span>
                        <h4>Indoor cycling</h4>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"class-item\">
                    <div class=\"ci-pic\">
                        <img src=\"{{ asset('front-end/img/classes/class-5.jpg')}}\" alt=\"\">
                    </div>
                    <div class=\"ci-text\">
                        <span>Training</span>
                        <h4>Boxing</h4>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- Banner Section Begin -->
<section class=\"banner-section set-bg\" data-setbg=\"{{ asset('front-end/img/banner-bg.jpg')}}\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"bs-text\">
                    <h2>registration now to get more deals</h2>
                    <div class=\"bt-tips\">Where health, beauty and fitness meet.</div>
                    <a href=\"{{ asset('front-end/#')}}\" class=\"primary-btn  btn-normal\">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Pricing Section Begin -->
<section class=\"pricing-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Our Plan</span>
                    <h2>Choose your pricing plan</h2>
                </div>
            </div>
        </div>

        <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-8\">
                <div class=\"ps-item\">
                    <h3>Class drop-in</h3>
                    <div class=\"pi-price\">
                        <h2>\$ 39.0</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href=\"{{ asset('front-end/#')}}\" class=\"primary-btn pricing-btn\">Enroll now</a>
                    <a href=\"#\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-8\">
                <div class=\"ps-item\">
                    <h3>12 Month unlimited</h3>
                    <div class=\"pi-price\">
                        <h2>\$ 99.0</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href=\"{{ asset('front-end/#')}}\" class=\"primary-btn pricing-btn\">Enroll now</a>
                    <a href=\"{{ asset('front-end/#')}}\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-8\">
                <div class=\"ps-item\">
                    <h3>6 Month unlimited</h3>
                    <div class=\"pi-price\">
                        <h2>\$ 59.0</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href=\"{{ asset('front-end/#')}}\" class=\"primary-btn pricing-btn\">Enroll now</a>
                    <a href=\"{{ asset('front-end/#')}}\" class=\"thumb-icon\"><i class=\"fa fa-picture-o\"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Section End -->

<!-- Gallery Section Begin -->
<div class=\"gallery-section\">
    <div class=\"gallery\">
        <div class=\"grid-sizer\"></div>
        <div class=\"gs-item grid-wide set-bg\" data-setbg=\"{{ asset('front-end/img/gallery/gallery-1.jpg')}}\">
            <a href=\"{{ asset('front-end/img/gallery/gallery-1.jpg')}}\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
        <div class=\"gs-item set-bg\" data-setbg=\"{{ asset('front-end/img/gallery/gallery-2.jpg')}}\">
            <a href=\"{{ asset('front-end/img/gallery/gallery-2.jpg')}}\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
        <div class=\"gs-item set-bg\" data-setbg=\"{{ asset('front-end/img/gallery/gallery-3.jpg')}}\">
            <a href=\"{{ asset('front-end/img/gallery/gallery-3.jpg')}}\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
        <div class=\"gs-item set-bg\" data-setbg=\"{{ asset('front-end/img/gallery/gallery-4.jpg')}}\">
            <a href=\"{{ asset('front-end/img/gallery/gallery-4.jpg')}}\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
        <div class=\"gs-item set-bg\" data-setbg=\"{{ asset('front-end/img/gallery/gallery-5.jpg')}}\">
            <a href=\"{{ asset('front-end/img/gallery/gallery-5.jpg')}}\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
        <div class=\"gs-item grid-wide set-bg\" data-setbg=\"{{ asset('front-end/img/gallery/gallery-6.jpg')}}\">
            <a href=\"{{ asset('front-end/img/gallery/gallery-6.jpg')}}\" class=\"thumb-icon image-popup\"><i class=\"fa fa-picture-o\"></i></a>
        </div>
    </div>
</div>
<!-- Gallery Section End -->

<!-- Team Section Begin -->
<section class=\"team-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"team-title\">
                    <div class=\"section-title\">
                        <span>Our Team</span>
                        <h2>TRAIN WITH EXPERTS</h2>
                    </div>
                    <a href=\"{{ asset('front-end/#')}}\" class=\"primary-btn btn-normal appoinment-btn\">appointment</a>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"ts-slider owl-carousel\">
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('front-end/img/team/team-1.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('front-end/img/team/team-2.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('front-end/img/team/team-3.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('front-end/img/team/team-4.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('front-end/img/team/team-5.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"ts-item set-bg\" data-setbg=\"{{ asset('front-end/img/team/team-6.jpg')}}\">
                        <div class=\"ts_text\">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Reservation Event Section Begin -->


<section class=\"pricing-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Nos Evenements</span>
                    <h2>Une Réservation est obligatoire</h2>
                </div>
            </div>
        </div>
            <div class=\"col-lg-15 col-md-15\">
                <div class=\"ps-item\">

                    {% block body %}  {% endblock %}

             </div>
                </div>

    </div>
</section>

<section class=\"contact-section spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"section-title contact-title\">
                    <span>Contact Us</span>
                    <h2>GET IN TOUCH</h2>
                </div>
                <div class=\"contact-widget\">
                    <div class=\"cw-text\">
                        <i class=\"fa fa-map-marker\"></i>
                        <p>333 Middle Winchendon Rd, Rindge,<br> NH 03461</p>
                    </div>
                    <div class=\"cw-text\">
                        <i class=\"fa fa-mobile\"></i>
                        <ul>
                            <li>24889416</li>

                        </ul>
                    </div>
                    <div class=\"cw-text email\">
                        <i class=\"fa fa-envelope\"></i>
                        <p>xtremeGym@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"leave-comment\">
                    <form action=\"#\">
                        <input type=\"text\" placeholder=\"Name\">
                        <input type=\"text\" placeholder=\"Email\">
                        <input type=\"text\" placeholder=\"Website\">
                        <textarea placeholder=\"Comment\"></textarea>
                        <button type=\"submit\">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"map\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd\" height=\"550\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
        </div>
    </div>
</section>

<!-- Reservation Event Section End -->



<!-- Get In Touch Section Begin -->
<div class=\"gettouch-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"gt-text\">
                    <i class=\"fa fa-map-marker\"></i>
                    <p>333 Middle Winchendon Rd, Rindge,<br/> NH 03461</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"gt-text\">
                    <i class=\"fa fa-mobile\"></i>
                    <ul>
                        <li>125-711-811</li>
                        <li>125-668-886</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"gt-text email\">
                    <i class=\"fa fa-envelope\"></i>
                    <p>Support.gymcenter@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get In Touch Section End -->

<!-- Footer Section Begin -->
<section class=\"footer-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"fs-about\">
                    <div class=\"fa-logo\">
                        <a href=\"#\"><img src=\"{{ asset('front-end/img/logo.png')}}\" alt=\"\"></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                    <div class=\"fa-social\">
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-youtube-play\"></i></a>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"{{ asset('front-end/#')}}\"><i class=\"fa  fa-envelope-o\"></i></a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-3 col-sm-6\">
                <div class=\"fs-widget\">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href=\"{{ asset('front-end/#')}}\">About</a></li>
                        <li><a href=\"{{ asset('front-end/#')}}\">Blog</a></li>
                        <li><a href=\"{{ asset('front-end/#')}}\">Classes</a></li>
                        <li><a href=\"{{ asset('front-end/#')}}\">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-2 col-md-3 col-sm-6\">
                <div class=\"fs-widget\">
                    <h4>Support</h4>
                    <ul>
                        <li><a href=\"{{ asset('front-end/#')}}\">Login</a></li>
                        <li><a href=\"{{ asset('front-end/#')}}\">My account</a></li>
                        <li><a href=\"{{ asset('front-end/#')}}\">Subscribe</a></li>
                        <li><a href=\"{{ asset('front-end/#')}}\">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"fs-widget\">
                    <h4>Tips & Guides</h4>
                    <div class=\"fw-recent\">
                        <h6><a href=\"#\">Physical fitness may help prevent depression, anxiety</a></h6>
                        <ul>
                            <li>3 min read</li>
                            <li>20 Comment</li>
                        </ul>
                    </div>
                    <div class=\"fw-recent\">
                        <h6><a href=\"#\">Fitness: The best exercise to lose belly fat and tone up...</a></h6>
                        <ul>
                            <li>3 min read</li>
                            <li>20 Comment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <div class=\"copyright-text\">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section End -->

<!-- Search model Begin -->
<div class=\"search-model\">
    <div class=\"h-100 d-flex align-items-center justify-content-center\">
        <div class=\"search-close-switch\">+</div>
        <form class=\"search-model-form\">
            <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src=\"{{ asset('front-end/js/jquery-3.3.1.min.js')}}\"></script>
<script src=\"{{ asset('front-end/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('front-end/js/jquery.magnific-popup.min.js')}}\"></script>
<script src=\"{{ asset('front-end/js/masonry.pkgd.min.js')}}\"></script>
<script src=\"{{ asset('front-end/js/jquery.barfiller.js')}}\"></script>
<script src=\"{{ asset('front-end/js/jquery.slicknav.js')}}\"></script>
<script src=\"{{ asset('front-end/js/owl.carousel.min.js')}}\"></script>
<script src=\"{{ asset('front-end/js/main.js')}}\"></script>



</body>

</html>
", "base-front.html.twig", "C:\\Users\\firas\\FirstProject\\templates\\base-front.html.twig");
    }
}
