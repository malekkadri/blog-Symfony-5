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

/* article/index.html.twig */
class __TwigTemplate_edac7e68de406e4f4eb82a3c7f5dacc7 extends Template
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
        return "base-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base-admin.html.twig", "article/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo ": articles index";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>Blog</h2>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article index", [], "messages");
        echo "</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "message"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "message_deleted"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            echo "            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                ";
            // line 38
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
            <div class=\"row d-flex justify-content-center mb-5\">
                <div class=\"col\">
                    <h2>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Article index", [], "messages");
        echo "</h2>

                    <div class=\"table-responsive-sm\">
                    <table class=\"table table-sm table-hover\">
                        <thead>
                            <tr>
                                <th width=\"4%\">";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["articles"] ?? null), "Id", "p.id");
        echo "</th>
                                <th>";
        // line 52
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["articles"] ?? null), "Title", "p.title");
        echo "</th>
                                <th width=\"14%\" class=\"small\">";
        // line 53
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["articles"] ?? null), "Posted on", "p.created_at");
        echo "</th>
                                <th width=\"14%\" class=\"small\">";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["articles"] ?? null), "Updated on", "p.updated_at");
        echo "</th>
                                <th width=\"5%\" class=\"small\">";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["articles"] ?? null), "Active", "p.is_active");
        echo "</th>
                                <th width=\"5%\" class=\"small\">";
        // line 56
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["articles"] ?? null), "Views", "p.views");
        echo "</th>
                                <th width=\"12%\"></th>
                                <th width=\"5%\"></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 63
            echo "                            <tr>
                                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                <td class=\"small\">";
            // line 66
            ((twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 66)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 66), "medium", "short"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td class=\"small\">";
            // line 67
            ((twig_get_attribute($this->env, $this->source, $context["article"], "updatedAt", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "updatedAt", [], "any", false, false, false, 67), "medium", "short"), "html", null, true))) : (print ("")));
            echo "</td>
                                <td class=\"small\">";
            // line 68
            echo ((twig_get_attribute($this->env, $this->source, $context["article"], "isActive", [], "any", false, false, false, 68)) ? ("Yes") : ("No"));
            echo "</td>
                                <td class=\"small\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "views", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                                <td>
                                    
                                    <a class=\"btn btn-sm btn-warning\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", [], "messages");
            echo "</a>
                                </td>
                                <td>
                                    ";
            // line 75
            echo twig_include($this->env, $context, "article/_delete_form.html.twig");
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
            // line 79
            echo "                            <tr>
                                <td colspan=\"9\">";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no records found", [], "messages");
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                        </tbody>
                    </table>
                    </div>

                    <a class=\"btn btn-success\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create new", [], "messages");
        echo "</a>
                </div>
            </div>
            <div class=\"pagination justify-content-center px-2 mt-4\">
                ";
        // line 91
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["articles"] ?? null));
        echo "
            </div>
        </div>
    </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 91,  265 => 87,  259 => 83,  250 => 80,  247 => 79,  230 => 75,  222 => 72,  216 => 69,  212 => 68,  208 => 67,  204 => 66,  200 => 65,  196 => 64,  193 => 63,  175 => 62,  166 => 56,  162 => 55,  158 => 54,  154 => 53,  150 => 52,  146 => 51,  137 => 45,  132 => 42,  122 => 38,  119 => 37,  115 => 36,  112 => 35,  102 => 31,  99 => 30,  95 => 29,  81 => 18,  77 => 17,  71 => 16,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "article/index.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\article\\index.html.twig");
    }
}
