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

/* contact/index.html.twig */
class __TwigTemplate_7c1705478804a9f9f7991bcc5d7198b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("contact us!", [], "messages");
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages");
        echo "</h2>

                <ol>
                    <li><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>
                    <li>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages");
        echo "</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"row d-flex justify-content-center mb-5\">
                <div class=\"col\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 31), "flashBag", [], "any", false, false, false, 31), "get", [0 => "successContact"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 32
            echo "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 33
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

                    <div class=\"card px-3 pt-3 pb-2 mb-4\">
                        <p class=\"lead\">
                            <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/contact.png"), "html", null, true);
        echo "\" alt=\"Contact\" class=\"img-fluid float-start me-5\">
                            <span class=\"fs-1 fw-bold\">";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact-us by mail", [], "messages");
        echo "</span>
                            <br><br>
                            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello there,", [], "messages");
        // line 45
        echo "                            <br>
                            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please use the form below to contact us.", [], "messages");
        echo " 
                            ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("We'll answer you as soon as possible.", [], "messages");
        // line 48
        echo "                            <span class=\"small fst-italic d-flex justify-content-end mt-3\">";
        echo twig_escape_filter($this->env, ($context["site_name_full"] ?? null), "html", null, true);
        echo "</span>
                        </p>
                    </div>

                    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["our_form"] ?? null), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"col\">
                                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo ":<br>
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["our_form"] ?? null), "name", [], "any", false, false, false, 56), 'row', ["label" => false]);
        echo "
                            </div>
                            <div class=\"col\">
                                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages");
        echo ":<br>
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["our_form"] ?? null), "email", [], "any", false, false, false, 60), 'row', ["label" => false]);
        echo "
                            </div>
                        </div>
                        ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your message", [], "messages");
        echo ":<br>
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["our_form"] ?? null), "message", [], "any", false, false, false, 64), 'row', ["label" => false]);
        echo "
                        ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please copy antispam code", [], "messages");
        echo ": 
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["our_form"] ?? null), "captcha", [], "any", false, false, false, 66), 'row', ["label" => false]);
        echo "
                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary mr-3 mb-4\">";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send message", [], "messages");
        echo "</button>
                            <button type=\"reset\" class=\"btn btn-secondary mb-4\">";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "messages");
        echo "</button>
                        </div>
                    ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["our_form"] ?? null), 'form_end');
        echo "

                </div>
                ";
        // line 74
        $this->displayBlock('sidebar', $context, $blocks);
        // line 77
        echo "            </div>
        </div>
    </section>
</main>

";
    }

    // line 74
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                    ";
        echo $this->extensions['App\twig\sidebarExtension']->getSidebar();
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 75,  219 => 74,  210 => 77,  208 => 74,  202 => 71,  197 => 69,  193 => 68,  188 => 66,  184 => 65,  180 => 64,  176 => 63,  170 => 60,  166 => 59,  160 => 56,  156 => 55,  150 => 52,  142 => 48,  140 => 47,  136 => 46,  133 => 45,  131 => 44,  126 => 42,  122 => 41,  116 => 37,  106 => 33,  103 => 32,  99 => 31,  83 => 18,  77 => 17,  71 => 14,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/index.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\contact\\index.html.twig");
    }
}
