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

/* @KnpPaginator/Pagination/bulma_pagination.html.twig */
class __TwigTemplate_f18b7a0806c95f87021b1ecb22cbb198 extends Template
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
        // line 2
        echo "
";
        // line 3
        $context["position"] = ((array_key_exists("position", $context)) ? (_twig_default_filter(($context["position"] ?? null), "left")) : ("left"));
        // line 4
        $context["rounded"] = ((array_key_exists("rounded", $context)) ? (_twig_default_filter(($context["rounded"] ?? null), false)) : (false));
        // line 5
        $context["size"] = ((array_key_exists("size", $context)) ? (_twig_default_filter(($context["size"] ?? null), null)) : (null));
        // line 6
        echo "
";
        // line 7
        $context["classes"] = [0 => "pagination"];
        // line 8
        echo "
";
        // line 9
        if ((($context["position"] ?? null) != "left")) {
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => ("is-" . ($context["position"] ?? null))]);
        }
        // line 10
        if (($context["rounded"] ?? null)) {
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "is-rounded"]);
        }
        // line 11
        if ((($context["size"] ?? null) != null)) {
            $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => ("is-" . ($context["size"] ?? null))]);
        }
        // line 12
        echo "
";
        // line 13
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 14
            echo "    <nav class=\"";
            echo twig_escape_filter($this->env, twig_join_filter(($context["classes"] ?? null), " "), "html", null, true);
            echo "\" role=\"navigation\" aria-label=\"pagination\">
        ";
            // line 15
            if (array_key_exists("previous", $context)) {
                // line 16
                echo "            <a rel=\"prev\" class=\"pagination-previous\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 18
                echo "            <a class=\"pagination-previous\" disabled>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            }
            // line 20
            echo "
        ";
            // line 21
            if (array_key_exists("next", $context)) {
                // line 22
                echo "            <a rel=\"next\" class=\"pagination-next\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 24
                echo "            <a class=\"pagination-next\" disabled>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        ";
            }
            // line 26
            echo "
        <ul class=\"pagination-list\">
            <li>
                ";
            // line 29
            if ((($context["current"] ?? null) == ($context["first"] ?? null))) {
                // line 30
                echo "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                echo twig_escape_filter($this->env, ($context["current"] ?? null), "html", null, true);
                echo "\" aria-current=\"page\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">1</a>
                ";
            } else {
                // line 32
                echo "                    <a class=\"pagination-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["first"] ?? null)])), "html", null, true);
                echo "\">1</a>
                ";
            }
            // line 34
            echo "            </li>

            ";
            // line 36
            if ((((($__internal_compile_0 = ($context["pagesInRange"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) - ($context["first"] ?? null)) >= 2)) {
                // line 37
                echo "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 41
            echo "
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                echo "                ";
                if (((($context["first"] ?? null) != $context["page"]) && ($context["page"] != ($context["last"] ?? null)))) {
                    // line 44
                    echo "                    <li>
                        ";
                    // line 45
                    if (($context["page"] == ($context["current"] ?? null))) {
                        // line 46
                        echo "                            <a class=\"pagination-link is-current\" aria-label=\"Page ";
                        echo twig_escape_filter($this->env, ($context["current"] ?? null), "html", null, true);
                        echo "\" aria-current=\"page\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 48
                        echo "                            <a class=\"pagination-link\" aria-label=\"Goto page ";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 50
                    echo "                    </li>
                ";
                }
                // line 52
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
            ";
            // line 54
            if (((($context["last"] ?? null) - (($__internal_compile_1 = ($context["pagesInRange"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[(twig_length_filter($this->env, ($context["pagesInRange"] ?? null)) - 1)] ?? null) : null)) >= 2)) {
                // line 55
                echo "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 59
            echo "
            <li>
                ";
            // line 61
            if ((($context["current"] ?? null) == ($context["last"] ?? null))) {
                // line 62
                echo "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                echo twig_escape_filter($this->env, ($context["current"] ?? null), "html", null, true);
                echo "\" aria-current=\"page\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["last"] ?? null), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 64
                echo "                    <a class=\"pagination-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["last"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["last"] ?? null), "html", null, true);
                echo "</a>
                ";
            }
            // line 66
            echo "            </li>
        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/bulma_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 66,  216 => 64,  206 => 62,  204 => 61,  200 => 59,  194 => 55,  192 => 54,  189 => 53,  183 => 52,  179 => 50,  169 => 48,  159 => 46,  157 => 45,  154 => 44,  151 => 43,  147 => 42,  144 => 41,  138 => 37,  136 => 36,  132 => 34,  126 => 32,  118 => 30,  116 => 29,  111 => 26,  105 => 24,  97 => 22,  95 => 21,  92 => 20,  86 => 18,  78 => 16,  76 => 15,  71 => 14,  69 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  51 => 8,  49 => 7,  46 => 6,  44 => 5,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/bulma_pagination.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\bulma_pagination.html.twig");
    }
}
