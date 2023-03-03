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

/* tag/index.admin.html.twig */
class __TwigTemplate_f622c18507ec9c0fa894b8ca8880a7e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/index.admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/index.admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tag/index.admin.html.twig", 1);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tag index", [], "messages");
        
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
                <h2>Tag</h2>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tag index", [], "messages");
        echo "</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

   <!-- ======= Blog Section ======= -->
   <section id=\"blog\" class=\"blog\">
    <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row py-5\">

            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            echo "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "flashes", [0 => "message_deleted"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            echo "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"\">
                    ";
            // line 40
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
            <div class=\"col mb-4\">
                <h1>";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tag index", [], "messages");
        echo "</h1>

                <table class=\"table mb-5\">
                    <thead>
                        <tr>
                            <th width=\"4%\">";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 51, $this->source); })()), "Id", "p.id");
        echo "</th>
                            <th>";
        // line 52
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 52, $this->source); })()), "Title", "p.title");
        echo "</th>
                            <th>Slug</th>
                            <th width=\"11%\"></th>
                            <th width=\"4%\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 60
            echo "                        <tr>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "title", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-sm btn-info\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show", [], "messages");
            echo "</a>
                                <a class=\"btn btn-sm btn-warning\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", [], "messages");
            echo "</a>
                            </td>
                            <td>
                                ";
            // line 69
            echo twig_include($this->env, $context, "tag/_delete_form.html.twig");
            echo "
                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 73
            echo "                        <tr>
                            <td colspan=\"4\">";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no records found", [], "messages");
            echo "</td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </tbody>
                </table>

                <a class=\"btn btn-success\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_new");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create new ta", [], "messages");
        echo "</a>

            </div>
            <div class=\"pagination justify-content-center px-2 mt-4\">
                ";
        // line 84
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 84, $this->source); })()));
        echo "
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
        return "tag/index.admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 84,  273 => 80,  268 => 77,  259 => 74,  256 => 73,  239 => 69,  231 => 66,  225 => 65,  220 => 63,  216 => 62,  212 => 61,  209 => 60,  191 => 59,  181 => 52,  177 => 51,  169 => 46,  165 => 44,  155 => 40,  152 => 39,  148 => 38,  145 => 37,  135 => 33,  132 => 32,  128 => 31,  112 => 18,  108 => 17,  102 => 16,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ site_name }}: {% trans %}tag index{% endtrans %}{% endblock %}

{% block body %}
<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>Tag</h2>

                <ol>
                    <li><a href=\"{{ path('home') }}\">{% trans %}Home{% endtrans %}</a></li>
                    <li><a href=\"{{ path('admin') }}\">Admin</a></li>
                    <li>{% trans %}Tag index{% endtrans %}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

   <!-- ======= Blog Section ======= -->
   <section id=\"blog\" class=\"blog\">
    <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row py-5\">

            {% for message in app.flashes('message') %}
                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}

            {% for message in app.flashes('message_deleted') %}
                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\"\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}

            <div class=\"col mb-4\">
                <h1>{% trans %}Tag index{% endtrans %}</h1>

                <table class=\"table mb-5\">
                    <thead>
                        <tr>
                            <th width=\"4%\">{{ knp_pagination_sortable(tags, 'Id', 'p.id') }}</th>
                            <th>{{ knp_pagination_sortable(tags, 'Title', 'p.title') }}</th>
                            <th>Slug</th>
                            <th width=\"11%\"></th>
                            <th width=\"4%\"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for tag in tags %}
                        <tr>
                            <td>{{ tag.id }}</td>
                            <td>{{ tag.title }}</td>
                            <td>{{ tag.slug }}</td>
                            <td>
                                <a class=\"btn btn-sm btn-info\" href=\"{{ path('tag_show', {'slug': tag.slug}) }}\">{% trans %}show{% endtrans %}</a>
                                <a class=\"btn btn-sm btn-warning\" href=\"{{ path('tag_edit', {'id': tag.id}) }}\">{% trans %}edit{% endtrans %}</a>
                            </td>
                            <td>
                                {{ include('tag/_delete_form.html.twig') }}
                            </td>
                        </tr>
                        {% else %}
                        <tr>
                            <td colspan=\"4\">{% trans %}no records found{% endtrans %}</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>

                <a class=\"btn btn-success\" href=\"{{ path('tag_new') }}\">{% trans %}Create new ta{% endtrans %}</a>

            </div>
            <div class=\"pagination justify-content-center px-2 mt-4\">
                {{ knp_pagination_render(tags) }}
            </div>
        </div>
    </div>
</section>

</main>
{% endblock %}", "tag/index.admin.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\tag\\index.admin.html.twig");
    }
}
