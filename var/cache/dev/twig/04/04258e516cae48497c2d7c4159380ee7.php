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

/* comment/show.html.twig */
class __TwigTemplate_bade05fce5ad87a94594e3379297b05f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comment/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "comment/show.html.twig", 1);
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
        echo ": ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment", [], "messages");
        
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
        echo "<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment", [], "messages");
        echo "</h2>

                <ol>
                    <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>
                    <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Admin</a></li>
                    <li>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment index", [], "messages");
        echo "</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"row d-flex justify-content-center mb-5\">
                <div class=\"col\">
                    <h1>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment", [], "messages");
        echo "</h1>

                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Content", [], "messages");
        echo "</th>
                                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 41, $this->source); })()), "content", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Is_active", [], "messages");
        echo "</th>
                                <td>";
        // line 45
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 45, $this->source); })()), "isActive", [], "any", false, false, false, 45)) ? ("Yes") : ("No"));
        echo "</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nickname", [], "messages");
        echo "</th>
                                <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 53, $this->source); })()), "nickname", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created_at", [], "messages");
        echo "</th>
                                <td>";
        // line 57
        ((twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 57, $this->source); })()), "createdAt", [], "any", false, false, false, 57)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 57, $this->source); })()), "createdAt", [], "any", false, false, false, 57), "medium", "short"), "html", null, true))) : (print ("")));
        echo "</td>
                            </tr>
                            <tr>
                                <th>Rgpd</th>
                                <td>";
        // line 61
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 61, $this->source); })()), "rgpd", [], "any", false, false, false, 61)) ? ("Yes") : ("No"));
        echo "</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class=\"row mt-5\">
                        <div class=\"col\">
                            <a class=\"btn btn-sm btn-success\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", [], "messages");
        echo "</a>
                            <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_index");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back to list", [], "messages");
        echo "</a>
                        </div>
                        <div class=\"col d-flex justify-content-end\">
                            ";
        // line 72
        echo twig_include($this->env, $context, "comment/_delete_form.html.twig");
        echo "
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
        return "comment/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 72,  210 => 69,  204 => 68,  194 => 61,  187 => 57,  183 => 56,  177 => 53,  173 => 52,  167 => 49,  160 => 45,  156 => 44,  150 => 41,  146 => 40,  140 => 37,  131 => 31,  115 => 18,  111 => 17,  105 => 16,  99 => 13,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ site_name }}: {% trans %}Comment{% endtrans %}{% endblock %}

{% block body %}
<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>{% trans %}Comment{% endtrans %}</h2>

                <ol>
                    <li><a href=\"{{ path('home') }}\">{% trans %}Home{% endtrans %}</a></li>
                    <li><a href=\"{{ path('admin') }}\">Admin</a></li>
                    <li>{% trans %}Comment index{% endtrans %}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"row d-flex justify-content-center mb-5\">
                <div class=\"col\">
                    <h1>{% trans %}Comment{% endtrans %}</h1>

                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{ comment.id }}</td>
                            </tr>
                            <tr>
                                <th>{% trans %}Content{% endtrans %}</th>
                                <td>{{ comment.content }}</td>
                            </tr>
                            <tr>
                                <th>{% trans %}Is_active{% endtrans %}</th>
                                <td>{{ comment.isActive ? 'Yes' : 'No' }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ comment.email }}</td>
                            </tr>
                            <tr>
                                <th>{% trans %}Nickname{% endtrans %}</th>
                                <td>{{ comment.nickname }}</td>
                            </tr>
                            <tr>
                                <th>{% trans %}Created_at{% endtrans %}</th>
                                <td>{{ comment.createdAt ? comment.createdAt|format_datetime('medium', 'short') : '' }}</td>
                            </tr>
                            <tr>
                                <th>Rgpd</th>
                                <td>{{ comment.rgpd ? 'Yes' : 'No' }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class=\"row mt-5\">
                        <div class=\"col\">
                            <a class=\"btn btn-sm btn-success\" href=\"{{ path('comment_edit', {'id': comment.id}) }}\">{% trans %}edit{% endtrans %}</a>
                            <a class=\"btn btn-sm btn-primary\" href=\"{{ path('comment_index') }}\">{% trans %}back to list{% endtrans %}</a>
                        </div>
                        <div class=\"col d-flex justify-content-end\">
                            {{ include('comment/_delete_form.html.twig') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
{% endblock %}", "comment/show.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\comment\\show.html.twig");
    }
}
