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

/* contact/index.html.twig */
class __TwigTemplate_ff56665b5323c2814dd05fd265faedbf extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact us!", [], "messages");
        
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
                <h2>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages");
        echo "</h2>

                <ol>
                    <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>
                    <li>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages");
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
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "flashBag", [], "any", false, false, false, 31), "get", [0 => "successContact"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 32
            echo "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 33
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

                    <div class=\"card px-3 pt-3 pb-2 mb-4\">
                        <p class=\"lead\">
                            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/contact.png"), "html", null, true);
        echo "\" alt=\"Contact\" class=\"img-fluid float-start me-5\">
                            <span class=\"fs-1 fw-bold\">";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact-us by mail", [], "messages");
        echo "</span>
                            <br><br>
                            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello there,", [], "messages");
        // line 45
        echo "                            <br>
                            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please use the form below to contact us.", [], "messages");
        echo " 
                            ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We'll answer you as soon as possible.", [], "messages");
        // line 48
        echo "                            <span class=\"small fst-italic d-flex justify-content-end mt-3\">";
        echo twig_escape_filter($this->env, (isset($context["site_name_full"]) || array_key_exists("site_name_full", $context) ? $context["site_name_full"] : (function () { throw new RuntimeError('Variable "site_name_full" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "</span>
                        </p>
                    </div>

                    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"col\">
                                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo ":<br>
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), 'row', ["label" => false]);
        echo "
                            </div>
                            <div class=\"col\">
                                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages");
        echo ":<br>
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), 'row', ["label" => false]);
        echo "
                            </div>
                        </div>
                        ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your message", [], "messages");
        echo ":<br>
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 64, $this->source); })()), "message", [], "any", false, false, false, 64), 'row', ["label" => false]);
        echo "
                        ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please copy antispam code", [], "messages");
        echo ": 
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 66, $this->source); })()), "captcha", [], "any", false, false, false, 66), 'row', ["label" => false]);
        echo "
                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary mr-3 mb-4\">";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send message", [], "messages");
        echo "</button>
                            <button type=\"reset\" class=\"btn btn-secondary mb-4\">";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "messages");
        echo "</button>
                        </div>
                    ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["our_form"]) || array_key_exists("our_form", $context) ? $context["our_form"] : (function () { throw new RuntimeError('Variable "our_form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "

                </div>
                ";
        // line 74
        $this->displayBlock('sidebar', $context, $blocks);
        // line 77
        echo "            </div>
        </div>
    </section>
</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 75
        echo "                    ";
        echo $this->extensions['App\twig\sidebarExtension']->getSidebar();
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 75,  255 => 74,  240 => 77,  238 => 74,  232 => 71,  227 => 69,  223 => 68,  218 => 66,  214 => 65,  210 => 64,  206 => 63,  200 => 60,  196 => 59,  190 => 56,  186 => 55,  180 => 52,  172 => 48,  170 => 47,  166 => 46,  163 => 45,  161 => 44,  156 => 42,  152 => 41,  146 => 37,  136 => 33,  133 => 32,  129 => 31,  113 => 18,  107 => 17,  101 => 14,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ site_name }}: {% trans %}contact us!{% endtrans %}{% endblock %}

{% block body %}

<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>{% trans %}Contact{% endtrans %}</h2>

                <ol>
                    <li><a href=\"{{ path('home') }}\">{% trans %}Home{% endtrans %}</a></li>
                    <li>{% trans %}Contact{% endtrans %}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"row d-flex justify-content-center mb-5\">
                <div class=\"col\">
                    {% for msg in app.session.flashBag.get('successContact') %}
                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        {{ msg }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                    {% endfor %}


                    <div class=\"card px-3 pt-3 pb-2 mb-4\">
                        <p class=\"lead\">
                            <img src=\"{{ asset('img/contact.png') }}\" alt=\"Contact\" class=\"img-fluid float-start me-5\">
                            <span class=\"fs-1 fw-bold\">{% trans %}Contact-us by mail{% endtrans %}</span>
                            <br><br>
                            {% trans %}Hello there,{% endtrans %}
                            <br>
                            {% trans %}Please use the form below to contact us.{% endtrans %} 
                            {% trans %}We'll answer you as soon as possible.{% endtrans %}
                            <span class=\"small fst-italic d-flex justify-content-end mt-3\">{{ site_name_full }}</span>
                        </p>
                    </div>

                    {{ form_start(our_form) }}
                        <div class=\"row\">
                            <div class=\"col\">
                                {% trans %}Name{% endtrans %}:<br>
                                {{ form_row(our_form.name, {'label': false}) }}
                            </div>
                            <div class=\"col\">
                                {% trans %}Email{% endtrans %}:<br>
                                {{ form_row(our_form.email, {'label': false}) }}
                            </div>
                        </div>
                        {% trans %}Your message{% endtrans %}:<br>
                        {{ form_row(our_form.message, {'label': false}) }}
                        {% trans %}Please copy antispam code{% endtrans %}: 
                        {{ form_row(our_form.captcha, {'label': false}) }}
                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary mr-3 mb-4\">{% trans %}Send message{% endtrans %}</button>
                            <button type=\"reset\" class=\"btn btn-secondary mb-4\">{% trans %}Reset{% endtrans %}</button>
                        </div>
                    {{ form_end(our_form) }}

                </div>
                {% block sidebar %}
                    {{ sidebar() }}
                {% endblock %}
            </div>
        </div>
    </section>
</main>

{% endblock %}", "contact/index.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\contact\\index.html.twig");
    }
}
