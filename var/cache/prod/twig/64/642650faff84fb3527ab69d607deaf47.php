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

/* foundation_5_layout.html.twig */
class __TwigTemplate_1ca836d13890b069f51865bc8f0d5157 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'button_widget' => [$this, 'block_button_widget'],
            'money_widget' => [$this, 'block_money_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'form_label' => [$this, 'block_form_label'],
            'choice_label' => [$this, 'block_choice_label'],
            'checkbox_label' => [$this, 'block_checkbox_label'],
            'radio_label' => [$this, 'block_radio_label'],
            'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
            'form_row' => [$this, 'block_form_row'],
            'choice_row' => [$this, 'block_choice_row'],
            'date_row' => [$this, 'block_date_row'],
            'time_row' => [$this, 'block_time_row'],
            'datetime_row' => [$this, 'block_datetime_row'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'form_errors' => [$this, 'block_form_errors'],
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
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 8), "")) : ("")) . " error"))]);
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 13
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 15), "")) : ("")) . " error"))]);
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 20
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 21), "")) : ("")) . " button"))]);
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 25
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? null)) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
    }

    // line 44
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "<div class=\"row collapse\">";
        // line 46
        if (($context["symbol"] ?? null)) {
            // line 47
            echo "<div class=\"small-9 large-10 columns\">";
            // line 48
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 49
            echo "</div>
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 51
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter(($context["symbol"] ?? null), "%")) : ("%")), "html", null, true);
            echo "</span>
            </div>";
        } else {
            // line 54
            echo "<div class=\"small-12 large-12 columns\">";
            // line 55
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 56
            echo "</div>";
        }
        // line 58
        echo "</div>";
    }

    // line 61
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 65), "")) : ("")) . " row"))]);
            // line 66
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 67), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 68), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 70
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", [], "any", false, false, false, 71), 'widget', ["datetime" => true]);
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", [], "any", false, false, false, 72), 'widget', ["datetime" => true]);
            echo "</div>
        </div>
    ";
        }
    }

    // line 77
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 79
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 81
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 81), "")) : ("")) . " row"))]);
            // line 82
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 83
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 85
            echo twig_replace_filter(($context["date_pattern"] ?? null), ["{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 86
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", [], "any", false, false, false, 86), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 87
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", [], "any", false, false, false, 87), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 88
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", [], "any", false, false, false, 88), 'widget')) . "</div>")]);
            // line 90
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 91
                echo "            </div>
        ";
            }
            // line 93
            echo "    ";
        }
    }

    // line 96
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 100), "")) : ("")) . " row"))]);
            // line 101
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 102
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 104
            echo "        ";
            if (($context["with_seconds"] ?? null)) {
                // line 105
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 105), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 112
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 112), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 122
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", [], "any", false, false, false, 122), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 127
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", [], "any", false, false, false, 127), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 134
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", [], "any", false, false, false, 134), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 139
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 140
                echo "            </div>
        ";
            }
            // line 142
            echo "    ";
        }
    }

    // line 145
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 146
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 147
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 147)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 147), "")) : ("")) . " error"))]);
            // line 148
            echo "    ";
        }
        // line 149
        echo "
    ";
        // line 150
        if (($context["multiple"] ?? null)) {
            // line 151
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["style" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "style", [], "any", true, true, false, 151)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "style", [], "any", false, false, false, 151), "")) : ("")) . " height: auto; background-image: none;"))]);
            // line 152
            echo "    ";
        }
        // line 153
        echo "
    ";
        // line 154
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 155
            $context["required"] = false;
        }
        // line 157
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 158
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 159
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</option>";
        }
        // line 161
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 162
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 163
            echo "            ";
            $context["render_preferred_choices"] = true;
            // line 164
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 165
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 166
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 169
        $context["options"] = ($context["choices"] ?? null);
        // line 170
        $context["render_preferred_choices"] = false;
        // line 171
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 172
        echo "</select>";
    }

    // line 175
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 176)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 176), "")) : ("")))) {
            // line 177
            echo "        <ul class=\"inline-list\">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 180
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 180)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 180), "")) : (""))]);
                // line 181
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </ul>
    ";
        } else {
            // line 185
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 187
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 188
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 188)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 188), "")) : (""))]);
                // line 189
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "        </div>
    ";
        }
    }

    // line 195
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 196
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 197
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 198
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 198)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 198), "")) : ("")) . " error"))]);
            // line 199
            echo "    ";
        }
        // line 200
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 201
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            echo "
    ";
        } else {
            // line 203
            echo "        <div class=\"checkbox\">
            ";
            // line 204
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            echo "
        </div>
    ";
        }
    }

    // line 209
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 211
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 212
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            echo "
    ";
        } else {
            // line 214
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 215
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 215)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 215), "")) : ("")) . " error"))]);
                // line 216
                echo "        ";
            }
            // line 217
            echo "        <div class=\"radio\">
            ";
            // line 218
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            echo "
        </div>
    ";
        }
    }

    // line 225
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 226
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 227
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 227)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 227), "")) : ("")) . " error"))]);
            // line 228
            echo "    ";
        }
        // line 229
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 232
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 233
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 234
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 234)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 234), "")) : ("")) . " error"))]);
            // line 235
            echo "    ";
        }
        // line 236
        echo "    ";
        // line 237
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 237)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 237), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 238
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 241
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 242
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 245
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 249
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 250
        if (($context["required"] ?? null)) {
            // line 251
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 251)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 251), "")) : ("")) . " required"))]);
            // line 252
            echo "    ";
        }
        // line 253
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 254
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 254)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 254), "")) : ("")) . " error"))]);
            // line 255
            echo "    ";
        }
        // line 256
        echo "    ";
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 257
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 258
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                 // line 259
($context["name"] ?? null), "%id%" =>                 // line 260
($context["id"] ?? null)]);
            } else {
                // line 263
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 266
        echo "    <label";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["label_attr"] ?? null)];
        if (!twig_test_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 266, $this->getSourceContext());
        }
        $__internal_compile_1 = twig_to_array($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        echo ">
        ";
        // line 267
        echo ($context["widget"] ?? null);
        echo "
        ";
        // line 268
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), ($context["label_translation_parameters"] ?? null), ($context["translation_domain"] ?? null)))), "html", null, true);
        echo "
    </label>";
    }

    // line 274
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 275
        $context["widget_attr"] = [];
        // line 276
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 277
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 279
        echo "<div";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 279)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 279), "")) : ("")) . " row"))])];
        if (!twig_test_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 279, $this->getSourceContext());
        }
        $__internal_compile_3 = twig_to_array($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        echo ">
        <div class=\"large-12 columns";
        // line 280
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">";
        // line 281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 285
        echo "</div>
    </div>";
    }

    // line 289
    public function block_choice_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 294
    public function block_date_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 299
    public function block_time_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 300
        $context["force_error"] = true;
        // line 301
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 304
    public function block_datetime_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 305
        $context["force_error"] = true;
        // line 306
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 309
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 310
        echo "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 310)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 310), "")) : ("")) . " row"))])];
        if (!twig_test_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 310, $this->getSourceContext());
        }
        $__internal_compile_5 = twig_to_array($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        echo ">
        <div class=\"large-12 columns";
        // line 311
        if ( !($context["valid"] ?? null)) {
            echo " error";
        }
        echo "\">
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>
    </div>";
    }

    // line 319
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 320
        echo "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => twig_array_merge(($context["row_attr"] ?? null), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 320)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 320), "")) : ("")) . " row"))])];
        if (!twig_test_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 320, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        echo ">
        <div class=\"large-12 columns";
        // line 321
        if ( !($context["valid"] ?? null)) {
            echo " error";
        }
        echo "\">
            ";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>
    </div>";
    }

    // line 331
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 332
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 333
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 334
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 335
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 335), "html", null, true);
                echo "
            ";
                // line 336
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 336)) {
                    echo ", ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 338,  841 => 336,  837 => 335,  820 => 334,  814 => 333,  812 => 332,  808 => 331,  801 => 324,  799 => 323,  797 => 322,  791 => 321,  778 => 320,  774 => 319,  767 => 314,  765 => 313,  763 => 312,  757 => 311,  744 => 310,  740 => 309,  735 => 306,  733 => 305,  729 => 304,  724 => 301,  722 => 300,  718 => 299,  713 => 296,  711 => 295,  707 => 294,  702 => 291,  700 => 290,  696 => 289,  691 => 285,  689 => 284,  687 => 283,  685 => 282,  683 => 281,  678 => 280,  665 => 279,  662 => 277,  660 => 276,  658 => 275,  654 => 274,  648 => 268,  644 => 267,  631 => 266,  627 => 263,  624 => 260,  623 => 259,  622 => 258,  620 => 257,  617 => 256,  614 => 255,  612 => 254,  609 => 253,  606 => 252,  603 => 251,  601 => 250,  597 => 249,  593 => 246,  589 => 245,  585 => 242,  581 => 241,  577 => 238,  574 => 237,  572 => 236,  569 => 235,  567 => 234,  565 => 233,  561 => 232,  557 => 229,  554 => 228,  552 => 227,  550 => 226,  546 => 225,  538 => 218,  535 => 217,  532 => 216,  530 => 215,  527 => 214,  521 => 212,  518 => 211,  516 => 210,  512 => 209,  504 => 204,  501 => 203,  495 => 201,  492 => 200,  489 => 199,  487 => 198,  484 => 197,  482 => 196,  478 => 195,  472 => 191,  465 => 189,  463 => 188,  461 => 187,  457 => 186,  452 => 185,  448 => 183,  441 => 181,  439 => 180,  437 => 179,  433 => 178,  430 => 177,  428 => 176,  424 => 175,  420 => 172,  418 => 171,  416 => 170,  414 => 169,  408 => 166,  406 => 165,  404 => 164,  401 => 163,  399 => 162,  397 => 161,  388 => 159,  386 => 158,  378 => 157,  375 => 155,  373 => 154,  370 => 153,  367 => 152,  365 => 151,  363 => 150,  360 => 149,  357 => 148,  355 => 147,  353 => 146,  349 => 145,  344 => 142,  340 => 140,  337 => 139,  329 => 134,  318 => 127,  310 => 122,  297 => 112,  286 => 105,  283 => 104,  277 => 102,  274 => 101,  271 => 100,  268 => 98,  266 => 97,  262 => 96,  257 => 93,  253 => 91,  251 => 90,  249 => 88,  248 => 87,  247 => 86,  246 => 85,  240 => 83,  237 => 82,  234 => 81,  231 => 79,  229 => 78,  225 => 77,  217 => 72,  213 => 71,  209 => 70,  204 => 68,  200 => 67,  197 => 66,  194 => 65,  191 => 63,  189 => 62,  185 => 61,  181 => 58,  178 => 56,  176 => 55,  174 => 54,  169 => 51,  165 => 49,  163 => 48,  161 => 47,  159 => 46,  157 => 45,  153 => 44,  149 => 41,  143 => 38,  140 => 37,  138 => 36,  135 => 35,  133 => 34,  131 => 33,  125 => 30,  122 => 29,  119 => 28,  117 => 27,  114 => 26,  110 => 25,  106 => 22,  104 => 21,  100 => 20,  96 => 17,  93 => 16,  91 => 15,  89 => 14,  85 => 13,  81 => 10,  78 => 9,  76 => 8,  74 => 7,  70 => 6,  59 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "foundation_5_layout.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
