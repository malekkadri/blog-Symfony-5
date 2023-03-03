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

/* @GregwarCaptcha/captcha.html.twig */
class __TwigTemplate_2800c60f33d796d0350349e61e3d8507 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'captcha_widget' => [$this, 'block_captcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GregwarCaptcha/captcha.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@GregwarCaptcha/captcha.html.twig"));

        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_captcha_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "captcha_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "captcha_widget"));

        // line 2
        if ((isset($context["is_human"]) || array_key_exists("is_human", $context) ? $context["is_human"] : (function () { throw new RuntimeError('Variable "is_human" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "-
";
        } else {
            // line 5
            ob_start();
            // line 6
            echo "    <img class=\"captcha_image\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new RuntimeError('Variable "image_id" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_code"]) || array_key_exists("captcha_code", $context) ? $context["captcha_code"] : (function () { throw new RuntimeError('Variable "captcha_code" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\" alt=\"\" title=\"captcha\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_width"]) || array_key_exists("captcha_width", $context) ? $context["captcha_width"] : (function () { throw new RuntimeError('Variable "captcha_width" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, (isset($context["captcha_height"]) || array_key_exists("captcha_height", $context) ? $context["captcha_height"] : (function () { throw new RuntimeError('Variable "captcha_height" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\" />
    ";
            // line 7
            if ((isset($context["reload"]) || array_key_exists("reload", $context) ? $context["reload"] : (function () { throw new RuntimeError('Variable "reload" does not exist.', 7, $this->source); })())) {
                // line 8
                echo "    <script type=\"text/javascript\">
        function reload_";
                // line 9
                echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new RuntimeError('Variable "image_id" does not exist.', 9, $this->source); })()), "html", null, true);
                echo "() {
            var img = document.getElementById('";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new RuntimeError('Variable "image_id" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "');
            img.src = '";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["captcha_code"]) || array_key_exists("captcha_code", $context) ? $context["captcha_code"] : (function () { throw new RuntimeError('Variable "captcha_code" does not exist.', 11, $this->source); })()), "html", null, true);
                echo "?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["image_id"]) || array_key_exists("image_id", $context) ? $context["image_id"] : (function () { throw new RuntimeError('Variable "image_id" does not exist.', 14, $this->source); })()), "html", null, true);
                echo "();\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Renew", [], "gregwar_captcha"), "html", null, true);
                echo "</a>
    ";
            }
            // line 16
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'widget');
            echo "
";
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 5
            echo twig_spaceless($___internal_parse_2_);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@GregwarCaptcha/captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 5,  108 => 16,  101 => 14,  95 => 11,  91 => 10,  87 => 9,  84 => 8,  82 => 7,  71 => 6,  69 => 5,  65 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block captcha_widget %}
{% if is_human %}
-
{% else %}
{% apply spaceless %}
    <img class=\"captcha_image\" id=\"{{ image_id }}\" src=\"{{ captcha_code }}\" alt=\"\" title=\"captcha\" width=\"{{ captcha_width }}\" height=\"{{ captcha_height }}\" />
    {% if reload %}
    <script type=\"text/javascript\">
        function reload_{{ image_id }}() {
            var img = document.getElementById('{{ image_id }}');
            img.src = '{{ captcha_code }}?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_{{ image_id }}();\">{{ 'Renew'|trans({}, 'gregwar_captcha') }}</a>
    {% endif %}
    {{ form_widget(form) }}
{% endapply %}
{% endif %}
{% endblock %}
", "@GregwarCaptcha/captcha.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\gregwar\\captcha-bundle\\Resources\\views\\captcha.html.twig");
    }
}
