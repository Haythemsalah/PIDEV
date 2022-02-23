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

/* base-back.html.twig */
class __TwigTemplate_2384808f0b5a235de5f8f5d7720c38cbebc98fb4f9b6a73c35ca249601c8e110 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <title> ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    {
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/lib/owlcarousel/assets/owl.carousel.min.css\""), "html", null, true);
        echo "\" rel=\"stylesheet>
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/css/style.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" >

</head>

<body>




    <!-- Sidebar Start -->
    <div class=\"sidebar pe-4 pb-3\">
        <nav class=\"navbar bg-light navbar-light\">
            <a href=\"index.html\" class=\"navbar-brand mx-4 mb-3\">
                <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>DASHMIN</h3>
            </a>
            <div class=\"d-flex align-items-center ms-4 mb-4\">
                <div class=\"position-relative\">
                    <img class=\"rounded-circle\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/img/firas.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 80px; height: 80px;\">
                    <div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
                </div>
                <div class=\"ms-3\">
                    <h6 class=\"mb-0\">Firas Ben Hadj Alouane</h6>
                    <span>Admin</span>
                </div>
            </div>

            <div class=\"navbar-nav w-100\">
                <a href=\"index.html\" class=\"nav-item nav-link active\"><i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Elements</a>
                    <div class=\"dropdown-menu bg-transparent border-0\">
                        <a href=\"button.html\" class=\"dropdown-item\">Buttons</a>
                        <a href=\"typography.html\" class=\"dropdown-item\">Typography</a>
                        <a href=\"element.html\" class=\"dropdown-item\">Other Elements</a>
                    </div>

                </div>
                <a href=\"widget.html\" class=\"nav-item nav-link\"><i class=\"fa fa-th me-2\"></i>Widgets</a>
                <a href=\"form.html\" class=\"nav-item nav-link\"><i class=\"fa fa-keyboard me-2\"></i>Forms</a>
                <a href=\"table.html\" class=\"nav-item nav-link\"><i class=\"fa fa-table me-2\"></i>Tables</a>
                <a href=\"chart.html\" class=\"nav-item nav-link\"><i class=\"fa fa-chart-bar me-2\"></i>Charts</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"far fa-file-alt me-2\"></i>Pages</a>
                    <div class=\"dropdown-menu bg-transparent border-0\">
                        <a href=\"signin.html\" class=\"dropdown-item\">Sign In</a>
                        <a href=\"signup.html\" class=\"dropdown-item\">Sign Up</a>
                        <a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
                        <a href=\"blank.html\" class=\"dropdown-item\">Blank Page</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class=\"content\">
        <!-- Navbar Start -->
        <nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
            <a href=\"index.html\" class=\"navbar-brand d-flex d-lg-none me-4\">
                <h2 class=\"text-primary mb-0\"><i class=\"fa fa-hashtag\"></i></h2>
            </a>
            <a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
                <i class=\"fa fa-bars\"></i>
            </a>
            <form class=\"d-none d-md-flex ms-4\">
                <input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
            </form>
            <div class=\"navbar-nav align-items-center ms-auto\">
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                        <i class=\"fa fa-envelope me-lg-2\"></i>
                        <span class=\"d-none d-lg-inline-flex\">Message</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/img/firas.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"ms-2\">
                                    <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/img/firas.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"ms-2\">
                                    <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/img/firas.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"ms-2\">
                                    <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
                    </div>
                </div>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                        <i class=\"fa fa-bell me-lg-2\"></i>
                        <span class=\"d-none d-lg-inline-flex\">Notificatin</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <h6 class=\"fw-normal mb-0\">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <h6 class=\"fw-normal mb-0\">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <h6 class=\"fw-normal mb-0\">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
                    </div>
                </div>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                        <img class=\"rounded-circle me-lg-2\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/img/firas.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                        <span class=\"d-none d-lg-inline-flex\">Firas Ben Hadj Alouane</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                        <a href=\"#\" class=\"dropdown-item\">My Profile</a>
                        <a href=\"#\" class=\"dropdown-item\">Settings</a>
                        <a href=\"#\" class=\"dropdown-item\">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Navbar End -->
        ";
        // line 181
        $this->displayBlock('body', $context, $blocks);
        // line 490
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Template";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 182
        echo "
        <!-- Sale & Revenue Start -->
        <div class=\"container-fluid pt-4 px-4\">
            <div class=\"row g-4\">
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                        <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                        <div class=\"ms-3\">
                            <p class=\"mb-2\">Today Sale</p>
                            <h6 class=\"mb-0\">\$1234</h6>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                        <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                        <div class=\"ms-3\">
                            <p class=\"mb-2\">Total Sale</p>
                            <h6 class=\"mb-0\">\$1234</h6>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                        <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                        <div class=\"ms-3\">
                            <p class=\"mb-2\">Today Revenue</p>
                            <h6 class=\"mb-0\">\$1234</h6>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                        <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                        <div class=\"ms-3\">
                            <p class=\"mb-2\">Total Revenue</p>
                            <h6 class=\"mb-0\">\$1234</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sale & Revenue End -->


        <!-- Sales Chart Start -->
        <div class=\"container-fluid pt-4 px-4\">
            <div class=\"row g-4\">
                <div class=\"col-sm-12 col-xl-6\">
                    <div class=\"bg-light text-center rounded p-4\">
                        <div class=\"d-flex align-items-center justify-content-between mb-4\">
                            <h6 class=\"mb-0\">Worldwide Sales</h6>
                            <a href=\"\">Show All</a>
                        </div>
                        <canvas id=\"worldwide-sales\"></canvas>
                    </div>
                </div>
                <div class=\"col-sm-12 col-xl-6\">
                    <div class=\"bg-light text-center rounded p-4\">
                        <div class=\"d-flex align-items-center justify-content-between mb-4\">
                            <h6 class=\"mb-0\">Salse & Revenue</h6>
                            <a href=\"\">Show All</a>
                        </div>
                        <canvas id=\"salse-revenue\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sales Chart End -->


        <!-- Recent Sales Start -->
        <div class=\"container-fluid pt-4 px-4\">
            <div class=\"bg-light text-center rounded p-4\">
                <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <h6 class=\"mb-0\">Recent Salse</h6>
                    <a href=\"\">Show All</a>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table text-start align-middle table-bordered table-hover mb-0\">
                        <thead>
                        <tr class=\"text-dark\">
                            <th scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\"></th>
                            <th scope=\"col\">Date</th>
                            <th scope=\"col\">Invoice</th>
                            <th scope=\"col\">Customer</th>
                            <th scope=\"col\">Amount</th>
                            <th scope=\"col\">Status</th>
                            <th scope=\"col\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->


        <!-- Widgets Start -->
        <div class=\"container-fluid pt-4 px-4\">
            <div class=\"row g-4\">
                <div class=\"col-sm-12 col-md-6 col-xl-4\">
                    <div class=\"h-100 bg-light rounded p-4\">
                        <div class=\"d-flex align-items-center justify-content-between mb-2\">
                            <h6 class=\"mb-0\">Messages</h6>
                            <a href=\"\">Show All</a>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-3\">
                            <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 justify-content-between\">
                                    <h6 class=\"mb-0\">Jhon Doe</h6>
                                    <small>15 minutes ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-3\">
                            <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 justify-content-between\">
                                    <h6 class=\"mb-0\">Jhon Doe</h6>
                                    <small>15 minutes ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-3\">
                            <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 justify-content-between\">
                                    <h6 class=\"mb-0\">Jhon Doe</h6>
                                    <small>15 minutes ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center pt-3\">
                            <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 justify-content-between\">
                                    <h6 class=\"mb-0\">Jhon Doe</h6>
                                    <small>15 minutes ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-6 col-xl-4\">
                    <div class=\"h-100 bg-light rounded p-4\">
                        <div class=\"d-flex align-items-center justify-content-between mb-4\">
                            <h6 class=\"mb-0\">Calender</h6>
                            <a href=\"\">Show All</a>
                        </div>
                        <div id=\"calender\"></div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-6 col-xl-4\">
                    <div class=\"h-100 bg-light rounded p-4\">
                        <div class=\"d-flex align-items-center justify-content-between mb-4\">
                            <h6 class=\"mb-0\">To Do List</h6>
                            <a href=\"\">Show All</a>
                        </div>
                        <div class=\"d-flex mb-2\">
                            <input class=\"form-control bg-transparent\" type=\"text\" placeholder=\"Enter task\">
                            <button type=\"button\" class=\"btn btn-primary ms-2\">Add</button>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-2\">
                            <input class=\"form-check-input m-0\" type=\"checkbox\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                    <span>Short task goes here...</span>
                                    <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-2\">
                            <input class=\"form-check-input m-0\" type=\"checkbox\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                    <span>Short task goes here...</span>
                                    <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-2\">
                            <input class=\"form-check-input m-0\" type=\"checkbox\" checked>
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                    <span><del>Short task goes here...</del></span>
                                    <button class=\"btn btn-sm text-primary\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-2\">
                            <input class=\"form-check-input m-0\" type=\"checkbox\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                    <span>Short task goes here...</span>
                                    <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center pt-2\">
                            <input class=\"form-check-input m-0\" type=\"checkbox\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                    <span>Short task goes here...</span>
                                    <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Widgets End -->


        <!-- Footer Start -->
        <div class=\"container-fluid pt-4 px-4\">
            <div class=\"bg-light rounded-top p-4\">
                <div class=\"row\">
                    <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                        &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class=\"col-12 col-sm-6 text-center text-sm-end\">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a href=\"https://htmlcodex.com\">HTML Codex</a>
                        </br>
                        Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/lib/chart/chart.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

