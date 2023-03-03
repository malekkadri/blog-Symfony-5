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

/* foundation_6_layout.html.twig */
class __TwigTemplate_8a6c44b26dd42ce12a36f1ec42d7a0f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'money_widget' => [$this, 'block_money_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'button_widget' => [$this, 'block_button_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_6_layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["parent_class"] = ((array_key_exists("parent_class", $context)) ? (_twig_default_filter(($context["parent_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 4), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 4), "")) : (""))));
        // line 5
        if (twig_in_filter("switch-input", ($context["parent_class"] ?? null))) {
            // line 6
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 7), "")) : ("")) . " switch-input"))]);
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            // line 9
            echo "<label class=\"switch-paddle\" for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\"></label>";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        } else {
            // line 12
            $this->displayBlock("form_row", $context, $blocks);
        }
    }

    // line 16
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $context["prepend"] =  !(is_string($__internal_compile_0 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_1 = "{{") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)));
        // line 18
        echo "    ";
        $context["append"] =  !(is_string($__internal_compile_2 = ($context["money_pattern"] ?? null)) && is_string($__internal_compile_3 = "}}") && ('' === $__internal_compile_3 || $__internal_compile_3 === substr($__internal_compile_2, -strlen($__internal_compile_3))));
        // line 19
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 20
            echo "        <div class=\"input-group\">
            ";
            // line 21
            if (($context["prepend"] ?? null)) {
                // line 22
                echo "                <span class=\"input-group-label\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 24
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 24), "")) : ("")) . " input-group-field"))]);
            // line 25
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 26
            if (($context["append"] ?? null)) {
                // line 27
                echo "                <span class=\"input-group-label\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 29
            echo "        </div>
    ";
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 35
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        if (($context["symbol"] ?? null)) {
            // line 37
            echo "<div class=\"input-group\">
            ";
            // line 38
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 38), "")) : ("")) . " input-group-field"))]);
            // line 39
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 40
            echo "<span class=\"input-group-label\">";
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
            echo "</span>
        </div>";
        } else {
            // line 43
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 47
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 48), "")) : ("")) . " button"))]);
        // line 49
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "foundation_6_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 49,  148 => 48,  144 => 47,  139 => 43,  133 => 40,  131 => 39,  129 => 38,  126 => 37,  124 => 36,  120 => 35,  115 => 31,  111 => 29,  105 => 27,  103 => 26,  101 => 25,  98 => 24,  92 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  79 => 17,  75 => 16,  70 => 12,  67 => 10,  63 => 9,  61 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "foundation_6_layout.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\foundation_6_layout.html.twig");
    }
}
