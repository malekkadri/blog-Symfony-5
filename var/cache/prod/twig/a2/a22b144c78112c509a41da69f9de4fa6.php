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
class __TwigTemplate_c691c90f24a6f357d399542724348b8d extends Template
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
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xhtml=\"http://www.w3.org/1999/xhtml\" xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["urls"] ?? null));
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
                echo twig_escape_filter($this->env, ($context["hostname"] ?? null), "html", null, true);
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
                    echo twig_escape_filter($this->env, ($context["hostname"] ?? null), "html", null, true);
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
        return array (  136 => 40,  129 => 38,  123 => 35,  114 => 34,  111 => 33,  108 => 32,  105 => 30,  99 => 28,  96 => 27,  93 => 25,  87 => 23,  84 => 22,  81 => 20,  75 => 18,  72 => 17,  68 => 14,  62 => 12,  55 => 10,  53 => 9,  50 => 8,  48 => 7,  45 => 5,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sitemap/index.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\sitemap\\index.html.twig");
    }
}
