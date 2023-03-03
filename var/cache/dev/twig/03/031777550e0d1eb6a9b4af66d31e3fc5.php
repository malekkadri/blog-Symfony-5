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

/* home/index.html.twig */
class __TwigTemplate_11ec994768a2d017965f6d749c28aeb5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("welcome!", [], "messages");
        
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
        echo twig_escape_filter($this->env, (isset($context["site_name_full"]) || array_key_exists("site_name_full", $context) ? $context["site_name_full"] : (function () { throw new RuntimeError('Variable "site_name_full" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</h2>

                <ol>
                    <li>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"row\">

                <div class=\"col-lg-8 entries\">

                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "session", [], "any", false, false, false, 32), "flashBag", [], "any", false, false, false, 32), "get", [0 => "successEmail"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 33
            echo "                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["msg"]), "html", null, true);
            echo "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 40
            echo "
                        <article class=\"entry\">

                            <div class=\"entry-img\">
                                <img src=\"../uploads/images/articles/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "image", [], "any", false, false, false, 44), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "title", [], "any", false, false, false, 44), "html", null, true);
            echo "\" class=\"img-fluid\">
                            </div>

                            <div class=\"mb-2\">
                                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["art"], "category", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 49
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">
                                        <span class=\"badge bg-secondary fs-6\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 50), "html", null, true);
                echo "</span>
                                    </a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                            </div>

                            <div class=\"mb-3\">
                                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["art"], "tag", [], "any", false, false, false, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 57
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["t"], "slug", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">
                                        <button class=\"btn btn-sm border border-secondary rounded-pill px-2 py-0\" style=\"font-size: 11px;\">";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 58), "html", null, true);
                echo "</button>
                                    </a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                            </div>

                            <h2 class=\"entry-title\">
                                <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["art"], "slug", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "title", [], "any", false, false, false, 64), "html", null, true);
            echo "</a>
                            </h2>

                            <div class=\"entry-meta\">
                                <ul>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-person\"></i> <a href=\"\">";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted by", [], "messages");
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "author", [], "any", false, false, false, 69), "html", null, true);
            echo "</a></li>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-clock\"></i> <a href=\"\">";
            // line 70
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted", [], "messages");
            echo " ";
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["art"], "createdAt", [], "any", false, false, false, 70));
            echo "</a></li>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-chat-dots\"></i> 
                                        ";
            // line 72
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "comment", [], "any", false, false, false, 72)) <= 1)) {
                // line 73
                echo "                                            <a href=\"\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "comment", [], "any", false, false, false, 73)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment", [], "messages");
                echo "</a>
                                        ";
            } else {
                // line 75
                echo "                                            <a href=\"\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "comment", [], "any", false, false, false, 75)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comments", [], "messages");
                echo "</a>
                                        ";
            }
            // line 77
            echo "                                    </li>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-eye\"></i> <a href=\"\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "views", [], "any", false, false, false, 78), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("views", [], "messages");
            echo "</a></li>
                                </ul>
                            </div>

                            <div class=\"entry-content\">
                                <p>
                                    ";
            // line 84
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "content", [], "any", false, false, false, 84), 0, 250);
            echo "...
                                </p>
                                <div class=\"read-more\">
                                    <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["art"], "slug", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read More", [], "messages");
            echo "</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
                    <div class=\"pagination justify-content-center px-2 mt-4\">
                        ";
        // line 96
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 96, $this->source); })()));
        echo "
                    </div>

                </div><!-- End blog entries list -->

                ";
        // line 101
        $this->displayBlock('sidebar', $context, $blocks);
        // line 104
        echo "
            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 102
        echo "                    ";
        echo $this->extensions['App\twig\sidebarExtension']->getSidebar();
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 102,  318 => 101,  300 => 104,  298 => 101,  290 => 96,  286 => 94,  271 => 87,  265 => 84,  254 => 78,  251 => 77,  243 => 75,  235 => 73,  233 => 72,  226 => 70,  220 => 69,  210 => 64,  205 => 61,  196 => 58,  191 => 57,  187 => 56,  182 => 53,  173 => 50,  168 => 49,  164 => 48,  155 => 44,  149 => 40,  145 => 39,  142 => 38,  132 => 34,  129 => 33,  125 => 32,  107 => 17,  101 => 14,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ site_name }}: {% trans %}welcome!{% endtrans %}{% endblock %}

{% block body %}

<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>{{ site_name_full }}</h2>

                <ol>
                    <li>{% trans %}Home{% endtrans %}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"row\">

                <div class=\"col-lg-8 entries\">

                    {% for msg in app.session.flashBag.get('successEmail') %}
                        <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                            {{ msg|trans }}
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    {% endfor %}

                    {% for art in articles %}

                        <article class=\"entry\">

                            <div class=\"entry-img\">
                                <img src=\"../uploads/images/articles/{{ art.image }}\" alt=\"{{ art.title }}\" class=\"img-fluid\">
                            </div>

                            <div class=\"mb-2\">
                                {% for c in art.category %}
                                    <a href=\"{{ path('category_show', {'slug': c.slug}) }}\">
                                        <span class=\"badge bg-secondary fs-6\">{{ c.title }}</span>
                                    </a>
                                {% endfor %}
                            </div>

                            <div class=\"mb-3\">
                                {% for t in art.tag %}
                                    <a href=\"{{ path('tag_show', {'slug': t.slug}) }}\">
                                        <button class=\"btn btn-sm border border-secondary rounded-pill px-2 py-0\" style=\"font-size: 11px;\">{{ t.title }}</button>
                                    </a>
                                {% endfor %}
                            </div>

                            <h2 class=\"entry-title\">
                                <a href=\"{{ path('article_show', {'slug': art.slug}) }}\">{{ art.title }}</a>
                            </h2>

                            <div class=\"entry-meta\">
                                <ul>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-person\"></i> <a href=\"\">{% trans %}Posted by{% endtrans %} {{ art.author }}</a></li>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-clock\"></i> <a href=\"\">{% trans %}Posted {% endtrans %} {{ art.createdAt|ago }}</a></li>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-chat-dots\"></i> 
                                        {% if (art.comment|length) <= 1  %}
                                            <a href=\"\">{{ art.comment|length }} {% trans %}Comment{% endtrans %}</a>
                                        {% else %}
                                            <a href=\"\">{{ art.comment|length }} {% trans %}Comments{% endtrans %}</a>
                                        {% endif %}
                                    </li>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-eye\"></i> <a href=\"\">{{ art.views }} {% trans %}views{% endtrans %}</a></li>
                                </ul>
                            </div>

                            <div class=\"entry-content\">
                                <p>
                                    {{ art.content|slice(0,250)|raw }}...
                                </p>
                                <div class=\"read-more\">
                                    <a href=\"{{ path('article_show', {'slug': art.slug}) }}\">{% trans %}Read More{% endtrans %}</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                    {% endfor %}

                    <div class=\"pagination justify-content-center px-2 mt-4\">
                        {{ knp_pagination_render(articles) }}
                    </div>

                </div><!-- End blog entries list -->

                {% block sidebar %}
                    {{ sidebar() }}
                {% endblock %}

            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->

{% endblock %}", "home/index.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\home\\index.html.twig");
    }
}
