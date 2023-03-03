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

/* user/show.html.twig */
class __TwigTemplate_730508f245f1f62da632fa53f4f0fd86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 4, $this->source); })()), "html", null, true);
        echo ": 
    ";
        // line 5
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 6, $this->source); })()), "username", [], "any", false, false, false, 6), "html", null, true);
            echo "
    ";
        } else {
            // line 8
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acces denied!", [], "messages");
            // line 9
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User", [], "messages");
        echo "</h2>

                <ol>
                    <li><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>
                    ";
        // line 24
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 25
            echo "                        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "username", [], "any", false, false, false, 25), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profil", [], "messages");
            echo "</li>
                    ";
        } else {
            // line 27
            echo "                        <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acces denied!", [], "messages");
            echo "</li>
                    ";
        }
        // line 29
        echo "                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 40
            echo "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
            ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 48
                echo "
                        <div class=\"row d-flex justify-content-center mb-5\">
                            <div class=\"col\">
                                <h2>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "username", [], "any", false, false, false, 51), "html", null, true);
                echo "</h2>

                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <div class=\"row\">
                                            <div class=\"col d-flex justify-content-center align-items-center\">
                                                ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "image", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "                                                    <img src=\"../uploads/images/users/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "image", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "username", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" class=\"img-fluid\" style=\"max-width: 150px; width: 100%;\">
                                                ";
                } else {
                    // line 60
                    echo "                                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/no-image.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "username", [], "any", false, false, false, 60), "html", null, true);
                    echo "\" class=\"img-fluid\" style=\"max-width: 150px; width: 100%;\">
                                                ";
                }
                // line 62
                echo "                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <p class=\"d-flex justify-content-between align-items-center mt-2 px-3\">
                                                    <span class=\"badge bg-warning rounded-pill\">ID: ";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67), "html", null, true);
                echo "</span>
                                                    <span class=\"badge bg-primary rounded-pill\">";
                // line 68
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Verified", [], "messages");
                echo ": ";
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "isVerified", [], "any", false, false, false, 68)) ? ("<i class=\"bi bi-check-lg\"></i>") : ("<i class=\"bi bi-exclamation-lg\"></i>"));
                echo "</span>
                                                </p>
                                                <p class=\"d-flex justify-content-between align-items-center mt-2 px-3 lead\">
                                                    ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "facebook", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "facebook", [], "any", false, false, false, 72), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-facebook\"></i></a>
                                                    ";
                }
                // line 74
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "twitter", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "twitter", [], "any", false, false, false, 75), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-twitter\"></i></a>
                                                    ";
                }
                // line 77
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "instagram", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "instagram", [], "any", false, false, false, 78), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-instagram\"></i></a>
                                                    ";
                }
                // line 80
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "linkedin", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 81, $this->source); })()), "linkedin", [], "any", false, false, false, 81), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-linkedin\"></i></a>
                                                    ";
                }
                // line 83
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 83, $this->source); })()), "github", [], "any", false, false, false, 83)) {
                    // line 84
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "github", [], "any", false, false, false, 84), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-github\"></i></a>
                                                    ";
                }
                // line 86
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "youtube", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "youtube", [], "any", false, false, false, 87), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-youtube\"></i></a>
                                                    ";
                }
                // line 89
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "discord", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "discord", [], "any", false, false, false, 90), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-discord\"></i></a>
                                                    ";
                }
                // line 92
                echo "                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=\"col\">
                                        ";
                // line 98
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Presentation", [], "messages");
                echo ":
                                        <p class=\"bg-light p-2 mt-1 rounded\">
                                            ";
                // line 100
                echo twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "presentation", [], "any", false, false, false, 100);
                echo "
                                        </p>
                                        <p>
                                            Email: ";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 103, $this->source); })()), "email", [], "any", false, false, false, 103), "html", null, true);
                echo "<br>
                                            Role: 
                                            ";
                // line 105
                if ((json_encode(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "roles", [], "any", false, false, false, 105)) == "[\"ROLE_USER\"]")) {
                    // line 106
                    echo "                                                <span class=\"text-primary fw-bold\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User", [], "messages");
                    echo "</span>
                                            ";
                } else {
                    // line 108
                    echo "                                                <span class=\"text-danger fw-bold\">Admin</span>
                                            ";
                }
                // line 110
                echo "                                        </p>
                                        <div class=\"row mt-5\">
                                            <div class=\"col d-flex justify-content-end\">
                                                <a class=\"btn btn-warning me-1\" href=\"";
                // line 113
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reset your password", [], "messages");
                echo "</a> 
                                                <a class=\"btn btn-success\" href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114)]), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit profile", [], "messages");
                echo "</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    ";
            } else {
                // line 123
                echo "                        <div class=\"row d-flex justify-content-center mb-5\">
                            <div class=\"col text-center\">
                                <h1 class=\"display-1\">
                                    <i class=\"bi bi-exclamation-triangle-fill text-danger\"></i>
                                </h1>
                                <h3>
                                    ";
                // line 129
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Access denied!", [], "messages");
                // line 130
                echo "                                </h3>

                                <div class=\"mt-5 pb-4 text-center\">
                                    <a class=\"btn btn-primary p-3 lead\" href=\"";
                // line 133
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                echo "\">
                                        ";
                // line 134
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to Home page", [], "messages");
                // line 135
                echo "                                    </a>
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 140
            echo "                ";
        } else {
            // line 141
            echo "                    <div class=\"col pt-4 pb-2 px-3 alert alert-danger text-center\">
                        <p>
                            <i class=\"bi bi-exclamation-triangle-fill h1 fw-bold\"></i>
                        </p>
                        <p>
                            ";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Access denied!", [], "messages");
            // line 147
            echo "                        </p>
                        <p>
                            <a class=\"btn btn-primary2\" href=\"";
            // line 149
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\"><i class=\"fas fa-home\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back to Home page", [], "messages");
            echo "</a>
                        </p>
                    </div>
            ";
        }
        // line 153
        echo "        </div>
    </section>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 153,  398 => 149,  394 => 147,  392 => 146,  385 => 141,  382 => 140,  375 => 135,  373 => 134,  369 => 133,  364 => 130,  362 => 129,  354 => 123,  340 => 114,  334 => 113,  329 => 110,  325 => 108,  319 => 106,  317 => 105,  312 => 103,  306 => 100,  301 => 98,  293 => 92,  287 => 90,  284 => 89,  278 => 87,  275 => 86,  269 => 84,  266 => 83,  260 => 81,  257 => 80,  251 => 78,  248 => 77,  242 => 75,  239 => 74,  233 => 72,  231 => 71,  223 => 68,  219 => 67,  212 => 62,  204 => 60,  196 => 58,  194 => 57,  185 => 51,  180 => 48,  177 => 47,  175 => 46,  172 => 45,  162 => 41,  159 => 40,  155 => 39,  143 => 29,  137 => 27,  129 => 25,  127 => 24,  121 => 23,  115 => 20,  106 => 13,  96 => 12,  85 => 9,  82 => 8,  76 => 6,  74 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ site_name }}: 
    {% if (app.user.id == user.id) or (is_granted('ROLE_ADMIN')) %}
        {{ user.username }}
    {% else %}
    {% trans %}Acces denied!{% endtrans %}
    {% endif %}
{% endblock %}