<!-- Template Javascript -->
<script src=\"";
        // line 486
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-end/back/js/main.js"), "html", null, true);
        echo "\"></script>
</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 486,  623 => 483,  619 => 482,  615 => 481,  611 => 480,  607 => 479,  603 => 478,  599 => 477,  302 => 182,  292 => 181,  273 => 8,  262 => 490,  260 => 181,  244 => 168,  204 => 131,  191 => 121,  178 => 111,  114 => 50,  94 => 33,  88 => 30,  82 => 27,  78 => 26,  63 => 14,  54 => 8,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <title> {% block title %}Template{% endblock %}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"{{ asset('back-end/img/favicon.ico') }}\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    {
    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('back-end/lib/owlcarousel/assets/owl.carousel.min.css\"') }}\" rel=\"stylesheet>
    <link href=\"{{ asset('back-end/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('back-end/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('back-end/css/style.css') }}\"  rel=\"stylesheet\" >

</head>

<body>




    <!-- Sidebar Start -->
    <div class=\"sidebar pe-4 pb-3\">
        <nav class=\"navbar bg-light navbar-light\">
            <a href=\"index.html\" class=\"navbar-brand mx-4 mb-3\">
                <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>DASHMIN</h3>
            </a>
            <div class=\"d-flex align-items-center ms-4 mb-4\">
                <div class=\"position-relative\">
                    <img class=\"rounded-circle\" src=\"{{ asset('back-end/img/firas.jpg')}}\" alt=\"\" style=\"width: 80px; height: 80px;\">
                    <div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
                </div>
                <div class=\"ms-3\">
                    <h6 class=\"mb-0\">Firas Ben Hadj Alouane</h6>
                    <span>Admin</span>
                </div>
            </div>

            <div class=\"navbar-nav w-100\">
                <a href=\"index.html\" class=\"nav-item nav-link active\"><i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Elements</a>
                    <div class=\"dropdown-menu bg-transparent border-0\">
                        <a href=\"button.html\" class=\"dropdown-item\">Buttons</a>
                        <a href=\"typography.html\" class=\"dropdown-item\">Typography</a>
                        <a href=\"element.html\" class=\"dropdown-item\">Other Elements</a>
                    </div>

                </div>
                <a href=\"widget.html\" class=\"nav-item nav-link\"><i class=\"fa fa-th me-2\"></i>Widgets</a>
                <a href=\"form.html\" class=\"nav-item nav-link\"><i class=\"fa fa-keyboard me-2\"></i>Forms</a>
                <a href=\"table.html\" class=\"nav-item nav-link\"><i class=\"fa fa-table me-2\"></i>Tables</a>
                <a href=\"chart.html\" class=\"nav-item nav-link\"><i class=\"fa fa-chart-bar me-2\"></i>Charts</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"far fa-file-alt me-2\"></i>Pages</a>
                    <div class=\"dropdown-menu bg-transparent border-0\">
                        <a href=\"signin.html\" class=\"dropdown-item\">Sign In</a>
                        <a href=\"signup.html\" class=\"dropdown-item\">Sign Up</a>
                        <a href=\"404.html\" class=\"dropdown-item\">404 Error</a>
                        <a href=\"blank.html\" class=\"dropdown-item\">Blank Page</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class=\"content\">
        <!-- Navbar Start -->
        <nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
            <a href=\"index.html\" class=\"navbar-brand d-flex d-lg-none me-4\">
                <h2 class=\"text-primary mb-0\"><i class=\"fa fa-hashtag\"></i></h2>
            </a>
            <a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
                <i class=\"fa fa-bars\"></i>
            </a>
            <form class=\"d-none d-md-flex ms-4\">
                <input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
            </form>
            <div class=\"navbar-nav align-items-center ms-auto\">
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                        <i class=\"fa fa-envelope me-lg-2\"></i>
                        <span class=\"d-none d-lg-inline-flex\">Message</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle\" src=\"{{ asset('back-end/img/firas.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"ms-2\">
                                    <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle\" src=\"{{ asset('back-end/img/firas.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"ms-2\">
                                    <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <div class=\"d-flex align-items-center\">
                                <img class=\"rounded-circle\" src=\"{{ asset('back-end/img/firas.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                <div class=\"ms-2\">
                                    <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
                    </div>
                </div>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                        <i class=\"fa fa-bell me-lg-2\"></i>
                        <span class=\"d-none d-lg-inline-flex\">Notificatin</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <h6 class=\"fw-normal mb-0\">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <h6 class=\"fw-normal mb-0\">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item\">
                            <h6 class=\"fw-normal mb-0\">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class=\"dropdown-divider\">
                        <a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
                    </div>
                </div>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                        <img class=\"rounded-circle me-lg-2\" src=\"{{ asset('back-end/img/firas.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                        <span class=\"d-none d-lg-inline-flex\">Firas Ben Hadj Alouane</span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                        <a href=\"#\" class=\"dropdown-item\">My Profile</a>
                        <a href=\"#\" class=\"dropdown-item\">Settings</a>
                        <a href=\"#\" class=\"dropdown-item\">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Navbar End -->
        {% block body  %}

        <!-- Sale & Revenue Start -->
        <div class=\"container-fluid pt-4 px-4\">
            <div class=\"row g-4\">
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                        <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                        <div class=\"ms-3\">
                            <p class=\"mb-2\">Today Sale</p>
                            <h6 class=\"mb-0\">\$1234</h6>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                        <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                        <div class=\"ms-3\">
                            <p class=\"mb-2\">Total Sale</p>
                            <h6 class=\"mb-0\">\$1234</h6>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                        <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                        <div class=\"ms-3\">
                            <p class=\"mb-2\">Today Revenue</p>
                            <h6 class=\"mb-0\">\$1234</h6>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                        <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                        <div class=\"ms-3\">
                            <p class=\"mb-2\">Total Revenue</p>
                            <h6 class=\"mb-0\">\$1234</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sale & Revenue End -->


        <!-- Sales Chart Start -->
        <div class=\"container-fluid pt-4 px-4\">
            <div class=\"row g-4\">
                <div class=\"col-sm-12 col-xl-6\">
                    <div class=\"bg-light text-center rounded p-4\">
                        <div class=\"d-flex align-items-center justify-content-between mb-4\">
                            <h6 class=\"mb-0\">Worldwide Sales</h6>
                            <a href=\"\">Show All</a>
                        </div>
                        <canvas id=\"worldwide-sales\"></canvas>
                    </div>
                </div>
                <div class=\"col-sm-12 col-xl-6\">
                    <div class=\"bg-light text-center rounded p-4\">
                        <div class=\"d-flex align-items-center justify-content-between mb-4\">
                            <h6 class=\"mb-0\">Salse & Revenue</h6>
                            <a href=\"\">Show All</a>
                        </div>
                        <canvas id=\"salse-revenue\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sales Chart End -->


        <!-- Recent Sales Start -->
        <div class=\"container-fluid pt-4 px-4\">
            <div class=\"bg-light text-center rounded p-4\">
                <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <h6 class=\"mb-0\">Recent Salse</h6>
                    <a href=\"\">Show All</a>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table text-start align-middle table-bordered table-hover mb-0\">
                        <thead>
                        <tr class=\"text-dark\">
                            <th scope=\"col\"><input class=\"form-check-input\" type=\"checkbox\"></th>
                            <th scope=\"col\">Date</th>
                            <th scope=\"col\">Invoice</th>
                            <th scope=\"col\">Customer</th>
                            <th scope=\"col\">Amount</th>
                            <th scope=\"col\">Status</th>
                            <th scope=\"col\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        <tr>
                            <td><input class=\"form-check-input\" type=\"checkbox\"></td>
                            <td>01 Jan 2045</td>
                            <td>INV-0123</td>
                            <td>Jhon Doe</td>
                            <td>\$123</td>
                            <td>Paid</td>
                            <td><a class=\"btn btn-sm btn-primary\" href=\"\">Detail</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->


        <!-- Widgets Start -->
        <div class=\"container-fluid pt-4 px-4\">
            <div class=\"row g-4\">
                <div class=\"col-sm-12 col-md-6 col-xl-4\">
                    <div class=\"h-100 bg-light rounded p-4\">
                        <div class=\"d-flex align-items-center justify-content-between mb-2\">
                            <h6 class=\"mb-0\">Messages</h6>
                            <a href=\"\">Show All</a>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-3\">
                            <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 justify-content-between\">
                                    <h6 class=\"mb-0\">Jhon Doe</h6>
                                    <small>15 minutes ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-3\">
                            <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 justify-content-between\">
                                    <h6 class=\"mb-0\">Jhon Doe</h6>
                                    <small>15 minutes ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-3\">
                            <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 justify-content-between\">
                                    <h6 class=\"mb-0\">Jhon Doe</h6>
                                    <small>15 minutes ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center pt-3\">
                            <img class=\"rounded-circle flex-shrink-0\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 justify-content-between\">
                                    <h6 class=\"mb-0\">Jhon Doe</h6>
                                    <small>15 minutes ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-6 col-xl-4\">
                    <div class=\"h-100 bg-light rounded p-4\">
                        <div class=\"d-flex align-items-center justify-content-between mb-4\">
                            <h6 class=\"mb-0\">Calender</h6>
                            <a href=\"\">Show All</a>
                        </div>
                        <div id=\"calender\"></div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-md-6 col-xl-4\">
                    <div class=\"h-100 bg-light rounded p-4\">
                        <div class=\"d-flex align-items-center justify-content-between mb-4\">
                            <h6 class=\"mb-0\">To Do List</h6>
                            <a href=\"\">Show All</a>
                        </div>
                        <div class=\"d-flex mb-2\">
                            <input class=\"form-control bg-transparent\" type=\"text\" placeholder=\"Enter task\">
                            <button type=\"button\" class=\"btn btn-primary ms-2\">Add</button>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-2\">
                            <input class=\"form-check-input m-0\" type=\"checkbox\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                    <span>Short task goes here...</span>
                                    <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-2\">
                            <input class=\"form-check-input m-0\" type=\"checkbox\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                    <span>Short task goes here...</span>
                                    <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-2\">
                            <input class=\"form-check-input m-0\" type=\"checkbox\" checked>
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                    <span><del>Short task goes here...</del></span>
                                    <button class=\"btn btn-sm text-primary\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center border-bottom py-2\">
                            <input class=\"form-check-input m-0\" type=\"checkbox\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                    <span>Short task goes here...</span>
                                    <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center pt-2\">
                            <input class=\"form-check-input m-0\" type=\"checkbox\">
                            <div class=\"w-100 ms-3\">
                                <div class=\"d-flex w-100 align-items-center justify-content-between\">
                                    <span>Short task goes here...</span>
                                    <button class=\"btn btn-sm\"><i class=\"fa fa-times\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Widgets End -->


        <!-- Footer Start -->
        <div class=\"container-fluid pt-4 px-4\">
            <div class=\"bg-light rounded-top p-4\">
                <div class=\"row\">
                    <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                        &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class=\"col-12 col-sm-6 text-center text-sm-end\">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                        Designed By <a href=\"https://htmlcodex.com\">HTML Codex</a>
                        </br>
                        Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\" target=\"_blank\">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('back-end/lib/chart/chart.min.js')}}\"></script>
<script src=\"{{ asset('back-end/lib/easing/easing.min.js')}}\"></script>
<script src=\"{{ asset('back-end/lib/waypoints/waypoints.min.js')}}\"></script>
<script src=\"{{ asset('back-end/lib/owlcarousel/owl.carousel.min.js')}}\"></script>
<script src=\"{{ asset('back-end/lib/tempusdominus/js/moment.min.js')}}\"></script>
<script src=\"{{ asset('back-end/lib/tempusdominus/js/moment-timezone.min.js')}}\"></script>
<script src=\"{{ asset('back-end/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}\"></script>

<!-- Template Javascript -->
<script src=\"{{ asset('back-end/back/js/main.js')}}\"></script>
</body>

{% endblock %}
</html>
", "base-back.html.twig", "C:\\Users\\firas\\FirstProject\\templates\\base-back.html.twig");
    }
}
