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

/* @FMElfinder/Form/elfinder_widget.html.twig */
class __TwigTemplate_5dd616a0632d7d178230347dd1b79728 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'elfinder_widget' => [$this, 'block_elfinder_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('elfinder_widget', $context, $blocks);
    }

    public function block_elfinder_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo " data-type=\"elfinder-input-field\" />
    ";
        // line 3
        if ((($context["enable"] ?? null) && array_key_exists("instance", $context))) {
            // line 4
            echo "        <script type=\"text/javascript\" charset=\"utf-8\">
            live('click', '[data-type=\"elfinder-input-field\"][id=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"]', function (event) {
                console.warn('Test');
                var childWin = window.open(\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("elfinder", ["instance" => ($context["instance"] ?? null), "homeFolder" => ($context["homeFolder"] ?? null)]), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\", \"popupWindow\", \"height=450, width=900\");
            });
            function live (eventType, elementQuerySelector, cb) {
                document.addEventListener(eventType, function (event) {
                    var qs = document.querySelectorAll(elementQuerySelector);
                    if (qs) {
                        var el = event.target, index = -1;
                        while (el && ((index = Array.prototype.indexOf.call(qs, el)) === -1)) {
                            el = el.parentElement;
                        }
                        if (index > -1) {
                            cb.call(el, event);
                        }
                    }
                })
            }
            function setValue(value, element_id) {
                document.querySelector('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).value = value;
            }
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@FMElfinder/Form/elfinder_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 7,  61 => 5,  58 => 4,  56 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FMElfinder/Form/elfinder_widget.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Resources\\views\\Form\\elfinder_widget.html.twig");
    }
}
