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

/* base.html.twig */
class __TwigTemplate_6536743cd7aefa7f06c9f0a315302718 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["site_presentation"]) || array_key_exists("site_presentation", $context) ? $context["site_presentation"] : (function () { throw new RuntimeError('Variable "site_presentation" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\" name=\"description\">
    <meta content=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["site_keywords"]) || array_key_exists("site_keywords", $context) ? $context["site_keywords"] : (function () { throw new RuntimeError('Variable "site_keywords" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" name=\"keywords\">
    <meta name=\"author\" content=\"citizenz\">
    <meta name=\"generator\" content=\"Symfony 5\">
    <meta name=\"robots\" content=\"follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large\">

    <!-- search engines -->
    <meta name=\"description\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["site_presentation"]) || array_key_exists("site_presentation", $context) ? $context["site_presentation"] : (function () { throw new RuntimeError('Variable "site_presentation" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["site_keywords"]) || array_key_exists("site_keywords", $context) ? $context["site_keywords"] : (function () { throw new RuntimeError('Variable "site_keywords" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
    <meta name=\"image\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["site_url_full"]) || array_key_exists("site_url_full", $context) ? $context["site_url_full"] : (function () { throw new RuntimeError('Variable "site_url_full" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "/img/logo.png\">

    <!-- Schema.org for Google -->
    <meta itemprop=\"name\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["site_name_full"]) || array_key_exists("site_name_full", $context) ? $context["site_name_full"] : (function () { throw new RuntimeError('Variable "site_name_full" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">
    <meta itemprop=\"description\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["site_presentation"]) || array_key_exists("site_presentation", $context) ? $context["site_presentation"] : (function () { throw new RuntimeError('Variable "site_presentation" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\">
    <meta itemprop=\"image\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["site_url_full"]) || array_key_exists("site_url_full", $context) ? $context["site_url_full"] : (function () { throw new RuntimeError('Variable "site_url_full" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "/img/logo.png\">

    <!-- Twitter -->
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:title\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["site_name_full"]) || array_key_exists("site_name_full", $context) ? $context["site_name_full"] : (function () { throw new RuntimeError('Variable "site_name_full" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\">
    <meta name=\"twitter:description\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["site_presentation"]) || array_key_exists("site_presentation", $context) ? $context["site_presentation"] : (function () { throw new RuntimeError('Variable "site_presentation" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\">
    <meta name=\"twitter:site\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["site_name_full"]) || array_key_exists("site_name_full", $context) ? $context["site_name_full"] : (function () { throw new RuntimeError('Variable "site_name_full" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\">
    <meta name=\"twitter:image:src\" content=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["site_url_full"]) || array_key_exists("site_url_full", $context) ? $context["site_url_full"] : (function () { throw new RuntimeError('Variable "site_url_full" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "/img/logo.png\">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name=\"og:title\" content=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["site_name_full"]) || array_key_exists("site_name_full", $context) ? $context["site_name_full"] : (function () { throw new RuntimeError('Variable "site_name_full" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">
    <meta name=\"og:description\" content=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["site_presentation"]) || array_key_exists("site_presentation", $context) ? $context["site_presentation"] : (function () { throw new RuntimeError('Variable "site_presentation" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">
    <meta name=\"og:image\" content=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["site_url_full"]) || array_key_exists("site_url_full", $context) ? $context["site_url_full"] : (function () { throw new RuntimeError('Variable "site_url_full" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "/img/logo.png\">
    <meta name=\"og:url\" content=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["site_url_full"]) || array_key_exists("site_url_full", $context) ? $context["site_url_full"] : (function () { throw new RuntimeError('Variable "site_url_full" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
    <meta name=\"og:site_name\" content=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["site_name_full"]) || array_key_exists("site_name_full", $context) ? $context["site_name_full"] : (function () { throw new RuntimeError('Variable "site_name_full" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\">
    <meta name=\"og:locale\" content=\"en_EN\">
    <meta name=\"fb:app_id\" content=\"TO_DO\">
    <meta name=\"og:type\" content=\"website\">

    <!-- Favicons -->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- font awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    <!-- Google Fonts -->
    <link
        href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap\"
        rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 65
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 68
        echo "
    ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "</head>

<body>

    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"fixed-top d-flex align-items-center \">
        <div class=\"container d-flex justify-content-between align-items-center\">

            <div class=\"logo\">
                <h1 class=\"text-light\">
                    <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "\" class=\"img-fluid float-start me-2\" style=\"max-width: 30px; width: 100%;\">
                    <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                        <span>";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "</span>
                    </a>
                </h1>
                <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
            </div>

            <nav id=\"navbar\" class=\"navbar\">
                <ul>
                    <li><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>
                    <li><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("About", [], "messages");
        echo "</a></li>

                    <li><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>

                    ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97)) {
            // line 98
            echo "                        <li class=\"dropdown\">
                            <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\">
                                <span><i class=\"bi bi-person-circle\"></i> ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "username", [], "any", false, false, false, 100), "html", null, true);
            echo " <i class=\"bi bi-chevron-down\"></i></span>
                            </a>
                            <ul>
                                ";
            // line 103
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 104
                echo "                                    <li>
                                        <a href=\"";
                // line 105
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\"><span><i class=\"bi bi-gear-fill\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dashboard", [], "messages");
                echo "</span></a>
                                    </li>
                                 ";
            }
            // line 108
            echo "                                 <li>
                                    <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\"><span><i class=\"bi bi-person-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile", [], "messages");
            echo "</span></a>
                                </li>
                                <li>
                                    <a class=\"nav-link scrollto\" href=\"";
            // line 112
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><span><i class=\"bi bi-box-arrow-right\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout", [], "messages");
            echo "</span></a>
                                </li>
                            </ul>
                        </li>
                    ";
        } else {
            // line 117
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in", [], "messages");
            echo "</a></li>
                        <li><a href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign up", [], "messages");
            echo "</a></li>
                    ";
        }
        // line 120
        echo "
                    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 122
            echo "                        ";
            if (($context["locale"] != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "request", [], "any", false, false, false, 122), "locale", [], "any", false, false, false, 122))) {
                // line 123
                echo "                            <li>
                                <a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_locale", ["locale" => $context["locale"]]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/" . $context["locale"]) . ".png")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\"></a> 
                            </li>
                        ";
            }
            // line 127
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
                </ul>
                <i class=\"bi bi-list mobile-nav-toggle\"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    ";
        // line 135
        $this->displayBlock('body', $context, $blocks);
        // line 136
        echo "
    <!-- ======= Footer ======= -->
    <footer id=\"footer\" data-aos=\"fade-up\" data-aos-easing=\"ease-in-out\" data-aos-duration=\"500\">

        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-3 col-md-6 footer-links\">
                        <h4>";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Useful Links", [], "messages");
        echo "</h4>
                        <ul>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terms");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Terms of service", [], "messages");
        echo "</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("policy");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Privacy policy", [], "messages");
        echo "</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disclaimer");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disclaimer", [], "messages");
        echo "</a></li>
                        </ul>
                    </div>


                    <div class=\"col-lg-4 col-md-6 footer-contact\">
                        <h4>";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact Us", [], "messages");
        echo "</h4>
                        <p>
                            ";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["site_address1"]) || array_key_exists("site_address1", $context) ? $context["site_address1"] : (function () { throw new RuntimeError('Variable "site_address1" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "<br>
                            ";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["site_address_city"]) || array_key_exists("site_address_city", $context) ? $context["site_address_city"] : (function () { throw new RuntimeError('Variable "site_address_city" does not exist.', 159, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["site_address_code"]) || array_key_exists("site_address_code", $context) ? $context["site_address_code"] : (function () { throw new RuntimeError('Variable "site_address_code" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "<br>
                            ";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["site_address_country"]) || array_key_exists("site_address_country", $context) ? $context["site_address_country"] : (function () { throw new RuntimeError('Variable "site_address_country" does not exist.', 160, $this->source); })()), "html", null, true);
        echo "<br>
                            <strong>";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Phone", [], "messages");
        echo ":</strong> ";
        echo twig_escape_filter($this->env, (isset($context["site_address_phone"]) || array_key_exists("site_address_phone", $context) ? $context["site_address_phone"] : (function () { throw new RuntimeError('Variable "site_address_phone" does not exist.', 161, $this->source); })()), "html", null, true);
        echo "<br>
                            <strong>Email:</strong> ";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["site_mail"]) || array_key_exists("site_mail", $context) ? $context["site_mail"] : (function () { throw new RuntimeError('Variable "site_mail" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "<br>
                        </p>

                    </div>

                    <div class=\"col-lg-5 col-md-6 footer-info\">
                        <h3>";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("About", [], "messages");
        echo "</h3>
                        <p>
                            ";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["site_presentation"]) || array_key_exists("site_presentation", $context) ? $context["site_presentation"] : (function () { throw new RuntimeError('Variable "site_presentation" does not exist.', 170, $this->source); })()), "html", null, true);
        echo "
                        </p>
                        <div class=\"social-links mt-3\">
                            <a href=\"";
        // line 173
        echo twig_escape_filter($this->env, (isset($context["twitter_url"]) || array_key_exists("twitter_url", $context) ? $context["twitter_url"] : (function () { throw new RuntimeError('Variable "twitter_url" does not exist.', 173, $this->source); })()), "html", null, true);
        echo "\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                            <a href=\"";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["facebook_url"]) || array_key_exists("facebook_url", $context) ? $context["facebook_url"] : (function () { throw new RuntimeError('Variable "facebook_url" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                            <a href=\"";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["instagram_url"]) || array_key_exists("instagram_url", $context) ? $context["instagram_url"] : (function () { throw new RuntimeError('Variable "instagram_url" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                            <a href=\"";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["linkedin_url"]) || array_key_exists("linkedin_url", $context) ? $context["linkedin_url"] : (function () { throw new RuntimeError('Variable "linkedin_url" does not exist.', 176, $this->source); })()), "html", null, true);
        echo "\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
                            <a href=\"";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["github_url"]) || array_key_exists("github_url", $context) ? $context["github_url"] : (function () { throw new RuntimeError('Variable "github_url" does not exist.', 177, $this->source); })()), "html", null, true);
        echo "\" class=\"github\"><i class=\"bx bxl-github\"></i></a>
                            <a href=\"";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["discord_url"]) || array_key_exists("discord_url", $context) ? $context["discord_url"] : (function () { throw new RuntimeError('Variable "discord_url" does not exist.', 178, $this->source); })()), "html", null, true);
        echo "\" class=\"rss\"><i class=\"bx bxl-discord\"></i></a>
                            <a href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rss_feed");
        echo "\" class=\"rss\"><i class=\"bi bi-rss\"></i></a>
                        </div>
                        <p class=\"justify-content-end d-flex small fst-italic\">V ";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["site_version"]) || array_key_exists("site_version", $context) ? $context["site_version"] : (function () { throw new RuntimeError('Variable "site_version" does not exist.', 181, $this->source); })()), "html", null, true);
        echo "</p>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"copyright\">
                <strong><span>";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 190, $this->source); })()), "html", null, true);
        echo "</span></strong> ";
        echo twig_escape_filter($this->env, (isset($context["site_year"]) || array_key_exists("site_year", $context) ? $context["site_year"] : (function () { throw new RuntimeError('Variable "site_year" does not exist.', 190, $this->source); })()), "html", null, true);
        echo " - Some rights reserved <a href=\"https://www.gnu.org/licenses/gpl-3.0.fr.html\" target=\"_blank\">GPLv3</a>
            </div>
            <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                Designed by <a href=\"https://bootstrapmade.com/\" taget=\"_blank\">BootstrapMade</a> | 
                Images <a href=\"https://pixabay.com/\" taget=\"_blank\">Pixabay</a> 
                <br>
                <a href=\"";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["github_repo"]) || array_key_exists("github_repo", $context) ? $context["github_repo"] : (function () { throw new RuntimeError('Variable "github_repo" does not exist.', 200, $this->source); })()), "html", null, true);
        echo "\" target=\"_blank\">Github Sources</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Vendor JS Files -->
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/purecounter/purecounter.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Main JS File -->
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 7, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 65
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 66
        echo "    ";
        // line 67
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    ";
        // line 71
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 135
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 135,  618 => 71,  616 => 70,  606 => 69,  596 => 67,  594 => 66,  584 => 65,  565 => 7,  550 => 219,  544 => 216,  540 => 215,  536 => 214,  532 => 213,  528 => 212,  524 => 211,  520 => 210,  516 => 209,  504 => 200,  489 => 190,  477 => 181,  472 => 179,  468 => 178,  464 => 177,  460 => 176,  456 => 175,  452 => 174,  448 => 173,  442 => 170,  437 => 168,  428 => 162,  422 => 161,  418 => 160,  412 => 159,  408 => 158,  403 => 156,  392 => 150,  386 => 149,  380 => 148,  374 => 147,  369 => 145,  358 => 136,  356 => 135,  347 => 128,  341 => 127,  331 => 124,  328 => 123,  325 => 122,  321 => 121,  318 => 120,  311 => 118,  304 => 117,  294 => 112,  286 => 109,  283 => 108,  275 => 105,  272 => 104,  270 => 103,  264 => 100,  260 => 99,  257 => 98,  255 => 97,  250 => 95,  243 => 93,  237 => 92,  226 => 84,  222 => 83,  216 => 82,  204 => 72,  202 => 69,  199 => 68,  197 => 65,  192 => 63,  186 => 60,  182 => 59,  178 => 58,  174 => 57,  170 => 56,  166 => 55,  162 => 54,  148 => 43,  144 => 42,  135 => 36,  131 => 35,  127 => 34,  123 => 33,  119 => 32,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  94 => 22,  90 => 21,  86 => 20,  80 => 17,  76 => 16,  72 => 15,  63 => 9,  59 => 8,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <title>{% block title %}{{ site_name }}{% endblock %}</title>
    <meta content=\"{{ site_presentation }}\" name=\"description\">
    <meta content=\"{{ site_keywords }}\" name=\"keywords\">
    <meta name=\"author\" content=\"citizenz\">
    <meta name=\"generator\" content=\"Symfony 5\">
    <meta name=\"robots\" content=\"follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large\">

    <!-- search engines -->
    <meta name=\"description\" content=\"{{ site_presentation }}\">
    <meta name=\"keywords\" content=\"{{ site_keywords }}\">
    <meta name=\"image\" content=\"{{ site_url_full }}/img/logo.png\">

    <!-- Schema.org for Google -->
    <meta itemprop=\"name\" content=\"{{ site_name_full }}\">
    <meta itemprop=\"description\" content=\"{{ site_presentation }}\">
    <meta itemprop=\"image\" content=\"{{ site_url_full }}/img/logo.png\">

    <!-- Twitter -->
    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:title\" content=\"{{ site_name_full }}\">
    <meta name=\"twitter:description\" content=\"{{ site_presentation }}\">
    <meta name=\"twitter:site\" content=\"{{ site_name_full }}\">
    <meta name=\"twitter:image:src\" content=\"{{ site_url_full }}/img/logo.png\">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name=\"og:title\" content=\"{{ site_name_full }}\">
    <meta name=\"og:description\" content=\"{{ site_presentation }}\">
    <meta name=\"og:image\" content=\"{{ site_url_full }}/img/logo.png\">
    <meta name=\"og:url\" content=\"{{ site_url_full }}\">
    <meta name=\"og:site_name\" content=\"{{ site_name_full }}\">
    <meta name=\"og:locale\" content=\"en_EN\">
    <meta name=\"fb:app_id\" content=\"TO_DO\">
    <meta name=\"og:type\" content=\"website\">

    <!-- Favicons -->
    <link href=\"{{ asset('img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- font awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    <!-- Google Fonts -->
    <link
        href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap\"
        rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{ asset('vendor/animate.css/animate.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/aos/aos.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Main CSS File -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

    {% block stylesheets %}
    {#{{ encore_entry_link_tags('app') }}#}
    {% endblock %}

    {% block javascripts %}
    {#{{ encore_entry_script_tags('app') }}#}
    {% endblock %}
</head>

<body>

    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"fixed-top d-flex align-items-center \">
        <div class=\"container d-flex justify-content-between align-items-center\">

            <div class=\"logo\">
                <h1 class=\"text-light\">
                    <img src=\"{{ asset('img/logo.png') }}\" alt=\"{{ site_name }}\" class=\"img-fluid float-start me-2\" style=\"max-width: 30px; width: 100%;\">
                    <a href=\"{{ path('home') }}\">
                        <span>{{ site_name }}</span>
                    </a>
                </h1>
                <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
            </div>

            <nav id=\"navbar\" class=\"navbar\">
                <ul>
                    <li><a href=\"{{ path('home') }}\">{% trans %}Home{% endtrans %}</a></li>
                    <li><a href=\"{{ path('about') }}\">{% trans %}About{% endtrans %}</a></li>

                    <li><a href=\"{{ path('contact') }}\">Contact</a></li>

                    {% if app.user %}
                        <li class=\"dropdown\">
                            <a href=\"{{ path('user_show', {'id': app.user.id}) }}\">
                                <span><i class=\"bi bi-person-circle\"></i> {{ app.user.username }} <i class=\"bi bi-chevron-down\"></i></span>
                            </a>
                            <ul>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <li>
                                        <a href=\"{{ path('admin') }}\"><span><i class=\"bi bi-gear-fill\"></i> {% trans %}Dashboard{% endtrans %}</span></a>
                                    </li>
                                 {% endif %}
                                 <li>
                                    <a href=\"{{ path('user_show', {'id': app.user.id}) }}\"><span><i class=\"bi bi-person-circle\"></i> {% trans %}Profile{% endtrans %}</span></a>
                                </li>
                                <li>
                                    <a class=\"nav-link scrollto\" href=\"{{ path('app_logout') }}\"><span><i class=\"bi bi-box-arrow-right\"></i> {% trans %}Logout{% endtrans %}</span></a>
                                </li>
                            </ul>
                        </li>
                    {% else %}
                        <li><a href=\"{{ path('app_login') }}\">{% trans %}Sign in{% endtrans %}</a></li>
                        <li><a href=\"{{ path('app_register') }}\">{% trans %}Sign up{% endtrans %}</a></li>
                    {% endif %}

                    {% for locale in locales %}
                        {% if locale != app.request.locale %}
                            <li>
                                <a href=\"{{ path('change_locale', {'locale': locale}) }}\"><img src=\"{{ asset('img/'~locale~'.png') }}\" alt=\"{{ locale }}\"></a> 
                            </li>
                        {% endif %}
                    {% endfor %}

                </ul>
                <i class=\"bi bi-list mobile-nav-toggle\"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    {% block body %}{% endblock %}

    <!-- ======= Footer ======= -->
    <footer id=\"footer\" data-aos=\"fade-up\" data-aos-easing=\"ease-in-out\" data-aos-duration=\"500\">

        <div class=\"footer-top\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-3 col-md-6 footer-links\">
                        <h4>{% trans %}Useful Links{% endtrans %}</h4>
                        <ul>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"{{ path('home') }}\">{% trans %}Home{% endtrans %}</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"{{ path('terms') }}\">{% trans %}Terms of service{% endtrans %}</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"{{ path('policy') }}\">{% trans %}Privacy policy{% endtrans %}</a></li>
                            <li><i class=\"bx bx-chevron-right\"></i> <a href=\"{{ path('disclaimer') }}\">{% trans %}Disclaimer{% endtrans %}</a></li>
                        </ul>
                    </div>


                    <div class=\"col-lg-4 col-md-6 footer-contact\">
                        <h4>{% trans %}Contact Us{% endtrans %}</h4>
                        <p>
                            {{ site_address1 }}<br>
                            {{ site_address_city }}, {{ site_address_code }}<br>
                            {{ site_address_country }}<br>
                            <strong>{% trans %}Phone{% endtrans %}:</strong> {{ site_address_phone }}<br>
                            <strong>Email:</strong> {{ site_mail }}<br>
                        </p>

                    </div>

                    <div class=\"col-lg-5 col-md-6 footer-info\">
                        <h3>{% trans %}About{% endtrans %}</h3>
                        <p>
                            {{ site_presentation }}
                        </p>
                        <div class=\"social-links mt-3\">
                            <a href=\"{{ twitter_url }}\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
                            <a href=\"{{ facebook_url }}\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                            <a href=\"{{ instagram_url }}\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                            <a href=\"{{ linkedin_url }}\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
                            <a href=\"{{ github_url }}\" class=\"github\"><i class=\"bx bxl-github\"></i></a>
                            <a href=\"{{ discord_url }}\" class=\"rss\"><i class=\"bx bxl-discord\"></i></a>
                            <a href=\"{{ path('rss_feed') }}\" class=\"rss\"><i class=\"bi bi-rss\"></i></a>
                        </div>
                        <p class=\"justify-content-end d-flex small fst-italic\">V {{ site_version }}</p>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"copyright\">
                <strong><span>{{ site_name }}</span></strong> {{ site_year }} - Some rights reserved <a href=\"https://www.gnu.org/licenses/gpl-3.0.fr.html\" target=\"_blank\">GPLv3</a>
            </div>
            <div class=\"credits\">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                Designed by <a href=\"https://bootstrapmade.com/\" taget=\"_blank\">BootstrapMade</a> | 
                Images <a href=\"https://pixabay.com/\" taget=\"_blank\">Pixabay</a> 
                <br>
                <a href=\"{{ github_repo }}\" target=\"_blank\">Github Sources</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i
            class=\"bi bi-arrow-up-short\"></i></a>

    <!-- Vendor JS Files -->
    <script src=\"{{ asset('vendor/aos/aos.js') }}\"></script>
    <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/glightbox/js/glightbox.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/php-email-form/validate.js') }}\"></script>
    <script src=\"{{ asset('vendor/purecounter/purecounter.js') }}\"></script>
    <script src=\"{{ asset('vendor/swiper/swiper-bundle.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/waypoints/noframework.waypoints.js') }}\"></script>

    <!-- Template Main JS File -->
    <script src=\"{{ asset('js/main.js') }}\"></script>

</body>

</html>", "base.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\base.html.twig");
    }
}
