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

/* tailwind_2_layout.html.twig */
class __TwigTemplate_23cd9793667474f03f2c5fa2cc720280 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 3
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "tailwind_2_layout.html.twig", 3);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_row' => [$this, 'block_form_row'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'form_label' => [$this, 'block_form_label'],
                'form_help' => [$this, 'block_form_help'],
                'form_errors' => [$this, 'block_form_errors'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 5
        $this->displayBlock('form_row', $context, $blocks);
        // line 10
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 15
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        $this->displayBlock('form_help', $context, $blocks);
        // line 25
        $this->displayBlock('form_errors', $context, $blocks);
        // line 35
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 47
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 63
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 68
        $this->displayBlock('radio_widget', $context, $blocks);
    }

    // line 5
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 6), ((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "mb-6")) : ("mb-6"))))]);
        // line 7
        $this->displayParentBlock("form_row", $context, $blocks);
    }

    // line 10
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 11), ((array_key_exists("widget_class", $context)) ? (_twig_default_filter(($context["widget_class"] ?? null), "mt-1 w-full")) : ("mt-1 w-full")))) : (((array_key_exists("widget_class", $context)) ? (_twig_default_filter(($context["widget_class"] ?? null), "mt-1 w-full")) : ("mt-1 w-full")))) . ((($context["disabled"] ?? null)) ? ((" " . ((array_key_exists("widget_disabled_class", $context)) ? (_twig_default_filter(($context["widget_disabled_class"] ?? null), "border-gray-300 text-gray-500")) : ("border-gray-300 text-gray-500")))) : (""))) . ((twig_length_filter($this->env, ($context["errors"] ?? null))) ? ((" " . ((array_key_exists("widget_errors_class", $context)) ? (_twig_default_filter(($context["widget_errors_class"] ?? null), "border-red-700")) : ("border-red-700")))) : ("")))]);
        // line 12
        $this->displayParentBlock("widget_attributes", $context, $blocks);
    }

    // line 15
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 16), ((array_key_exists("label_class", $context)) ? (_twig_default_filter(($context["label_class"] ?? null), "block text-gray-800")) : ("block text-gray-800")))) : (((array_key_exists("label_class", $context)) ? (_twig_default_filter(($context["label_class"] ?? null), "block text-gray-800")) : ("block text-gray-800"))))]);
        // line 17
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 20
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 21), ((array_key_exists("help_class", $context)) ? (_twig_default_filter(($context["help_class"] ?? null), "mt-1 text-gray-600")) : ("mt-1 text-gray-600")))) : (((array_key_exists("help_class", $context)) ? (_twig_default_filter(($context["help_class"] ?? null), "mt-1 text-gray-600")) : ("mt-1 text-gray-600"))))]);
        // line 22
        $this->displayParentBlock("form_help", $context, $blocks);
    }

    // line 25
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 27
            echo "<ul>";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 29
                echo "<li class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("error_item_class", $context)) ? (_twig_default_filter(($context["error_item_class"] ?? null), "text-red-700")) : ("text-red-700")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 29), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "</ul>";
        }
    }

    // line 35
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 36), "mt-2")) : ("mt-2"))]);
        // line 37
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 39
            echo "            <div class=\"flex items-center\">";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
            // line 42
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</div>";
    }

    // line 47
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        $context["row_attr"] = twig_array_merge(($context["row_attr"] ?? null), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 48), ((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), "mb-6")) : ("mb-6"))))]);
        // line 49
        $context["widget_attr"] = [];
        // line 50
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 51
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 53
        echo "<div";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 53, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        echo ">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 55
        echo "<div class=\"inline-flex items-center\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 58
        echo "</div>";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 60
        echo "</div>";
    }

    // line 63
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (_twig_default_filter(($context["widget_class"] ?? null), "mr-2")) : ("mr-2"));
        // line 65
        $this->displayParentBlock("checkbox_widget", $context, $blocks);
    }

    // line 68
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (_twig_default_filter(($context["widget_class"] ?? null), "mr-2")) : ("mr-2"));
        // line 70
        $this->displayParentBlock("radio_widget", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "tailwind_2_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  236 => 70,  234 => 69,  230 => 68,  226 => 65,  224 => 64,  220 => 63,  216 => 60,  214 => 59,  212 => 58,  210 => 57,  208 => 56,  206 => 55,  204 => 54,  192 => 53,  189 => 51,  187 => 50,  185 => 49,  183 => 48,  179 => 47,  175 => 44,  168 => 42,  166 => 41,  164 => 40,  162 => 39,  158 => 38,  154 => 37,  152 => 36,  148 => 35,  143 => 31,  133 => 29,  129 => 28,  127 => 27,  125 => 26,  121 => 25,  117 => 22,  115 => 21,  111 => 20,  107 => 17,  105 => 16,  101 => 15,  97 => 12,  95 => 11,  91 => 10,  87 => 7,  85 => 6,  81 => 5,  77 => 68,  75 => 63,  73 => 47,  71 => 35,  69 => 25,  67 => 20,  65 => 15,  63 => 10,  61 => 5,  58 => 2,  30 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "tailwind_2_layout.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\tailwind_2_layout.html.twig");
    }
}
