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

/* comment/show.html.twig */
class __TwigTemplate_026c9ddb3fde52295661e048f3747e69 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base-admin.html.twig", "comment/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment", [], "messages");
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment", [], "messages");
        echo "</h2>

                <ol>
                    <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>
                    <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Admin</a></li>
                    <li>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment index", [], "messages");
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
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment", [], "messages");
        echo "</h1>

                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Content", [], "messages");
        echo "</th>
                                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "content", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Is_active", [], "messages");
        echo "</th>
                                <td>";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "isActive", [], "any", false, false, false, 44)) ? ("Yes") : ("No"));
        echo "</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nickname", [], "messages");
        echo "</th>
                                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "nickname", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created_at", [], "messages");
        echo "</th>
                                <td>";
        // line 56
        ((twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "createdAt", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "createdAt", [], "any", false, false, false, 56), "medium", "short"), "html", null, true))) : (print ("")));
        echo "</td>
                            </tr>
                            <tr>
                                <th>Rgpd</th>
                                <td>";
        // line 60
        echo ((twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "rgpd", [], "any", false, false, false, 60)) ? ("Yes") : ("No"));
        echo "</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class=\"row mt-5\">
                        <div class=\"col\">
                            <a class=\"btn btn-sm btn-success\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["comment"] ?? null), "id", [], "any", false, false, false, 67)]), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit", [], "messages");
        echo "</a>
                            <a class=\"btn btn-sm btn-primary\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_index");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("back to list", [], "messages");
        echo "</a>
                        </div>
                        <div class=\"col d-flex justify-content-end\">
                            ";
        // line 71
        echo twig_include($this->env, $context, "comment/_delete_form.html.twig");
        echo "
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "comment/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 71,  180 => 68,  174 => 67,  164 => 60,  157 => 56,  153 => 55,  147 => 52,  143 => 51,  137 => 48,  130 => 44,  126 => 43,  120 => 40,  116 => 39,  110 => 36,  101 => 30,  85 => 17,  81 => 16,  75 => 15,  69 => 12,  60 => 5,  56 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "comment/show.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\comment\\show.html.twig");
    }
}
