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
class __TwigTemplate_5dc070736cdfb6ef8d5ddc31795560d7 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("welcome!", [], "messages");
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
        echo twig_escape_filter($this->env, ($context["site_name_full"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 32), "flashBag", [], "any", false, false, false, 32), "get", [0 => "successEmail"], "method", false, false, false, 32));
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
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 40
            echo " 

<div class=\"card\" style=\"width: 18rem;\">
 <img src=\"../uploads/images/articles/";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "image", [], "any", false, false, false, 43), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "title", [], "any", false, false, false, 43), "html", null, true);
            echo "\" class=\"img-fluid\" height=\"400\" width=\"500\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["art"], "category", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 46
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">
                                        <span class=\"badge bg-secondary fs-6\">";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 47), "html", null, true);
                echo "</span>
                                    </a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "</h5>
     <h5 class=\"card-title\">";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["art"], "tag", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 51
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["t"], "slug", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\">
                                        <button class=\"btn btn-sm border border-secondary rounded-pill px-2 py-0\" style=\"font-size: 11px;\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 52), "html", null, true);
                echo "</button>
                                    </a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "</h5>
                                <h2 class=\"entry-title\">
                                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["art"], "slug", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "title", [], "any", false, false, false, 56), "html", null, true);
            echo "</a>
                            </h2>
       <div class=\"entry-meta\">
                                <ul>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-person\"></i> <a href=\"\">";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted by", [], "messages");
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "author", [], "any", false, false, false, 60), "html", null, true);
            echo "</a></li>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-clock\"></i> <a href=\"\">";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted", [], "messages");
            echo " ";
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["art"], "createdAt", [], "any", false, false, false, 61));
            echo "</a></li>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-chat-dots\"></i> 
                                        ";
            // line 63
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "comment", [], "any", false, false, false, 63)) <= 1)) {
                // line 64
                echo "                                            <a href=\"\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "comment", [], "any", false, false, false, 64)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment", [], "messages");
                echo "</a>
                                        ";
            } else {
                // line 66
                echo "                                            <a href=\"\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "comment", [], "any", false, false, false, 66)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comments", [], "messages");
                echo "</a>
                                        ";
            }
            // line 68
            echo "                                    </li>
                                    <li class=\"d-flex align-items-center\"><i class=\"bi bi-eye\"></i> <a href=\"\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "views", [], "any", false, false, false, 69), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("views", [], "messages");
            echo "</a></li>
                                </ul>
                            </div>
    <p class=\"card-text\">";
            // line 72
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "content", [], "any", false, false, false, 72), 0, 250);
            echo "...</p>
    <a href=\"\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["art"], "slug", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\"\" class=\"btn btn-primary\">Read more</a>
  <br>
  <br>
  </div>
</div>


                        ";
            // line 131
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
                    <div class=\"pagination justify-content-center px-2 mt-4\">
                        ";
        // line 135
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["articles"] ?? null));
        echo "
                    </div>

                </div><!-- End blog entries list -->

                ";
        // line 140
        $this->displayBlock('sidebar', $context, $blocks);
        // line 143
        echo "
            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->

";
    }

    // line 140
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                    ";
        echo $this->extensions['App\twig\sidebarExtension']->getSidebar();
        echo "
                ";
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
        return array (  276 => 141,  272 => 140,  260 => 143,  258 => 140,  250 => 135,  246 => 133,  239 => 131,  229 => 73,  225 => 72,  217 => 69,  214 => 68,  206 => 66,  198 => 64,  196 => 63,  189 => 61,  183 => 60,  174 => 56,  170 => 54,  161 => 52,  156 => 51,  152 => 50,  149 => 49,  140 => 47,  135 => 46,  131 => 45,  124 => 43,  119 => 40,  115 => 39,  112 => 38,  102 => 34,  99 => 33,  95 => 32,  77 => 17,  71 => 14,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\home\\index.html.twig");
    }
}
