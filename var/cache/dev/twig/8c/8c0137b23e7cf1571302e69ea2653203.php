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

/* home/sidebar.html.twig */
class __TwigTemplate_267b5d147478bff2a39c3d7b2d601a84 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/sidebar.html.twig"));

        // line 1
        echo "<div class=\"col-lg-4\">

    <div class=\"sidebar\">

        <h3 class=\"sidebar-title\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item search-form\">

            ";
        // line 14
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SearchController::searchBar"));
        // line 17
        echo "

            
        </div><!-- End sidebar search formn-->

        <h3 class=\"sidebar-title\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item categories\">
            <ul>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesAll"]) || array_key_exists("categoriesAll", $context) ? $context["categoriesAll"] : (function () { throw new RuntimeError('Variable "categoriesAll" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 26
            echo "                <li class=\"d-flex justify-content-between align-items-center pb-1\">
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">
                        <i class=\"bi bi-arrow-right-short\"></i> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "
                    </a> 
                    <span class=\"badge bg-primary\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 30)), "html", null, true);
            echo "</span>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </ul>
        </div><!-- End sidebar categories-->

        <h3 class=\"sidebar-title\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Popular Posts", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item recent-posts\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 39
            echo "            <div class=\"post-item clearfix\">
                <img src=\"../uploads/images/articles/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 40), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "\" class=\"img-fluid\" style=\"max-width: 85px; width: 100%;\">
                <h4><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</a> <span class=\"small badge bg-primary rounded-pill\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "views", [], "any", false, false, false, 41), "html", null, true);
            echo "</span></h4>
                <time datetime=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "created_at", [], "any", false, false, false, 42), "medium", "short"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted on", [], "messages");
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "created_at", [], "any", false, false, false, 42), "medium", "short"), "html", null, true);
            echo "</time>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>

        <h3 class=\"sidebar-title\">";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item tags mb-4\">
            <ul>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 51
            echo "                <li>
                    <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["t"], "slug", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 52), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </ul>
        </div><!-- End sidebar tags-->

        <h3 class=\"sidebar-title\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Links", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item mb-4\">
            <ul class=\"list-group list-group-flush text-meta2\">
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["linksAll"]) || array_key_exists("linksAll", $context) ? $context["linksAll"] : (function () { throw new RuntimeError('Variable "linksAll" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 62
            echo "                <li class=\"list-group-item\">
                    <i class=\"bi bi-link-45deg\"></i> <a target=\"_blank\" href=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "url", [], "any", false, false, false, 63), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "title", [], "any", false, false, false, 63), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </ul>
        </div><!-- End sidebar links-->

        <h3 class=\"sidebar-title\">";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stats", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item tags\">
            <ul class=\"list-group list-group-flush text-meta2\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posts", [], "messages");
        // line 73
        echo "                    <span class=\"badge bg-success rounded py-1 px-2 ml-5\">
                        ";
        // line 74
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["articlesAll"]) || array_key_exists("articlesAll", $context) ? $context["articlesAll"] : (function () { throw new RuntimeError('Variable "articlesAll" does not exist.', 74, $this->source); })())), "html", null, true);
        echo "
                    </span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comments", [], "messages");
        // line 78
        echo "                    <span class=\"badge bg-success rounded py-1 px-2 ml-5\">
                        ";
        // line 79
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["commentsAll"]) || array_key_exists("commentsAll", $context) ? $context["commentsAll"] : (function () { throw new RuntimeError('Variable "commentsAll" does not exist.', 79, $this->source); })())), "html", null, true);
        echo "
                    </span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Views", [], "messages");
        // line 83
        echo "                    <span class=\"badge bg-success rounded py-1 px-2 ml-5\">
                        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["views"]) || array_key_exists("views", $context) ? $context["views"] : (function () { throw new RuntimeError('Variable "views" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
            // line 85
            echo "                            ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "totalViews", [], "any", false, false, false, 85), 0, "", " "), "html", null, true);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                    </span>
                </li>
        </ul>
        </div><!-- End sidebar stats-->


    </div><!-- End sidebar -->

</div><!-- End blog sidebar -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 87,  241 => 85,  237 => 84,  234 => 83,  232 => 82,  226 => 79,  223 => 78,  221 => 77,  215 => 74,  212 => 73,  210 => 72,  204 => 69,  199 => 66,  188 => 63,  185 => 62,  181 => 61,  175 => 58,  170 => 55,  159 => 52,  156 => 51,  152 => 50,  146 => 47,  142 => 45,  129 => 42,  121 => 41,  115 => 40,  112 => 39,  108 => 38,  103 => 36,  98 => 33,  89 => 30,  84 => 28,  80 => 27,  77 => 26,  73 => 25,  67 => 22,  60 => 17,  58 => 15,  55 => 14,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-4\">

    <div class=\"sidebar\">

        <h3 class=\"sidebar-title\">{% trans %}Search{% endtrans %}</h3>
        <div class=\"sidebar-item search-form\">

            {#
            <form action=\"{{ path('search') }}\">
                <input type=\"text\">
                <button type=\"submit\"><i class=\"bi bi-search\"></i></button>
            </form>
            #}

            {{ render(controller(
                'App\\\\Controller\\\\SearchController::searchBar'
            )) }}

            
        </div><!-- End sidebar search formn-->

        <h3 class=\"sidebar-title\">{% trans %}Categories{% endtrans %}</h3>
        <div class=\"sidebar-item categories\">
            <ul>
                {% for cat in categoriesAll %}
                <li class=\"d-flex justify-content-between align-items-center pb-1\">
                    <a href=\"{{ path('category_show', {'slug': cat.slug}) }}\">
                        <i class=\"bi bi-arrow-right-short\"></i> {{ cat.title }}
                    </a> 
                    <span class=\"badge bg-primary\">{{ cat.articles|length }}</span>
                </li>
                {% endfor %}
            </ul>
        </div><!-- End sidebar categories-->

        <h3 class=\"sidebar-title\">{% trans %}Popular Posts{% endtrans %}</h3>
        <div class=\"sidebar-item recent-posts\">
            {% for a in articles %}
            <div class=\"post-item clearfix\">
                <img src=\"../uploads/images/articles/{{ a.image }}\" alt=\"{{ a.title }}\" class=\"img-fluid\" style=\"max-width: 85px; width: 100%;\">
                <h4><a href=\"{{ path('article_show', {'slug': a.slug}) }}\">{{ a.title }}</a> <span class=\"small badge bg-primary rounded-pill\">{{ a.views }}</span></h4>
                <time datetime=\"{{ a.created_at|format_datetime('medium', 'short') }}\">{% trans %}Posted on{% endtrans %} {{ a.created_at|format_datetime('medium', 'short') }}</time>
            </div>
            {% endfor %}
        </div>

        <h3 class=\"sidebar-title\">{% trans %}Tags{% endtrans %}</h3>
        <div class=\"sidebar-item tags mb-4\">
            <ul>
                {% for t in tags %}
                <li>
                    <a href=\"{{ path('tag_show', {'slug': t.slug}) }}\">{{ t.title }}</a>
                </li>
                {% endfor %}
            </ul>
        </div><!-- End sidebar tags-->

        <h3 class=\"sidebar-title\">{% trans %}Links{% endtrans %}</h3>
        <div class=\"sidebar-item mb-4\">
            <ul class=\"list-group list-group-flush text-meta2\">
                {% for l in linksAll %}
                <li class=\"list-group-item\">
                    <i class=\"bi bi-link-45deg\"></i> <a target=\"_blank\" href=\"{{ l.url }}\">{{ l.title }}</a>
                </li>
                {% endfor %}
            </ul>
        </div><!-- End sidebar links-->

        <h3 class=\"sidebar-title\">{% trans %}Stats{% endtrans %}</h3>
        <div class=\"sidebar-item tags\">
            <ul class=\"list-group list-group-flush text-meta2\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">{% trans %}Posts{% endtrans %}
                    <span class=\"badge bg-success rounded py-1 px-2 ml-5\">
                        {{ articlesAll | length }}
                    </span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">{% trans %}Comments{% endtrans %}
                    <span class=\"badge bg-success rounded py-1 px-2 ml-5\">
                        {{ commentsAll | length }}
                    </span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">{% trans %}Views{% endtrans %}
                    <span class=\"badge bg-success rounded py-1 px-2 ml-5\">
                        {% for view in views %}
                            {{ view.totalViews | number_format(0, '', ' ') }}
                        {% endfor %}
                    </span>
                </li>
        </ul>
        </div><!-- End sidebar stats-->


    </div><!-- End sidebar -->

</div><!-- End blog sidebar -->", "home/sidebar.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\home\\sidebar.html.twig");
    }
}
