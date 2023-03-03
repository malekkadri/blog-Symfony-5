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

/* sitemap/index.html.twig */
class __TwigTemplate_6bb6e806029b0eb1859271793c667c90 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap/index.html.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 5
            echo "    <url>
        ";
            // line 7
            echo "        ";
            // line 8
            echo "        <loc>
            ";
            // line 9
            if ((twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 9), ["hostname" => ""]) == twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 9))) {
                // line 10
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 10, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 10), "html", null, true);
                echo "
            ";
            } else {
                // line 12
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "loc", [], "any", false, false, false, 12), "html", null, true);
                echo "
            ";
            }
            // line 14
            echo "        </loc>

        ";
            // line 17
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["url"], "lastmod", [], "any", true, true, false, 17)) {
                // line 18
                echo "            <lastmod>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "lastmod", [], "any", false, false, false, 18), "html", null, true);
                echo "</lastmod>
        ";
            }
            // line 20
            echo "
        ";
            // line 22
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["url"], "changefreq", [], "any", true, true, false, 22)) {
                // line 23
                echo "            <changefreq>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "changefreq", [], "any", false, false, false, 23), "html", null, true);
                echo "</changefreq>
        ";
            }
            // line 25
            echo "
        ";
            // line 27
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["url"], "priority", [], "any", true, true, false, 27)) {
                // line 28
                echo "            <priority>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["url"], "priority", [], "any", false, false, false, 28), "html", null, true);
                echo "</priority>
        ";
            }
            // line 30
            echo "
        ";
            // line 32
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", true, true, false, 32) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 32)))) {
                // line 33
                echo "            <image:image>
                <image:loc>";
                // line 34
                if ((twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 34), "loc", [], "any", false, false, false, 34), ["hostname" => ""]) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 34), "loc", [], "any", false, false, false, 34))) {
                    echo twig_escape_filter($this->env, (isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 34, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 34), "loc", [], "any", false, false, false, 34), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 34), "loc", [], "any", false, false, false, 34), "html", null, true);
                }
                echo "</image:loc>
                <image:title>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["url"], "image", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35), "html", null, true);
                echo "</image:title>
            </image:image>
        ";
            }
            // line 38
            echo "    </url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</urlset>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "sitemap/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 40,  135 => 38,  129 => 35,  120 => 34,  117 => 33,  114 => 32,  111 => 30,  105 => 28,  102 => 27,  99 => 25,  93 => 23,  90 => 22,  87 => 20,  81 => 18,  78 => 17,  74 => 14,  68 => 12,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 5,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
{# On boucle sur les URLs #}
{% for url in urls %}
    <url>
        {# On vérifie si le nom d'hôte (hostname) est présent dans l'url #}
        {# Si il n'y est pas, on l'ajoute #}
        <loc>
            {%if url.loc|replace({hostname:''}) == url.loc%}
                {{hostname}}{{url.loc}}
            {%else%}
                {{url.loc}}
            {%endif%}
        </loc>

        {# Si il y a une date de modification #}
        {% if url.lastmod is defined %}
            <lastmod>{{url.lastmod}}</lastmod>
        {% endif %}

        {# Si il y a une fréquence de modification #}
        {% if url.changefreq is defined %}
            <changefreq>{{url.changefreq}}</changefreq>
        {% endif %}

        {# Si il y a une priorité #}
        {% if url.priority is defined %}
            <priority>{{url.priority}}</priority>
        {% endif %}

        {# Si il y a une image #}
        {% if url.image is defined and url.image is not empty %}
            <image:image>
                <image:loc>{%if url.image.loc|replace({hostname:''}) == url.image.loc%}{{hostname}}{{url.image.loc}}{%else%}{{url.image.loc}}{%endif%}</image:loc>
                <image:title>{{ url.image.title }}</image:title>
            </image:image>
        {% endif %}
    </url>
{% endfor %}
</urlset>", "sitemap/index.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\sitemap\\index.html.twig");
    }
}
