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

/* article/_form.html.twig */
class __TwigTemplate_b126eb3c58d2eec8a460f464644dab75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), 'row');
        echo "
    <div class=\"my-3\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "content", [], "any", false, false, false, 5), 'row');
        echo "
    </div>

    ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8) == "article_edit")) {
            // line 9
            echo "        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9))) {
                // line 10
                echo "            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active image", [], "messages");
                echo ":<br>
            <img src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/articles/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
                echo "\" class=\"img-fluid mb-3\" 
            style=\"max-width: 350px; width: 100%;\">
            <p>
                <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete_image", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete image", [], "messages");
                echo "</a>
            </p>
        ";
            } else {
                // line 17
                echo "            <div class=\"text-white bg-danger p-2 mb-2 text-center\">
                <i class=\"bi bi-exclamation-lg\"></i> ";
                // line 18
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No active image for this article. Please upload one.", [], "messages");
                // line 19
                echo "            </div>
        ";
            }
            // line 21
            echo "    ";
        }
        // line 22
        echo "    
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "category", [], "any", false, false, false, 24), 'row');
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "tag", [], "any", false, false, false, 25), 'row');
        echo "
    <div class=\"mt-3\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "is_active", [], "any", false, false, false, 27), 'row');
        echo "
    </div>

    <div class=\"mt-4\">
        <button class=\"btn btn-sm btn-success\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 31, $this->source); })()), "Save")) : ("Save"))), "html", null, true);
        echo "</button> 
        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "messages");
        echo "</button> 
        <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back to list", [], "messages");
        echo "</a>
    </div>
";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "article/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 35,  128 => 33,  124 => 32,  120 => 31,  113 => 27,  108 => 25,  104 => 24,  100 => 23,  97 => 22,  94 => 21,  90 => 19,  88 => 18,  85 => 17,  77 => 14,  69 => 11,  64 => 10,  61 => 9,  59 => 8,  53 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    {#{ form_widget(form) }#}
    {{ form_row(form.title) }}
    <div class=\"my-3\">
        {{ form_row(form.content) }}
    </div>

    {% if app.request.get('_route') == 'article_edit' %}
        {% if article.image is not empty %}
            {% trans %}Active image{% endtrans %}:<br>
            <img src=\"{{ asset('uploads/images/articles/' ~ article.image) }}\" alt=\"{{ article.title }}\" class=\"img-fluid mb-3\" 
            style=\"max-width: 350px; width: 100%;\">
            <p>
                <a href=\"{{ path('article_delete_image', {'id': article.id}) }}\" class=\"btn btn-sm btn-danger\">{% trans %}Delete image{% endtrans %}</a>
            </p>
        {% else %}
            <div class=\"text-white bg-danger p-2 mb-2 text-center\">
                <i class=\"bi bi-exclamation-lg\"></i> {% trans %}No active image for this article. Please upload one.{% endtrans %}
            </div>
        {% endif %}
    {% endif %}
    
    {{ form_row(form.image) }}
    {{ form_row(form.category) }}
    {{ form_row(form.tag) }}
    <div class=\"mt-3\">
        {{ form_row(form.is_active) }}
    </div>

    <div class=\"mt-4\">
        <button class=\"btn btn-sm btn-success\">{{ button_label|default('Save')|trans }}</button> 
        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">{% trans %}Reset{% endtrans %}</button> 
        <a class=\"btn btn-sm btn-primary\" href=\"{{ path('article_index') }}\">{% trans %}back to list{% endtrans %}</a>
    </div>
{{ form_end(form) }}
", "article/_form.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\article\\_form.html.twig");
    }
}
