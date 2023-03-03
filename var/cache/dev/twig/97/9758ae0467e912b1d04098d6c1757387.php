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

/* admin/index.html.twig */
class __TwigTemplate_ccdf2822c2ab717e2371f7c1dd0633e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, (isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo ": Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>Admin</h2>

                <ol>
                    <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>
                    <li>Admin Index</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            <h2 class=\"text-center fw-bold card py-2 mb-4\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("DASHBOARD", [], "messages");
        echo "</h2>

            <div class=\"row d-flex justify-content-center mb-5\">

                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ARTICLES", [], "messages");
        echo "</h5>
                            <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\" class=\"btn btn-primary fw-bold p-3 fs-6\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Articles list", [], "messages");
        echo "</a>
                            <br>
                            <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\" class=\"btn btn-success fw-bold p-3 fs-6\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New article", [], "messages");
        echo "</a>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CATEGORIES", [], "messages");
        echo "</h5>
                            <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_admin_index");
        echo "\" class=\"btn btn-info fw-bold p-3 fs-6\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories list", [], "messages");
        echo "</a>
                            <br>
                            <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_new");
        echo "\" class=\"btn btn-success fw-bold p-3 fs-6\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New category", [], "messages");
        echo "</a>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">TAGS</h5>
                            <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_admin_index");
        echo "\" class=\"btn btn-warning fw-bold p-3 fs-6\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags list", [], "messages");
        echo "</a>
                            <br>
                            <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_new");
        echo "\" class=\"btn btn-success fw-bold p-3 fs-6\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New tag", [], "messages");
        echo "</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row d-flex justify-content-center mb-5\">
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COMMENTS", [], "messages");
        echo "</h5>
                            <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_admin_index");
        echo "\" class=\"btn btn-warning fw-bold p-3 fs-6\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comments list", [], "messages");
        echo "</a>
                            <br>
                            <a href=\"\" class=\"btn btn-outline-success fw-bold p-3 fs-6\">";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Other", [], "messages");
        echo "</a>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("USERS", [], "messages");
        echo "</h5>
                            <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\" class=\"btn btn-warning fw-bold p-3 fs-6\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Users list", [], "messages");
        echo "</a>
                            <br>
                            <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\" class=\"btn btn-success fw-bold p-3 fs-6\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New user", [], "messages");
        echo "</a>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LINKS", [], "messages");
        echo "</h5>
                            <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link_admin_index");
        echo "\" class=\"btn btn-warning fw-bold p-3 fs-6\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Links list", [], "messages");
        echo "</a>
                            <br>
                            <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link_new");
        echo "\" class=\"btn btn-success fw-bold p-3 fs-6\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New link", [], "messages");
        echo "</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 92,  246 => 90,  242 => 89,  230 => 82,  223 => 80,  219 => 79,  209 => 72,  202 => 70,  198 => 69,  183 => 59,  176 => 57,  163 => 49,  156 => 47,  152 => 46,  140 => 39,  133 => 37,  129 => 36,  119 => 29,  102 => 17,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ site_name }}: Admin{% endblock %}

{% block body %}

<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>Admin</h2>

                <ol>
                    <li><a href=\"{{ path('home') }}\">{% trans %}Home{% endtrans %}</a></li>
                    <li>Admin Index</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            <h2 class=\"text-center fw-bold card py-2 mb-4\">{% trans %}DASHBOARD{% endtrans %}</h2>

            <div class=\"row d-flex justify-content-center mb-5\">

                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">{% trans %}ARTICLES{% endtrans %}</h5>
                            <a href=\"{{ path('article_index') }}\" class=\"btn btn-primary fw-bold p-3 fs-6\">{% trans %}Articles list{% endtrans %}</a>
                            <br>
                            <a href=\"{{ path('article_new') }}\" class=\"btn btn-success fw-bold p-3 fs-6\">{% trans %}New article{% endtrans %}</a>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">{% trans %}CATEGORIES{% endtrans %}</h5>
                            <a href=\"{{ path('category_admin_index') }}\" class=\"btn btn-info fw-bold p-3 fs-6\">{% trans %}Categories list{% endtrans %}</a>
                            <br>
                            <a href=\"{{ path('category_new') }}\" class=\"btn btn-success fw-bold p-3 fs-6\">{% trans %}New category{% endtrans %}</a>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">TAGS</h5>
                            <a href=\"{{ path('tag_admin_index') }}\" class=\"btn btn-warning fw-bold p-3 fs-6\">{% trans %}Tags list{% endtrans %}</a>
                            <br>
                            <a href=\"{{ path('tag_new') }}\" class=\"btn btn-success fw-bold p-3 fs-6\">{% trans %}New tag{% endtrans %}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row d-flex justify-content-center mb-5\">
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">{% trans %}COMMENTS{% endtrans %}</h5>
                            <a href=\"{{ path('comment_admin_index') }}\" class=\"btn btn-warning fw-bold p-3 fs-6\">{% trans %}Comments list{% endtrans %}</a>
                            <br>
                            <a href=\"\" class=\"btn btn-outline-success fw-bold p-3 fs-6\">{% trans %}Other{% endtrans %}</a>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">{% trans %}USERS{% endtrans %}</h5>
                            <a href=\"{{ path('user_index') }}\" class=\"btn btn-warning fw-bold p-3 fs-6\">{% trans %}Users list{% endtrans %}</a>
                            <br>
                            <a href=\"{{ path('user_new') }}\" class=\"btn btn-success fw-bold p-3 fs-6\">{% trans %}New user{% endtrans %}</a>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <div class=\"d-grid gap-2 card-body\">
                            <h5 class=\"card-title fw-bold\">{% trans %}LINKS{% endtrans %}</h5>
                            <a href=\"{{ path('link_admin_index') }}\" class=\"btn btn-warning fw-bold p-3 fs-6\">{% trans %}Links list{% endtrans %}</a>
                            <br>
                            <a href=\"{{ path('link_new') }}\" class=\"btn btn-success fw-bold p-3 fs-6\">{% trans %}New link{% endtrans %}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

{% endblock %}", "admin/index.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\admin\\index.html.twig");
    }
}
