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

/* bootstrap_5_horizontal_layout.html.twig */
class __TwigTemplate_c16c461ed27151236eb60ac4319b31a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("bootstrap_5_layout.html.twig", "bootstrap_5_horizontal_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'fieldset_form_row' => [$this, 'block_fieldset_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'button_row' => [$this, 'block_button_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 23
        echo "
";
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('form_row', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('submit_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('reset_row', $context, $blocks);
        // line 107
        echo "
";
        // line 108
        $this->displayBlock('button_row', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('form_group_class', $context, $blocks);
    }

    // line 5
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 9), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 9), "")) : (""))));
            // line 10
            if ((!twig_in_filter("form-floating", ($context["row_class"] ?? null)) && !twig_in_filter("input-group", ($context["row_class"] ?? null)))) {
                // line 11
                if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? null))) {
                    // line 12
                    $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 12), "")) : ("")) . " col-form-label"))]);
                }
                // line 14
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), "")) : ("")) . " ") .                 $this->renderBlock("form_label_class", $context, $blocks)))]);
            }
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 20
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "col-sm-2";
    }

    // line 26
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? null))) {
            // line 28
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 30
            $context["widget_attr"] = [];
            // line 31
            if ( !twig_test_empty(($context["help"] ?? null))) {
                // line 32
                $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
            }
            // line 34
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (_twig_default_filter(($context["row_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 34), "mb-3")) : ("mb-3")))) : (((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 34), "mb-3")) : ("mb-3"))));
            // line 35
            $context["is_form_floating"] = ((array_key_exists("is_form_floating", $context)) ? (_twig_default_filter(($context["is_form_floating"] ?? null), twig_in_filter("form-floating", ($context["row_class"] ?? null)))) : (twig_in_filter("form-floating", ($context["row_class"] ?? null))));
            // line 36
            $context["is_input_group"] = ((array_key_exists("is_input_group", $context)) ? (_twig_default_filter(($context["is_input_group"] ?? null), twig_in_filter("input-group", ($context["row_class"] ?? null)))) : (twig_in_filter("input-group", ($context["row_class"] ?? null))));
            // line 38
            $context["row_class"] = twig_replace_filter(($context["row_class"] ?? null), ["form-floating" => "", "input-group" => ""]);
            // line 39
            echo "<div";
            $__internal_compile_0 = $context;
            $__internal_compile_1 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((($context["row_class"] ?? null) . " row") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" is-invalid") : (""))))])];
            if (!twig_test_iterable($__internal_compile_1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 39, $this->getSourceContext());
            }
            $__internal_compile_1 = twig_to_array($__internal_compile_1);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_0;
            echo ">";
            // line 40
            if ((($context["is_form_floating"] ?? null) || ($context["is_input_group"] ?? null))) {
                // line 41
                echo "<div class=\"";
                $this->displayBlock("form_label_class", $context, $blocks);
                echo "\"></div>
                <div class=\"";
                // line 42
                $this->displayBlock("form_group_class", $context, $blocks);
                echo "\">";
                // line 43
                if (($context["is_form_floating"] ?? null)) {
                    // line 44
                    echo "<div class=\"form-floating\">";
                    // line 45
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                    // line 46
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    // line 47
                    echo "</div>";
                } elseif (                // line 48
($context["is_input_group"] ?? null)) {
                    // line 49
                    echo "<div class=\"input-group\">";
                    // line 50
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    // line 51
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                    // line 53
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                    // line 54
                    echo "</div>";
                }
                // line 56
                if ( !($context["is_input_group"] ?? null)) {
                    // line 57
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                }
                // line 59
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 60
                echo "</div>";
            } else {
                // line 62
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                // line 63
                echo "<div class=\"";
                $this->displayBlock("form_group_class", $context, $blocks);
                echo "\">";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                // line 65
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                // line 66
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 67
                echo "</div>";
            }
            // line 69
            echo "</div>";
        }
    }

    // line 73
    public function block_fieldset_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        $context["widget_attr"] = [];
        // line 75
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 76
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 78
        echo "<fieldset";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 78), "mb-3")) : ("mb-3")))])];
        if (!twig_test_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 78, $this->getSourceContext());
        }
        $__internal_compile_3 = twig_to_array($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        echo ">
        <div class=\"row";
        // line 79
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 81
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 85
        echo "</div>
        </div>
    </fieldset>";
    }

    // line 90
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 91), "mb-3")) : ("mb-3")) . " row"))])];
        if (!twig_test_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 91, $this->getSourceContext());
        }
        $__internal_compile_5 = twig_to_array($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        echo ">";
        // line 92
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 93
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 95
        echo "</div>";
        // line 96
        echo "</div>";
    }

    // line 99
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 100), "mb-3")) : ("mb-3")) . " row"))])];
        if (!twig_test_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 100, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        echo ">";
        // line 101
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 102
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 104
        echo "</div>";
        // line 105
        echo "</div>";
    }

    // line 108
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 109)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 109), "mb-3")) : ("mb-3")) . " row"))])];
        if (!twig_test_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 109, $this->getSourceContext());
        }
        $__internal_compile_9 = twig_to_array($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        echo ">";
        // line 110
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 111
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 113
        echo "</div>";
        // line 114
        echo "</div>";
    }

    // line 117
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "<div";
        $__internal_compile_10 = $context;
        $__internal_compile_11 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 118)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 118), "mb-3")) : ("mb-3")) . " row"))])];
        if (!twig_test_iterable($__internal_compile_11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 118, $this->getSourceContext());
        }
        $__internal_compile_11 = twig_to_array($__internal_compile_11);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_10;
        echo ">";
        // line 119
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 120
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 124
        echo "</div>";
        // line 125
        echo "</div>";
    }

    // line 128
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        echo "col-sm-10";
    }

    public function getTemplateName()
    {
        return "bootstrap_5_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  429 => 129,  425 => 128,  421 => 125,  419 => 124,  417 => 123,  415 => 122,  413 => 121,  409 => 120,  405 => 119,  393 => 118,  389 => 117,  385 => 114,  383 => 113,  381 => 112,  377 => 111,  373 => 110,  361 => 109,  357 => 108,  353 => 105,  351 => 104,  349 => 103,  345 => 102,  341 => 101,  329 => 100,  325 => 99,  321 => 96,  319 => 95,  317 => 94,  313 => 93,  309 => 92,  297 => 91,  293 => 90,  287 => 85,  285 => 84,  283 => 83,  281 => 82,  277 => 81,  275 => 80,  270 => 79,  257 => 78,  254 => 76,  252 => 75,  250 => 74,  246 => 73,  241 => 69,  238 => 67,  236 => 66,  234 => 65,  232 => 64,  228 => 63,  226 => 62,  223 => 60,  221 => 59,  218 => 57,  216 => 56,  213 => 54,  211 => 53,  209 => 51,  207 => 50,  205 => 49,  203 => 48,  201 => 47,  199 => 46,  197 => 45,  195 => 44,  193 => 43,  190 => 42,  185 => 41,  183 => 40,  171 => 39,  169 => 38,  167 => 36,  165 => 35,  163 => 34,  160 => 32,  158 => 31,  156 => 30,  153 => 28,  151 => 27,  147 => 26,  143 => 21,  139 => 20,  134 => 16,  131 => 14,  128 => 12,  126 => 11,  124 => 10,  122 => 9,  117 => 7,  115 => 6,  111 => 5,  107 => 128,  104 => 127,  102 => 117,  99 => 116,  97 => 108,  94 => 107,  92 => 99,  89 => 98,  87 => 90,  84 => 89,  82 => 73,  79 => 72,  77 => 26,  74 => 25,  71 => 23,  69 => 20,  66 => 19,  64 => 5,  61 => 4,  58 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_5_horizontal_layout.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_5_horizontal_layout.html.twig");
    }
}