{% block body %}
<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>{% trans %}User{% endtrans %}</h2>

                <ol>
                    <li><a href=\"{{ path('home') }}\">{% trans %}Home{% endtrans %}</a></li>
                    {% if (app.user.id == user.id) or (is_granted('ROLE_ADMIN')) %}
                        <li>{{ user.username }} {% trans %}profil{% endtrans %}</li>
                    {% else %}
                        <li>{% trans %}Acces denied!{% endtrans %}</li>
                    {% endif %}
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            {% for message in app.flashes('message') %}
                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    {{ message|trans }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}

            {% if app.user %}
                    {% if (app.user.id == user.id) or (is_granted('ROLE_ADMIN')) %}

                        <div class=\"row d-flex justify-content-center mb-5\">
                            <div class=\"col\">
                                <h2>{{ user.username }}</h2>

                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <div class=\"row\">
                                            <div class=\"col d-flex justify-content-center align-items-center\">
                                                {% if user.image %}
                                                    <img src=\"../uploads/images/users/{{ user.image }}\" alt=\"{{ user.username }}\" class=\"img-fluid\" style=\"max-width: 150px; width: 100%;\">
                                                {% else %}
                                                    <img src=\"{{ asset('img/no-image.png') }}\" alt=\"{{ user.username }}\" class=\"img-fluid\" style=\"max-width: 150px; width: 100%;\">
                                                {% endif %}
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <p class=\"d-flex justify-content-between align-items-center mt-2 px-3\">
                                                    <span class=\"badge bg-warning rounded-pill\">ID: {{ user.id }}</span>
                                                    <span class=\"badge bg-primary rounded-pill\">{% trans %}Verified{% endtrans %}: {{ user.isVerified ? '<i class=\"bi bi-check-lg\"></i>' : '<i class=\"bi bi-exclamation-lg\"></i>' }}</span>
                                                </p>
                                                <p class=\"d-flex justify-content-between align-items-center mt-2 px-3 lead\">
                                                    {% if user.facebook %}
                                                        <a href=\"{{ user.facebook }}\" target=\"_blank\"><i class=\"bi bi-facebook\"></i></a>
                                                    {% endif %}
                                                    {% if user.twitter %}
                                                        <a href=\"{{ user.twitter }}\" target=\"_blank\"><i class=\"bi bi-twitter\"></i></a>
                                                    {% endif %}
                                                    {% if user.instagram %}
                                                        <a href=\"{{ user.instagram }}\" target=\"_blank\"><i class=\"bi bi-instagram\"></i></a>
                                                    {% endif %}
                                                    {% if user.linkedin %}
                                                        <a href=\"{{ user.linkedin }}\" target=\"_blank\"><i class=\"bi bi-linkedin\"></i></a>
                                                    {% endif %}
                                                    {% if user.github %}
                                                        <a href=\"{{ user.github }}\" target=\"_blank\"><i class=\"bi bi-github\"></i></a>
                                                    {% endif %}
                                                    {% if user.youtube %}
                                                        <a href=\"{{ user.youtube }}\" target=\"_blank\"><i class=\"bi bi-youtube\"></i></a>
                                                    {% endif %}
                                                    {% if user.discord %}
                                                        <a href=\"{{ user.discord }}\" target=\"_blank\"><i class=\"bi bi-discord\"></i></a>
                                                    {% endif %}
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class=\"col\">
                                        {% trans %}Presentation{% endtrans %}:
                                        <p class=\"bg-light p-2 mt-1 rounded\">
                                            {{ user.presentation|raw }}
                                        </p>
                                        <p>
                                            Email: {{ user.email }}<br>
                                            Role: 
                                            {% if user.roles|json_encode == '[\"ROLE_USER\"]' %}
                                                <span class=\"text-primary fw-bold\">{% trans %}User{% endtrans %}</span>
                                            {% else %}
                                                <span class=\"text-danger fw-bold\">Admin</span>
                                            {% endif %}
                                        </p>
                                        <div class=\"row mt-5\">
                                            <div class=\"col d-flex justify-content-end\">
                                                <a class=\"btn btn-warning me-1\" href=\"{{ path('app_forgot_password_request') }}\">{% trans %}reset your password{% endtrans %}</a> 
                                                <a class=\"btn btn-success\" href=\"{{ path('user_edit', {'id': user.id}) }}\">{% trans %}edit profile{% endtrans %}</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    {% else %}
                        <div class=\"row d-flex justify-content-center mb-5\">
                            <div class=\"col text-center\">
                                <h1 class=\"display-1\">
                                    <i class=\"bi bi-exclamation-triangle-fill text-danger\"></i>
                                </h1>
                                <h3>
                                    {% trans %}Access denied!{% endtrans %}
                                </h3>

                                <div class=\"mt-5 pb-4 text-center\">
                                    <a class=\"btn btn-primary p-3 lead\" href=\"{{ path('home') }}\">
                                        {% trans %}Back to Home page{% endtrans %}
                                    </a>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"col pt-4 pb-2 px-3 alert alert-danger text-center\">
                        <p>
                            <i class=\"bi bi-exclamation-triangle-fill h1 fw-bold\"></i>
                        </p>
                        <p>
                            {% trans %}Access denied!{% endtrans %}
                        </p>
                        <p>
                            <a class=\"btn btn-primary2\" href=\"{{ path('home') }}\"><i class=\"fas fa-home\"></i> {% trans %}Back to Home page{% endtrans %}</a>
                        </p>
                    </div>
            {% endif %}
        </div>
    </section>
</main>
{% endblock %}", "user/show.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\user\\show.html.twig");
    }
}
