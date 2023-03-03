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
class __TwigTemplate_f332df285dccd07b0dc8967359dbff75 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo ": 
    ";
        // line 5
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 5)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 6), "html", null, true);
            echo "
    ";
        } else {
            // line 8
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Acces denied!", [], "messages");
            // line 9
            echo "    ";
        }
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 24)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 25
            echo "                        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 25), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "message"], "method", false, false, false, 39));
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47) == twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 47)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 48
                echo "
                        <div class=\"row d-flex justify-content-center mb-5\">
                            <div class=\"col\">
                                <h2>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 51), "html", null, true);
                echo "</h2>

                                <div class=\"row\">
                                    <div class=\"col-2\">
                                        <div class=\"row\">
                                            <div class=\"col d-flex justify-content-center align-items-center\">
                                                ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "                                                    <img src=\"../uploads/images/users/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "image", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" class=\"img-fluid\" style=\"max-width: 150px; width: 100%;\">
                                                ";
                } else {
                    // line 60
                    echo "                                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/no-image.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 60), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 67), "html", null, true);
                echo "</span>
                                                    <span class=\"badge bg-primary rounded-pill\">";
                // line 68
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Verified", [], "messages");
                echo ": ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "isVerified", [], "any", false, false, false, 68)) ? ("<i class=\"bi bi-check-lg\"></i>") : ("<i class=\"bi bi-exclamation-lg\"></i>"));
                echo "</span>
                                                </p>
                                                <p class=\"d-flex justify-content-between align-items-center mt-2 px-3 lead\">
                                                    ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", [], "any", false, false, false, 72), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-facebook\"></i></a>
                                                    ";
                }
                // line 74
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twitter", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "twitter", [], "any", false, false, false, 75), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-twitter\"></i></a>
                                                    ";
                }
                // line 77
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "instagram", [], "any", false, false, false, 77)) {
                    // line 78
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "instagram", [], "any", false, false, false, 78), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-instagram\"></i></a>
                                                    ";
                }
                // line 80
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "linkedin", [], "any", false, false, false, 81), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-linkedin\"></i></a>
                                                    ";
                }
                // line 83
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "github", [], "any", false, false, false, 83)) {
                    // line 84
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "github", [], "any", false, false, false, 84), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-github\"></i></a>
                                                    ";
                }
                // line 86
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "youtube", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "youtube", [], "any", false, false, false, 87), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"bi bi-youtube\"></i></a>
                                                    ";
                }
                // line 89
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "discord", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "discord", [], "any", false, false, false, 90), "html", null, true);
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
                echo twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "presentation", [], "any", false, false, false, 100);
                echo "
                                        </p>
                                        <p>
                                            Email: ";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 103), "html", null, true);
                echo "<br>
                                            Role: 
                                            ";
                // line 105
                if ((json_encode(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roles", [], "any", false, false, false, 105)) == "[\"ROLE_USER\"]")) {
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 114)]), "html", null, true);
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
        return array (  377 => 153,  368 => 149,  364 => 147,  362 => 146,  355 => 141,  352 => 140,  345 => 135,  343 => 134,  339 => 133,  334 => 130,  332 => 129,  324 => 123,  310 => 114,  304 => 113,  299 => 110,  295 => 108,  289 => 106,  287 => 105,  282 => 103,  276 => 100,  271 => 98,  263 => 92,  257 => 90,  254 => 89,  248 => 87,  245 => 86,  239 => 84,  236 => 83,  230 => 81,  227 => 80,  221 => 78,  218 => 77,  212 => 75,  209 => 74,  203 => 72,  201 => 71,  193 => 68,  189 => 67,  182 => 62,  174 => 60,  166 => 58,  164 => 57,  155 => 51,  150 => 48,  147 => 47,  145 => 46,  142 => 45,  132 => 41,  129 => 40,  125 => 39,  113 => 29,  107 => 27,  99 => 25,  97 => 24,  91 => 23,  85 => 20,  76 => 13,  72 => 12,  67 => 9,  64 => 8,  58 => 6,  56 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/show.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\user\\show.html.twig");
    }
}
