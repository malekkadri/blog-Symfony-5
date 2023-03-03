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
class __TwigTemplate_9f498d67b86b652eba3b2b7e4246f919 extends Template
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
        // line 1
        $this->displayBlock('captcha_widget', $context, $blocks);
    }

    public function block_captcha_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        if (($context["is_human"] ?? null)) {
            // line 3
            echo "-
";
        } else {
            // line 5
            ob_start(function () { return ''; });
            // line 6
            echo "    <img class=\"captcha_image\" id=\"";
            echo twig_escape_filter($this->env, ($context["image_id"] ?? null), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, ($context["captcha_code"] ?? null), "html", null, true);
            echo "\" alt=\"\" title=\"captcha\" width=\"";
            echo twig_escape_filter($this->env, ($context["captcha_width"] ?? null), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, ($context["captcha_height"] ?? null), "html", null, true);
            echo "\" />
    ";
            // line 7
            if (($context["reload"] ?? null)) {
                // line 8
                echo "    <script type=\"text/javascript\">
        function reload_";
                // line 9
                echo twig_escape_filter($this->env, ($context["image_id"] ?? null), "html", null, true);
                echo "() {
            var img = document.getElementById('";
                // line 10
                echo twig_escape_filter($this->env, ($context["image_id"] ?? null), "html", null, true);
                echo "');
            img.src = '";
                // line 11
                echo twig_escape_filter($this->env, ($context["captcha_code"] ?? null), "html", null, true);
                echo "?n=' + (new Date()).getTime();
        }
    </script>
    <a class=\"captcha_reload\" href=\"javascript:reload_";
                // line 14
                echo twig_escape_filter($this->env, ($context["image_id"] ?? null), "html", null, true);
                echo "();\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Renew", [], "gregwar_captcha"), "html", null, true);
                echo "</a>
    ";
            }
            // line 16
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 5
            echo twig_spaceless($___internal_parse_0_);
        }
    }

    public function getTemplateName()
    {
        return "@GregwarCaptcha/captcha.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 5,  90 => 16,  83 => 14,  77 => 11,  73 => 10,  69 => 9,  66 => 8,  64 => 7,  53 => 6,  51 => 5,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@GregwarCaptcha/captcha.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\gregwar\\captcha-bundle\\Resources\\views\\captcha.html.twig");
    }
}
