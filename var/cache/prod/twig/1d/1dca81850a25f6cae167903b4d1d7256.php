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
class __TwigTemplate_b2e0f67c659165c5815913ce6f4414c5 extends Template
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
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 3), 'row');
        echo "
    <div class=\"my-3\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 5), 'row');
        echo "
    </div>

    ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8) == "article_edit")) {
            // line 9
            echo "        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image", [], "any", false, false, false, 9))) {
                // line 10
                echo "            ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active image", [], "messages");
                echo ":<br>
            <img src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/articles/" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image", [], "any", false, false, false, 11))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
                echo "\" class=\"img-fluid mb-3\" 
            style=\"max-width: 350px; width: 100%;\">
            <p>
                <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete_image", ["id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 14)]), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 23), 'row');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 24), 'row');
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "tag", [], "any", false, false, false, 25), 'row');
        echo "
    <div class=\"mt-3\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "is_active", [], "any", false, false, false, 27), 'row');
        echo "
    </div>

    <div class=\"mt-4\">
        <button class=\"btn btn-sm btn-success\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Save")) : ("Save"))), "html", null, true);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
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
        return array (  129 => 35,  122 => 33,  118 => 32,  114 => 31,  107 => 27,  102 => 25,  98 => 24,  94 => 23,  91 => 22,  88 => 21,  84 => 19,  82 => 18,  79 => 17,  71 => 14,  63 => 11,  58 => 10,  55 => 9,  53 => 8,  47 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "article/_form.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\article\\_form.html.twig");
    }
}
