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

/* registration/disclaimer.html.twig */
class __TwigTemplate_f4bd4b83a4476b133b5578ad3819690f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/disclaimer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo ":";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("disclaimer", [], "messages");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disclaimer", [], "messages");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disclaimer", [], "messages");
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

                    <h1>";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disclaimer", [], "messages");
        echo "</h1>

                    <p>Last updated 06/25/2021</p>

                    <p class=\"fs-6 fw-bold bg-light p-2\">WEBSITE DISCLAIMER</p>

                    <p style=\"text-align: justify;\">
                        The information provided by us on ";
        // line 39
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo " is for general informational purposes only.
                        <br>
                        All information on the Site is provided in good faith, however we make no representation or warranty of any kind, 
                        express or implied, regarding the accuracy, adequacy, validity, reliability, availability or completeness 
                        of any information on the Site.
                    </p>
                    <p style=\"text-align: justify;\">
                        UNDER NO CIRCUMSTANCE SHALL WE HAVE ANY LIABILITY TO YOU FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT 
                        OF THE USE OF THE SITE OR RELIANCE ON ANY INFORMATION PROVIDED ON THE SITE. 
                    </p>
                    <p>
                        YOUR USE OF THE SITE AND YOUR RELIANCE ON ANY INFORMATION ON THE SITE IS SOLELY AT YOUR OWN RISK.
                    </p>

                </div>

                ";
        // line 55
        $this->displayBlock('sidebar', $context, $blocks);
        // line 58
        echo "
            </div>
        </div>
    </section>
</main>

";
    }

    // line 55
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                    ";
        echo $this->extensions['App\twig\sidebarExtension']->getSidebar();
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "registration/disclaimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 56,  141 => 55,  131 => 58,  129 => 55,  110 => 39,  100 => 32,  83 => 18,  77 => 17,  71 => 14,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/disclaimer.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\registration\\disclaimer.html.twig");
    }
}
