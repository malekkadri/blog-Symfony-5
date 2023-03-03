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
class __TwigTemplate_431c19b08a958d0c94d2db1136e75448 extends Template
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
        echo "
<div class=\"col-lg-4\">

    <div class=\"sidebar\">

        <h3 class=\"sidebar-title\">";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item search-form\">

            ";
        // line 15
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SearchController::searchBar"));
        // line 18
        echo "

            
        </div><!-- End sidebar search formn-->

        <h3 class=\"sidebar-title\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item categories\">
            <ul>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categoriesAll"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 27
            echo "                <li class=\"d-flex justify-content-between align-items-center pb-1\">
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">
                        <i class=\"bi bi-arrow-right-short\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "
                    </a> 
                    <span class=\"badge bg-primary\">";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "articles", [], "any", false, false, false, 31)), "html", null, true);
            echo "</span>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </ul>
        </div><!-- End sidebar categories-->

        <h3 class=\"sidebar-title\">";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Popular Posts", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item recent-posts\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 40
            echo "            <div class=\"post-item clearfix\">
                <img src=\"../uploads/images/articles/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"img-fluid\" style=\"max-width: 85px; width: 100%;\">
                <h4><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["a"], "slug", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 42), "html", null, true);
            echo "</a> <span class=\"badge bg-primary\">views: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "views", [], "any", false, false, false, 42), "html", null, true);
            echo "</span></h4>
                <time datetime=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "created_at", [], "any", false, false, false, 43), "medium", "short"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted on", [], "messages");
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "created_at", [], "any", false, false, false, 43), "medium", "short"), "html", null, true);
            echo "</time>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </div>

        <h3 class=\"sidebar-title\">";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tags", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item tags mb-4\">
            <ul>
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 52
            echo "                <li>
                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["t"], "slug", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </ul>
        </div><!-- End sidebar tags-->

        <h3 class=\"sidebar-title\">";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Links", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item mb-4\">
            <ul class=\"list-group list-group-flush text-meta2\">
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["linksAll"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 63
            echo "                <li class=\"list-group-item\">
                    <i class=\"bi bi-link-45deg\"></i> <a target=\"_blank\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "url", [], "any", false, false, false, 64), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "title", [], "any", false, false, false, 64), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </ul>
        </div><!-- End sidebar links-->

        <h3 class=\"sidebar-title\">";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stats", [], "messages");
        echo "</h3>
        <div class=\"sidebar-item tags\">
            <ul class=\"list-group list-group-flush text-meta2\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posts", [], "messages");
        // line 74
        echo "                    <span class=\"badge bg-success rounded py-1 px-2 ml-5\">
                        ";
        // line 75
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["articlesAll"] ?? null)), "html", null, true);
        echo "
                    </span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comments", [], "messages");
        // line 79
        echo "                    <span class=\"badge bg-success rounded py-1 px-2 ml-5\">
                        ";
        // line 80
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["commentsAll"] ?? null)), "html", null, true);
        echo "
                    </span>
                </li>
                <li class=\"list-group-item d-flex justify-content-between align-items-center\">";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Views", [], "messages");
        // line 84
        echo "                    <span class=\"badge bg-success rounded py-1 px-2 ml-5\">
                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["views"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["view"]) {
            // line 86
            echo "                            ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "totalViews", [], "any", false, false, false, 86), 0, "", " "), "html", null, true);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                    </span>
                </li>
        </ul>
        </div><!-- End sidebar stats-->


    </div><!-- End sidebar -->

</div><!-- End blog sidebar -->";
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
        return array (  245 => 88,  236 => 86,  232 => 85,  229 => 84,  227 => 83,  221 => 80,  218 => 79,  216 => 78,  210 => 75,  207 => 74,  205 => 73,  199 => 70,  194 => 67,  183 => 64,  180 => 63,  176 => 62,  170 => 59,  165 => 56,  154 => 53,  151 => 52,  147 => 51,  141 => 48,  137 => 46,  124 => 43,  116 => 42,  110 => 41,  107 => 40,  103 => 39,  98 => 37,  93 => 34,  84 => 31,  79 => 29,  75 => 28,  72 => 27,  68 => 26,  62 => 23,  55 => 18,  53 => 16,  50 => 15,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/sidebar.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\home\\sidebar.html.twig");
    }
}
