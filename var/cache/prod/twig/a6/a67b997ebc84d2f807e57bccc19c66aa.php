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

/* search/index.html.twig */
class __TwigTemplate_b973a654cc0aaa8b0971541ebc2d7798 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your search results", [], "messages");
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", [], "messages");
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 31), "method", [], "any", false, false, false, 31) == "POST")) {
            // line 32
            echo "                    <div>
                        ";
            // line 33
            if ((twig_length_filter($this->env, ($context["articles"] ?? null)) == 0)) {
                // line 34
                echo "                            <h4>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No result.", [], "messages");
                echo "</h4>
                        ";
            } else {
                // line 36
                echo "                            <h3 class=\"mt-3\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your search results:", [], "messages");
                echo "</h3>
                            ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 38
                    echo "                                <div class=\"mt-3 p-3 bg-light border rounded\">
                                    <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 39)]), "html", null, true);
                    echo "\">
                                        <h6 class=\"text-dark\"><i class=\"bi bi-arrow-down-right-square-fill text-primary\"></i> ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 40), "html", null, true);
                    echo "</h6>
                                        <div class=\"text-dark small p-1 rounded\">
                                            ";
                    // line 42
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted on", [], "messages");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 42), "medium", "short"), "html", null, true);
                    echo " 
                                            ";
                    // line 43
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("by", [], "messages");
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 43), "html", null, true);
                    echo "
                                        </div>
                                    </a>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                        ";
            }
            // line 49
            echo "                    </div>
                    ";
        }
        // line 51
        echo "
                </div>

                ";
        // line 54
        $this->displayBlock('sidebar', $context, $blocks);
        // line 57
        echo "
            </div>
        </div>
    </section>
</main>

";
    }

    // line 54
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                    ";
        echo $this->extensions['App\twig\sidebarExtension']->getSidebar();
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 55,  176 => 54,  166 => 57,  164 => 54,  159 => 51,  155 => 49,  152 => 48,  139 => 43,  133 => 42,  128 => 40,  124 => 39,  121 => 38,  117 => 37,  112 => 36,  106 => 34,  104 => 33,  101 => 32,  99 => 31,  83 => 18,  77 => 17,  71 => 14,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search/index.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\search\\index.html.twig");
    }
}
