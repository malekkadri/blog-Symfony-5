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

/* form_div_layout.html.twig */
class __TwigTemplate_5c4aec3cf36fc35fee38335ae1b9d4d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_widget' => [$this, 'block_form_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'form_widget_compound' => [$this, 'block_form_widget_compound'],
            'collection_widget' => [$this, 'block_collection_widget'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget' => [$this, 'block_choice_widget'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_options' => [$this, 'block_choice_widget_options'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
            'number_widget' => [$this, 'block_number_widget'],
            'integer_widget' => [$this, 'block_integer_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'url_widget' => [$this, 'block_url_widget'],
            'search_widget' => [$this, 'block_search_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'hidden_widget' => [$this, 'block_hidden_widget'],
            'email_widget' => [$this, 'block_email_widget'],
            'range_widget' => [$this, 'block_range_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'reset_widget' => [$this, 'block_reset_widget'],
            'tel_widget' => [$this, 'block_tel_widget'],
            'color_widget' => [$this, 'block_color_widget'],
            'week_widget' => [$this, 'block_week_widget'],
            'form_label' => [$this, 'block_form_label'],
            'button_label' => [$this, 'block_button_label'],
            'form_help' => [$this, 'block_form_help'],
            'repeated_row' => [$this, 'block_repeated_row'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'hidden_row' => [$this, 'block_hidden_row'],
            'form' => [$this, 'block_form'],
            'form_start' => [$this, 'block_form_start'],
            'form_end' => [$this, 'block_form_end'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_rest' => [$this, 'block_form_rest'],
            'form_rows' => [$this, 'block_form_rows'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'widget_container_attributes' => [$this, 'block_widget_container_attributes'],
            'button_attributes' => [$this, 'block_button_attributes'],
            'attributes' => [$this, 'block_attributes'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 20
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 30
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 49
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 58
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 80
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 93
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 97
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 101
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 114
        $this->displayBlock('date_widget', $context, $blocks);
        // line 128
        $this->displayBlock('time_widget', $context, $blocks);
        // line 139
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 174
        $this->displayBlock('number_widget', $context, $blocks);
        // line 180
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 185
        $this->displayBlock('money_widget', $context, $blocks);
        // line 189
        $this->displayBlock('url_widget', $context, $blocks);
        // line 194
        $this->displayBlock('search_widget', $context, $blocks);
        // line 199
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 204
        $this->displayBlock('password_widget', $context, $blocks);
        // line 209
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 214
        $this->displayBlock('email_widget', $context, $blocks);
        // line 219
        $this->displayBlock('range_widget', $context, $blocks);
        // line 224
        $this->displayBlock('button_widget', $context, $blocks);
        // line 252
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 257
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 262
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 267
        $this->displayBlock('color_widget', $context, $blocks);
        // line 272
        $this->displayBlock('week_widget', $context, $blocks);
        // line 285
        $this->displayBlock('form_label', $context, $blocks);
        // line 321
        $this->displayBlock('button_label', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('form_help', $context, $blocks);
        // line 345
        echo "
";
        // line 348
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 356
        $this->displayBlock('form_row', $context, $blocks);
        // line 369
        $this->displayBlock('button_row', $context, $blocks);
        // line 375
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 381
        $this->displayBlock('form', $context, $blocks);
        // line 387
        $this->displayBlock('form_start', $context, $blocks);
        // line 401
        $this->displayBlock('form_end', $context, $blocks);
        // line 408
        $this->displayBlock('form_errors', $context, $blocks);
        // line 418
        $this->displayBlock('form_rest', $context, $blocks);
        // line 439
        echo "
";
        // line 442
        $this->displayBlock('form_rows', $context, $blocks);
        // line 448
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 455
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 460
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 465
        $this->displayBlock('attributes', $context, $blocks);
    }

    // line 3
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if (($context["compound"] ?? null)) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 13
        if (((($context["type"] ?? null) == "range") || (($context["type"] ?? null) == "color"))) {
            // line 15
            $context["required"] = false;
        }
        // line 17
        echo "<input type=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 20
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 22
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        }
        // line 25
        $this->displayBlock("form_rows", $context, $blocks);
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 27
        echo "</div>";
    }

    // line 30
    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        if ((array_key_exists("prototype", $context) &&  !twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "rendered", [], "any", false, false, false, 31))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
        }
        // line 34
        $this->displayBlock("form_widget", $context, $blocks);
    }

    // line 37
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</textarea>";
    }

    // line 41
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        if (($context["expanded"] ?? null)) {
            // line 43
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 45
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
    }

    // line 49
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>";
    }

    // line 58
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        if (((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, false, 59) || (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", false, false, false, 59) <= 1)))) {
            // line 60
            $context["required"] = false;
        }
        // line 62
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 63
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 64
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            (((($context["placeholder"] ?? null) != "")) ? (print (twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true))) : (print ("")));
            echo "</option>";
        }
        // line 66
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 67
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 68
            echo "            ";
            $context["render_preferred_choices"] = true;
            // line 69
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 70
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 71
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 74
        $context["options"] = ($context["choices"] ?? null);
        // line 75
        $context["render_preferred_choices"] = false;
        // line 76
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 77
        echo "</select>";
    }

    // line 80
    public function block_choice_widget_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 82
            if (twig_test_iterable($context["choice"])) {
                // line 83
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "\">
                ";
                // line 84
                $context["options"] = $context["choice"];
                // line 85
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 86
                echo "</optgroup>";
            } else {
                // line 88
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 88), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 88)) {
                    $__internal_compile_0 = $context;
                    $__internal_compile_1 = ["attr" => twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 88)];
                    if (!twig_test_iterable($__internal_compile_1)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 88, $this->getSourceContext());
                    }
                    $__internal_compile_1 = twig_to_array($__internal_compile_1);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $__internal_compile_0;
                }
                if (( !((array_key_exists("render_preferred_choices", $context)) ? (_twig_default_filter(($context["render_preferred_choices"] ?? null), false)) : (false)) && Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((($context["choice_translation_domain"] ?? null) === false)) ? (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 88)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 88), twig_get_attribute($this->env, $this->source, $context["choice"], "labelTranslationParameters", [], "any", false, false, false, 88), ($context["choice_translation_domain"] ?? null)))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 93
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 97
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
    }

    // line 101
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 106), 'errors');
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 107), 'errors');
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 108), 'widget');
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 109), 'widget');
            // line 110
            echo "</div>";
        }
    }

    // line 114
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 116
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 118
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 119
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" =>             // line 120
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 120), 'widget'), "{{ month }}" =>             // line 121
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 121), 'widget'), "{{ day }}" =>             // line 122
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 122), 'widget')]);
            // line 124
            echo "</div>";
        }
    }

    // line 128
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 130
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 132
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 133
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 134
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            if (($context["with_minutes"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            }
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 134), 'widget', ($context["vars"] ?? null));
            }
            // line 135
            echo "        </div>";
        }
    }

    // line 139
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 141
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 143
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 145
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\" role=\"presentation\">
                <thead>
                    <tr>";
            // line 148
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 148), 'label');
                echo "</th>";
            }
            // line 149
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 149), 'label');
                echo "</th>";
            }
            // line 150
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 150), 'label');
                echo "</th>";
            }
            // line 151
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 151), 'label');
                echo "</th>";
            }
            // line 152
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 152), 'label');
                echo "</th>";
            }
            // line 153
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 153), 'label');
                echo "</th>";
            }
            // line 154
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 154), 'label');
                echo "</th>";
            }
            // line 155
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 159
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "years", [], "any", false, false, false, 159), 'widget');
                echo "</td>";
            }
            // line 160
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "months", [], "any", false, false, false, 160), 'widget');
                echo "</td>";
            }
            // line 161
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "weeks", [], "any", false, false, false, 161), 'widget');
                echo "</td>";
            }
            // line 162
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "days", [], "any", false, false, false, 162), 'widget');
                echo "</td>";
            }
            // line 163
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hours", [], "any", false, false, false, 163), 'widget');
                echo "</td>";
            }
            // line 164
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minutes", [], "any", false, false, false, 164), 'widget');
                echo "</td>";
            }
            // line 165
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seconds", [], "any", false, false, false, 165), 'widget');
                echo "</td>";
            }
            // line 166
            echo "</tr>
                </tbody>
            </table>";
            // line 169
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "invert", [], "any", false, false, false, 169), 'widget');
            }
            // line 170
            echo "</div>";
        }
    }

    // line 174
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 177
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 180
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "number")) : ("number"));
        // line 182
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 185
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null),         $this->renderBlock("form_widget_simple", $context, $blocks));
    }

    // line 189
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "url")) : ("url"));
        // line 191
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 194
    public function block_search_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "search")) : ("search"));
        // line 196
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 199
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 201
        $this->displayBlock("form_widget_simple", $context, $blocks);
        if (($context["symbol"] ?? null)) {
            echo " ";
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
        }
    }

    // line 204
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "password")) : ("password"));
        // line 206
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 209
    public function block_hidden_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "hidden")) : ("hidden"));
        // line 211
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 214
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 215
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "email")) : ("email"));
        // line 216
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 219
    public function block_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "range")) : ("range"));
        // line 221
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 224
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 226
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 227
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                 // line 228
($context["name"] ?? null), "%id%" =>                 // line 229
($context["id"] ?? null)]);
            } elseif ( !(            // line 231
($context["label"] ?? null) === false)) {
                // line 232
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 235
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        // line 236
        if ((($context["translation_domain"] ?? null) === false)) {
            // line 237
            if ((($context["label_html"] ?? null) === false)) {
                // line 238
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } else {
                // line 240
                echo ($context["label"] ?? null);
            }
        } else {
            // line 243
            if ((($context["label_html"] ?? null) === false)) {
                // line 244
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 246
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
            }
        }
        // line 249
        echo "</button>";
    }

    // line 252
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 253
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "submit")) : ("submit"));
        // line 254
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 257
    public function block_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 258
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "reset")) : ("reset"));
        // line 259
        $this->displayBlock("button_widget", $context, $blocks);
    }

    // line 262
    public function block_tel_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 263
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "tel")) : ("tel"));
        // line 264
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 267
    public function block_color_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 268
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? null), "color")) : ("color"));
        // line 269
        $this->displayBlock("form_widget_simple", $context, $blocks);
    }

    // line 272
    public function block_week_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 273
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 274
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 276
            $context["vars"] = (((($context["widget"] ?? null) == "text")) ? (["attr" => ["size" => 1]]) : ([]));
            // line 277
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 278
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 278), 'widget', ($context["vars"] ?? null));
            echo "-";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "week", [], "any", false, false, false, 278), 'widget', ($context["vars"] ?? null));
            echo "
        </div>";
        }
    }

    // line 285
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 286
        if ( !(($context["label"] ?? null) === false)) {
            // line 287
            if ( !($context["compound"] ?? null)) {
                // line 288
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
            }
            // line 290
            if (($context["required"] ?? null)) {
                // line 291
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 291)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 291), "")) : ("")) . " required"))]);
            }
            // line 293
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 294
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 295
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 296
($context["name"] ?? null), "%id%" =>                     // line 297
($context["id"] ?? null)]);
                } else {
                    // line 300
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 303
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            if (($context["label_attr"] ?? null)) {
                $__internal_compile_2 = $context;
                $__internal_compile_3 = ["attr" => ($context["label_attr"] ?? null)];
                if (!twig_test_iterable($__internal_compile_3)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 303, $this->getSourceContext());
                }
                $__internal_compile_3 = twig_to_array($__internal_compile_3);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_2;
            }
            echo ">";
            // line 304
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 305
                if ((($context["label_html"] ?? null) === false)) {
                    // line 306
                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 308
                    echo ($context["label"] ?? null);
                }
            } else {
                // line 311
                if ((($context["label_html"] ?? null) === false)) {
                    // line 312
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 314
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 317
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? null), "label")) : ("label")), "html", null, true);
            echo ">";
        }
    }

    // line 321
    public function block_button_label($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 325
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 326
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 327
            $context["help_attr"] = twig_array_merge(($context["help_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 327)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 327), "")) : ("")) . " help-text"))]);
            // line 328
            echo "<p id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "_help\"";
            $__internal_compile_4 = $context;
            $__internal_compile_5 = ["attr" => ($context["help_attr"] ?? null)];
            if (!twig_test_iterable($__internal_compile_5)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 328, $this->getSourceContext());
            }
            $__internal_compile_5 = twig_to_array($__internal_compile_5);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_4;
            echo ">";
            // line 329
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 330
                if ((($context["help_html"] ?? null) === false)) {
                    // line 331
                    echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
                } else {
                    // line 333
                    echo ($context["help"] ?? null);
                }
            } else {
                // line 336
                if ((($context["help_html"] ?? null) === false)) {
                    // line 337
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)), "html", null, true);
                } else {
                    // line 339
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["help"] ?? null), ($context["help_translation_parameters"] ?? null), ($context["translation_domain"] ?? null));
                }
            }
            // line 342
            echo "</p>";
        }
    }

    // line 348
    public function block_repeated_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        $this->displayBlock("form_rows", $context, $blocks);
    }

    // line 356
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 357
        $context["widget_attr"] = [];
        // line 358
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 359
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 361
        echo "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 361, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        echo ">";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 363
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 364
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 365
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 366
        echo "</div>";
    }

    // line 369
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 370
        echo "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => ($context["row_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 370, $this->getSourceContext());
        }
        $__internal_compile_9 = twig_to_array($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        echo ">";
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 372
        echo "</div>";
    }

    // line 375
    public function block_hidden_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 376
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
    }

    // line 381
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 382
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 384
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
    }

    // line 387
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 388
        twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 388);
        // line 389
        $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
        // line 390
        if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
            // line 391
            $context["form_method"] = ($context["method"] ?? null);
        } else {
            // line 393
            $context["form_method"] = "POST";
        }
        // line 395
        echo "<form";
        if ((($context["name"] ?? null) != "")) {
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["form_method"] ?? null)), "html", null, true);
        echo "\"";
        if ((($context["action"] ?? null) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
            echo "\"";
        }
        $this->displayBlock("attributes", $context, $blocks);
        if (($context["multipart"] ?? null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 396
        if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
            // line 397
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
            echo "\" />";
        }
    }

    // line 401
    public function block_form_end($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 402
        if (( !array_key_exists("render_rest", $context) || ($context["render_rest"] ?? null))) {
            // line 403
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        }
        // line 405
        echo "</form>";
    }

    // line 408
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 409
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 410
            echo "<ul>";
            // line 411
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 412
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 412), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            echo "</ul>";
        }
    }

    // line 418
    public function block_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 419
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 420
            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 420)) {
                // line 421
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
        if (( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "methodRendered", [], "any", false, false, false, 425) && Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null)))) {
            // line 426
            twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "setMethodRendered", [], "method", false, false, false, 426);
            // line 427
            $context["method"] = twig_upper_filter($this->env, ($context["method"] ?? null));
            // line 428
            if (twig_in_filter(($context["method"] ?? null), [0 => "GET", 1 => "POST"])) {
                // line 429
                $context["form_method"] = ($context["method"] ?? null);
            } else {
                // line 431
                $context["form_method"] = "POST";
            }
            // line 434
            if ((($context["form_method"] ?? null) != ($context["method"] ?? null))) {
                // line 435
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                echo "\" />";
            }
        }
    }

    // line 442
    public function block_form_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 443
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, ($context["form"] ?? null), function ($__child__) use ($context, $macros) { $context["child"] = $__child__; return  !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 443); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 444
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 448
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 449
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        // line 450
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 451
        if (($context["required"] ?? null)) {
            echo " required=\"required\"";
        }
        // line 452
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 455
    public function block_widget_container_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 456
        if ( !twig_test_empty(($context["id"] ?? null))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 457
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 460
    public function block_button_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 461
        echo "id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\"";
        if (($context["disabled"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        // line 462
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 465
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 466
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 467
            echo " ";
            // line 468
            if (twig_in_filter($context["attrname"], [0 => "placeholder", 1 => "title"])) {
                // line 469
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((($context["translation_domain"] ?? null) === false) || (null === $context["attrvalue"]))) ? ($context["attrvalue"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["attrvalue"], ($context["attr_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)))), "html", null, true);
                echo "\"";
            } elseif ((            // line 470
$context["attrvalue"] === true)) {
                // line 471
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 472
$context["attrvalue"] === false)) {
                // line 473
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1322 => 473,  1320 => 472,  1315 => 471,  1313 => 470,  1308 => 469,  1306 => 468,  1304 => 467,  1300 => 466,  1296 => 465,  1292 => 462,  1283 => 461,  1279 => 460,  1275 => 457,  1269 => 456,  1265 => 455,  1261 => 452,  1257 => 451,  1253 => 450,  1247 => 449,  1243 => 448,  1235 => 444,  1231 => 443,  1227 => 442,  1219 => 435,  1217 => 434,  1214 => 431,  1211 => 429,  1209 => 428,  1207 => 427,  1205 => 426,  1203 => 425,  1196 => 421,  1194 => 420,  1190 => 419,  1186 => 418,  1181 => 414,  1173 => 412,  1169 => 411,  1167 => 410,  1165 => 409,  1161 => 408,  1157 => 405,  1154 => 403,  1152 => 402,  1148 => 401,  1141 => 397,  1139 => 396,  1119 => 395,  1116 => 393,  1113 => 391,  1111 => 390,  1109 => 389,  1107 => 388,  1103 => 387,  1099 => 384,  1097 => 383,  1095 => 382,  1091 => 381,  1087 => 376,  1083 => 375,  1079 => 372,  1077 => 371,  1065 => 370,  1061 => 369,  1057 => 366,  1055 => 365,  1053 => 364,  1051 => 363,  1049 => 362,  1037 => 361,  1034 => 359,  1032 => 358,  1030 => 357,  1026 => 356,  1022 => 353,  1018 => 348,  1013 => 342,  1009 => 339,  1006 => 337,  1004 => 336,  1000 => 333,  997 => 331,  995 => 330,  993 => 329,  979 => 328,  977 => 327,  975 => 326,  971 => 325,  965 => 321,  958 => 317,  954 => 314,  951 => 312,  949 => 311,  945 => 308,  942 => 306,  940 => 305,  938 => 304,  923 => 303,  919 => 300,  916 => 297,  915 => 296,  914 => 295,  912 => 294,  910 => 293,  907 => 291,  905 => 290,  902 => 288,  900 => 287,  898 => 286,  894 => 285,  885 => 278,  880 => 277,  878 => 276,  875 => 274,  873 => 273,  869 => 272,  865 => 269,  863 => 268,  859 => 267,  855 => 264,  853 => 263,  849 => 262,  845 => 259,  843 => 258,  839 => 257,  835 => 254,  833 => 253,  829 => 252,  825 => 249,  821 => 246,  818 => 244,  816 => 243,  812 => 240,  809 => 238,  807 => 237,  805 => 236,  799 => 235,  795 => 232,  793 => 231,  791 => 229,  790 => 228,  789 => 227,  787 => 226,  785 => 225,  781 => 224,  777 => 221,  775 => 220,  771 => 219,  767 => 216,  765 => 215,  761 => 214,  757 => 211,  755 => 210,  751 => 209,  747 => 206,  745 => 205,  741 => 204,  733 => 201,  731 => 200,  727 => 199,  723 => 196,  721 => 195,  717 => 194,  713 => 191,  711 => 190,  707 => 189,  703 => 186,  699 => 185,  695 => 182,  693 => 181,  689 => 180,  685 => 177,  683 => 176,  679 => 174,  674 => 170,  670 => 169,  666 => 166,  660 => 165,  654 => 164,  648 => 163,  642 => 162,  636 => 161,  630 => 160,  624 => 159,  619 => 155,  613 => 154,  607 => 153,  601 => 152,  595 => 151,  589 => 150,  583 => 149,  577 => 148,  571 => 145,  569 => 144,  565 => 143,  562 => 141,  560 => 140,  556 => 139,  551 => 135,  541 => 134,  536 => 133,  534 => 132,  531 => 130,  529 => 129,  525 => 128,  520 => 124,  518 => 122,  517 => 121,  516 => 120,  515 => 119,  511 => 118,  508 => 116,  506 => 115,  502 => 114,  497 => 110,  495 => 109,  493 => 108,  491 => 107,  489 => 106,  485 => 105,  482 => 103,  480 => 102,  476 => 101,  462 => 98,  458 => 97,  444 => 94,  440 => 93,  404 => 88,  401 => 86,  399 => 85,  397 => 84,  392 => 83,  390 => 82,  373 => 81,  369 => 80,  365 => 77,  363 => 76,  361 => 75,  359 => 74,  353 => 71,  351 => 70,  349 => 69,  346 => 68,  344 => 67,  342 => 66,  333 => 64,  331 => 63,  324 => 62,  321 => 60,  319 => 59,  315 => 58,  311 => 55,  305 => 53,  303 => 52,  299 => 51,  295 => 50,  291 => 49,  286 => 45,  283 => 43,  281 => 42,  277 => 41,  269 => 38,  265 => 37,  261 => 34,  258 => 32,  256 => 31,  252 => 30,  248 => 27,  246 => 26,  244 => 25,  241 => 23,  239 => 22,  235 => 21,  231 => 20,  217 => 17,  214 => 15,  212 => 13,  210 => 12,  206 => 11,  201 => 7,  198 => 5,  196 => 4,  192 => 3,  188 => 465,  186 => 460,  184 => 455,  182 => 448,  180 => 442,  177 => 439,  175 => 418,  173 => 408,  171 => 401,  169 => 387,  167 => 381,  165 => 375,  163 => 369,  161 => 356,  159 => 348,  156 => 345,  154 => 325,  151 => 324,  149 => 321,  147 => 285,  145 => 272,  143 => 267,  141 => 262,  139 => 257,  137 => 252,  135 => 224,  133 => 219,  131 => 214,  129 => 209,  127 => 204,  125 => 199,  123 => 194,  121 => 189,  119 => 185,  117 => 180,  115 => 174,  113 => 139,  111 => 128,  109 => 114,  107 => 101,  105 => 97,  103 => 93,  101 => 80,  99 => 58,  97 => 49,  95 => 41,  93 => 37,  91 => 30,  89 => 20,  87 => 11,  85 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "form_div_layout.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
