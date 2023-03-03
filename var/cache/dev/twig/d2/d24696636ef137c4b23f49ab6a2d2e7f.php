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

/* article/show.html.twig */
class __TwigTemplate_53c0bfb4fc18b04d515e4cb14bb5a948 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>Blog</h2>

                <ol>
                    <li><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>
                    <li>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("article", [], "messages");
        echo "</li>
                    <li>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Single Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"row\">

                <div class=\"col-lg-8 entries\">

                    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            echo "                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 35
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                    <article class=\"entry entry-single\">

                        <div class=\"entry-img\">
                            <img src=\"../uploads/images/articles/";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 43, $this->source); })()), "image", [], "any", false, false, false, 43), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 43, $this->source); })()), "title", [], "any", false, false, false, 43), "html", null, true);
        echo "\" class=\"img-fluid\">
                        </div>

                        <h2 class=\"entry-title\">
                            ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 47, $this->source); })()), "title", [], "any", false, false, false, 47), "html", null, true);
        echo "
                        </h2>

                        <div class=\"entry-meta\">
                            <ul>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-person\"></i>
                                    <a href=\"\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 54, $this->source); })()), "author", [], "any", false, false, false, 54), "html", null, true);
        echo "</a>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-clock\"></i>
                                    <a href=\"\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 58, $this->source); })()), "createdAt", [], "any", false, false, false, 58), "medium", "short"), "html", null, true);
        echo "</a>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-chat-dots\"></i>
                                    ";
        // line 62
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 62, $this->source); })()), "comment", [], "any", false, false, false, 62)) <= 1)) {
            // line 63
            echo "                                        <a href=\"\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 63, $this->source); })()), "comment", [], "any", false, false, false, 63)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment", [], "messages");
            echo "</a>
                                    ";
        } else {
            // line 65
            echo "                                        <a href=\"\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 65, $this->source); })()), "comment", [], "any", false, false, false, 65)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comments", [], "messages");
            echo "</a>
                                    ";
        }
        // line 67
        echo "                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-eye\"></i>
                                    <a href=\"\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 70, $this->source); })()), "views", [], "any", false, false, false, 70), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("views", [], "messages");
        echo "</a>
                                </li>
                            </ul>
                            <ul class=\"mt-2\">
                                <li class=\"d-flex align-items-center\">
                                    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v8.0\" nonce=\"cjDMoHtB\"></script>
                                    <div class=\"fb-share-button\" data-href=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 76, $this->source); })()), "slug", [], "any", false, false, false, 76), "html", null, true);
        echo "\" data-layout=\"button\" data-size=\"small\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 76, $this->source); })()), "slug", [], "any", false, false, false, 76), "html", null, true);
        echo "&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Share", [], "messages");
        echo "</a></div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <div class=\"mt-2\">
                                        <a href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\" data-show-count=\"false\">Tweet</a>
                                        <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
                                    </div>
                                </li>
                                ";
        // line 84
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 85
            echo "                                    <li class=\"d-flex align-items-center\">
                                        <a class=\"btn btn-warning text-dark\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update", [], "messages");
            echo "</a>
                                    </li>
                                    <li class=\"d-flex align-items-center\">
                                        ";
            // line 89
            echo twig_include($this->env, $context, "article/_delete_form.html.twig");
            echo "
                                    </li>
                                ";
        }
        // line 92
        echo "                            </ul>
                        </div>

                        <div class=\"entry-content\">
                            ";
        // line 96
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 96, $this->source); })()), "content", [], "any", false, false, false, 96);
        echo "
                        </div>

                        <div class=\"entry-footer\">
                            <i class=\"bi bi-folder\"></i>
                            <ul class=\"cats\">
                                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 102, $this->source); })()), "category", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 103
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 103), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                            </ul>

                            <i class=\"bi bi-tags\"></i>
                            <ul class=\"tags\">
                                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 109, $this->source); })()), "tag", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 110
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["t"], "slug", [], "any", false, false, false, 110)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "title", [], "any", false, false, false, 110), "html", null, true);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                            </ul>
                        </div>

                    </article><!-- End blog entry -->

                    <div class=\"blog-author d-flex align-items-center\">
                        <img src=\"../uploads/images/users/";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 118, $this->source); })()), "author", [], "any", false, false, false, 118), "image", [], "any", false, false, false, 118), "html", null, true);
        echo "\" class=\"rounded-circle float-start\" style=\"max-width: 100px; width: 100%;\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 118, $this->source); })()), "author", [], "any", false, false, false, 118), "username", [], "any", false, false, false, 118), "html", null, true);
        echo "\">
                        <div>
                            <h5>";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted by", [], "messages");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 120, $this->source); })()), "author", [], "any", false, false, false, 120), "username", [], "any", false, false, false, 120), "html", null, true);
        echo "</h5>
                            <div class=\"social-links\">
                                ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 122, $this->source); })()), "author", [], "any", false, false, false, 122), "twitter", [], "any", false, false, false, 122)) {
            // line 123
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 123, $this->source); })()), "author", [], "any", false, false, false, 123), "twitter", [], "any", false, false, false, 123), "html", null, true);
            echo "\"><i class=\"bi bi-twitter\"></i></a>
                                ";
        }
        // line 125
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 125, $this->source); })()), "author", [], "any", false, false, false, 125), "facebook", [], "any", false, false, false, 125)) {
            // line 126
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 126, $this->source); })()), "author", [], "any", false, false, false, 126), "facebook", [], "any", false, false, false, 126), "html", null, true);
            echo "\"><i class=\"bi bi-facebook\"></i></a>
                                ";
        }
        // line 128
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 128, $this->source); })()), "author", [], "any", false, false, false, 128), "instagram", [], "any", false, false, false, 128)) {
            // line 129
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 129, $this->source); })()), "author", [], "any", false, false, false, 129), "instagram", [], "any", false, false, false, 129), "html", null, true);
            echo "\"><i class=\"bi bi-instagram\"></i></a>
                                ";
        }
        // line 131
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 131, $this->source); })()), "author", [], "any", false, false, false, 131), "linkedin", [], "any", false, false, false, 131)) {
            // line 132
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 132, $this->source); })()), "author", [], "any", false, false, false, 132), "linkedin", [], "any", false, false, false, 132), "html", null, true);
            echo "\"><i class=\"bi bi-linkedin\"></i></a>
                                ";
        }
        // line 134
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 134, $this->source); })()), "author", [], "any", false, false, false, 134), "github", [], "any", false, false, false, 134)) {
            // line 135
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 135, $this->source); })()), "author", [], "any", false, false, false, 135), "github", [], "any", false, false, false, 135), "html", null, true);
            echo "\"><i class=\"bi bi-github\"></i></a>
                                ";
        }
        // line 137
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 137, $this->source); })()), "author", [], "any", false, false, false, 137), "youtube", [], "any", false, false, false, 137)) {
            // line 138
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 138, $this->source); })()), "author", [], "any", false, false, false, 138), "youtube", [], "any", false, false, false, 138), "html", null, true);
            echo "\"><i class=\"bi bi-youtube\"></i></a>
                                ";
        }
        // line 140
        echo "                            </div>
                            <p>
                                ";
        // line 142
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 142, $this->source); })()), "author", [], "any", false, false, false, 142), "presentation", [], "any", false, false, false, 142);
        echo "
                            </p>
                        </div>
                    </div><!-- End blog author bio -->

                    <div class=\"blog-comments\">

                        <h4 class=\"comments-count\">
                            ";
        // line 150
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 150, $this->source); })()), "comment", [], "any", false, false, false, 150)) >= 2)) {
            // line 151
            echo "                            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 151, $this->source); })()), "comment", [], "any", false, false, false, 151)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("comments", [], "messages");
            // line 152
            echo "                            ";
        } else {
            // line 153
            echo "                            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 153, $this->source); })()), "comment", [], "any", false, false, false, 153)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("comment", [], "messages");
            // line 154
            echo "                            ";
        }
        // line 155
        echo "                        </h4>

                        <!-- Comments -->
                        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 158, $this->source); })()), "comment", [], "any", false, false, false, 158));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 159
            echo "
                        ";
            // line 160
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "parent", [], "any", false, false, false, 160) == null)) {
                // line 161
                echo "                        <div class=\"comment\">
                            <div class=\"d-flex\">
                                <div class=\"border px-3 pt-3\">
                                    <h5>
                                        ";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "nickname", [], "any", false, false, false, 165), "html", null, true);
                echo "
                                        <a href=\"#reply-comment\" data-reply data-id=";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 166), "html", null, true);
                echo " class=\"reply\">
                                            <i class=\"bi bi-reply-fill\"></i> ";
                // line 167
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reply", [], "messages");
                // line 168
                echo "                                        </a>
                                    </h5>
                                    <time datetime=\"";
                // line 170
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 170), "medium", "short"), "html", null, true);
                echo "\">
                                        ";
                // line 171
                echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 171), "medium", "short"), "html", null, true);
                echo "
                                    </time>
                                    <p>
                                        ";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 174);
                echo "
                                    </p>
                                </div>
                            </div>
                        </div>

                        ";
                // line 181
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "replie", [], "any", false, false, false, 181));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 182
                    echo "                        <div class=\"comment comment-reply\">
                            <div class=\"d-flex\">
                                <div class=\"border px-3 pt-3\">
                                    <h5>
                                        ";
                    // line 186
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "nickname", [], "any", false, false, false, 186), "html", null, true);
                    echo "
                                    </h5>
                                    <div>
                                        <time datetime=\"";
                    // line 189
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "createdAt", [], "any", false, false, false, 189), "medium", "short"), "html", null, true);
                    echo "\">
                                            ";
                    // line 190
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["reply"], "createdAt", [], "any", false, false, false, 190), "medium", "short"), "html", null, true);
                    echo "
                                        </time>
                                    </div>
                                    <p>
                                        ";
                    // line 194
                    echo twig_get_attribute($this->env, $this->source, $context["reply"], "content", [], "any", false, false, false, 194);
                    echo "
                                    </p>
                                </div>
                            </div>
                        </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "
                        ";
            }
            // line 202
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "
                        <div id=\"reply-comment\" class=\"reply-form mt-5\">
                            <h4>";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Leave a Reply", [], "messages");
        echo "</h4>
                            <p>";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your email address will not be published.", [], "messages");
        echo "</p>
                            ";
        // line 208
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 208, $this->source); })()), 'form_start');
        echo "
                                ";
        // line 210
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages");
        echo ":<br>
                                ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 211, $this->source); })()), "email", [], "any", false, false, false, 211), 'row', ["label" => false]);
        echo "
                                ";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo ":<br>
                                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 213, $this->source); })()), "nickname", [], "any", false, false, false, 213), 'row', ["label" => false]);
        echo "
                                ";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Content", [], "messages");
        echo ":<br>
                                ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 215, $this->source); })()), "content", [], "any", false, false, false, 215), 'row', ["label" => false]);
        echo "
                                <table class=\"mb-3\">
                                    <tr>
                                        <td width=\"5%\">
                                            ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 219, $this->source); })()), "rgpd", [], "any", false, false, false, 219), 'row', ["label" => false]);
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Agree terms of service", [], "messages");
        // line 223
        echo "                                        </td>
                                    </tr>
                                </table>
                                ";
        // line 226
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Copy antispam code", [], "messages");
        echo ":<br>
                                ";
        // line 227
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 227, $this->source); })()), "captcha", [], "any", false, false, false, 227), 'row', ["label" => false]);
        echo "
                                <div class=\"mt-2\">
                                    <button class=\"btn btn-sm btn-success\">";
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send message", [], "messages");
        echo "</button>
                                    <button class=\"btn btn-sm btn-secondary\" type=\"reset\">";
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "messages");
        echo "</button>
                                </div>
                            ";
        // line 232
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 232, $this->source); })()), 'form_end');
        echo "
                        </div>

                    </div><!-- End blog comments -->

                </div><!-- End blog entries list -->

                ";
        // line 239
        $this->displayBlock('sidebar', $context, $blocks);
        // line 242
        echo "
            </div>
        </div>
    </section>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 239
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 240
        echo "                    ";
        echo $this->extensions['App\twig\sidebarExtension']->getSidebar();
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 249
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 250
        echo "<script>
    window.onload = () => {
        // Listener event on each Reply button
        document.querySelectorAll(\"[data-reply]\").forEach(element => {
            element.addEventListener(\"click\", function () {
                document.querySelector(\"#comment_parentid\").value = this.dataset.id;
            });
        });
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 250,  644 => 249,  631 => 240,  621 => 239,  606 => 242,  604 => 239,  594 => 232,  589 => 230,  585 => 229,  580 => 227,  576 => 226,  571 => 223,  569 => 222,  563 => 219,  556 => 215,  552 => 214,  548 => 213,  544 => 212,  540 => 211,  535 => 210,  531 => 208,  527 => 207,  523 => 206,  519 => 204,  512 => 202,  508 => 200,  496 => 194,  489 => 190,  485 => 189,  479 => 186,  473 => 182,  468 => 181,  459 => 174,  453 => 171,  449 => 170,  445 => 168,  443 => 167,  439 => 166,  435 => 165,  429 => 161,  427 => 160,  424 => 159,  420 => 158,  415 => 155,  412 => 154,  407 => 153,  404 => 152,  399 => 151,  397 => 150,  386 => 142,  382 => 140,  376 => 138,  373 => 137,  367 => 135,  364 => 134,  358 => 132,  355 => 131,  349 => 129,  346 => 128,  340 => 126,  337 => 125,  331 => 123,  329 => 122,  322 => 120,  315 => 118,  307 => 112,  296 => 110,  292 => 109,  286 => 105,  275 => 103,  271 => 102,  262 => 96,  256 => 92,  250 => 89,  242 => 86,  239 => 85,  237 => 84,  222 => 76,  211 => 70,  206 => 67,  198 => 65,  190 => 63,  188 => 62,  181 => 58,  174 => 54,  164 => 47,  155 => 43,  149 => 39,  139 => 35,  136 => 34,  132 => 33,  114 => 18,  110 => 17,  104 => 16,  92 => 6,  82 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ site_name }}:{{ article.title }}{% endblock %}

{% block body %}
<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>Blog</h2>

                <ol>
                    <li><a href=\"{{ path('home') }}\">{% trans %}Home{% endtrans %}</a></li>
                    <li>{% trans %}article{% endtrans %}</li>
                    <li>{{ article.title }}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Single Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"row\">

                <div class=\"col-lg-8 entries\">

                    {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                        {{ message }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                    {% endfor %}

                    <article class=\"entry entry-single\">

                        <div class=\"entry-img\">
                            <img src=\"../uploads/images/articles/{{ article.image }}\" alt=\"{{ article.title }}\" class=\"img-fluid\">
                        </div>

                        <h2 class=\"entry-title\">
                            {{ article.title }}
                        </h2>

                        <div class=\"entry-meta\">
                            <ul>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-person\"></i>
                                    <a href=\"\">{{ article.author }}</a>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-clock\"></i>
                                    <a href=\"\">{{ article.createdAt|format_datetime('medium', 'short') }}</a>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-chat-dots\"></i>
                                    {% if (article.comment|length) <= 1  %}
                                        <a href=\"\">{{ article.comment|length }} {% trans %}Comment{% endtrans %}</a>
                                    {% else %}
                                        <a href=\"\">{{ article.comment|length }} {% trans %}Comments{% endtrans %}</a>
                                    {% endif %}
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-eye\"></i>
                                    <a href=\"\">{{ article.views }} {% trans %}views{% endtrans %}</a>
                                </li>
                            </ul>
                            <ul class=\"mt-2\">
                                <li class=\"d-flex align-items-center\">
                                    <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v8.0\" nonce=\"cjDMoHtB\"></script>
                                    <div class=\"fb-share-button\" data-href=\"{{ article.slug }}\" data-layout=\"button\" data-size=\"small\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u={{ article.slug }}&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">{% trans %}Share{% endtrans %}</a></div>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <div class=\"mt-2\">
                                        <a href=\"https://twitter.com/share?ref_src=twsrc%5Etfw\" class=\"twitter-share-button\" data-show-count=\"false\">Tweet</a>
                                        <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
                                    </div>
                                </li>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <li class=\"d-flex align-items-center\">
                                        <a class=\"btn btn-warning text-dark\" href=\"{{ path('article_edit', {'id': article.id}) }}\">{% trans %}Update{% endtrans %}</a>
                                    </li>
                                    <li class=\"d-flex align-items-center\">
                                        {{ include('article/_delete_form.html.twig') }}
                                    </li>
                                {% endif %}
                            </ul>
                        </div>

                        <div class=\"entry-content\">
                            {{ article.content|raw }}
                        </div>

                        <div class=\"entry-footer\">
                            <i class=\"bi bi-folder\"></i>
                            <ul class=\"cats\">
                                {% for c in article.category %}
                                <li><a href=\"{{ path('category_show', {'slug': c.slug}) }}\">{{ c.title }}</a></li>
                                {% endfor %}
                            </ul>

                            <i class=\"bi bi-tags\"></i>
                            <ul class=\"tags\">
                                {% for t in article.tag %}
                                <li><a href=\"{{ path('tag_show', {'slug': t.slug}) }}\">{{ t.title }}</a></li>
                                {% endfor %}
                            </ul>
                        </div>

                    </article><!-- End blog entry -->

                    <div class=\"blog-author d-flex align-items-center\">
                        <img src=\"../uploads/images/users/{{ article.author.image }}\" class=\"rounded-circle float-start\" style=\"max-width: 100px; width: 100%;\" alt=\"{{ article.author.username }}\">
                        <div>
                            <h5>{% trans %}Posted by{% endtrans %} {{ article.author.username }}</h5>
                            <div class=\"social-links\">
                                {% if article.author.twitter %}
                                <a href=\"{{ article.author.twitter }}\"><i class=\"bi bi-twitter\"></i></a>
                                {% endif %}
                                {% if article.author.facebook %}
                                <a href=\"{{ article.author.facebook }}\"><i class=\"bi bi-facebook\"></i></a>
                                {% endif %}
                                {% if article.author.instagram %}
                                <a href=\"{{ article.author.instagram }}\"><i class=\"bi bi-instagram\"></i></a>
                                {% endif %}
                                {% if article.author.linkedin %}
                                <a href=\"{{ article.author.linkedin }}\"><i class=\"bi bi-linkedin\"></i></a>
                                {% endif %}
                                {% if article.author.github %}
                                <a href=\"{{ article.author.github }}\"><i class=\"bi bi-github\"></i></a>
                                {% endif %}
                                {% if article.author.youtube %}
                                <a href=\"{{ article.author.youtube }}\"><i class=\"bi bi-youtube\"></i></a>
                                {% endif %}
                            </div>
                            <p>
                                {{ article.author.presentation|raw }}
                            </p>
                        </div>
                    </div><!-- End blog author bio -->

                    <div class=\"blog-comments\">

                        <h4 class=\"comments-count\">
                            {% if article.comment|length >= 2 %}
                            {{ article.comment|length }} {% trans %}comments{% endtrans %}
                            {% else %}
                            {{ article.comment|length }} {% trans %}comment{% endtrans %}
                            {% endif %}
                        </h4>

                        <!-- Comments -->
                        {% for comment in article.comment %}

                        {% if comment.parent == null %}
                        <div class=\"comment\">
                            <div class=\"d-flex\">
                                <div class=\"border px-3 pt-3\">
                                    <h5>
                                        {{ comment.nickname }}
                                        <a href=\"#reply-comment\" data-reply data-id={{ comment.id }} class=\"reply\">
                                            <i class=\"bi bi-reply-fill\"></i> {% trans %}Reply{% endtrans %}
                                        </a>
                                    </h5>
                                    <time datetime=\"{{ comment.createdAt|format_datetime('medium', 'short') }}\">
                                        {{ comment.createdAt|format_datetime('medium', 'short') }}
                                    </time>
                                    <p>
                                        {{ comment.content|raw }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        {# show reply #}
                        {% for reply in comment.replie %}
                        <div class=\"comment comment-reply\">
                            <div class=\"d-flex\">
                                <div class=\"border px-3 pt-3\">
                                    <h5>
                                        {{ reply.nickname }}
                                    </h5>
                                    <div>
                                        <time datetime=\"{{ reply.createdAt|format_datetime('medium', 'short') }}\">
                                            {{ reply.createdAt|format_datetime('medium', 'short') }}
                                        </time>
                                    </div>
                                    <p>
                                        {{ reply.content|raw }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        {% endfor %}

                        {% endif %}

                        {% endfor %}

                        <div id=\"reply-comment\" class=\"reply-form mt-5\">
                            <h4>{% trans %}Leave a Reply{% endtrans %}</h4>
                            <p>{% trans %}Your email address will not be published.{% endtrans %}</p>
                            {{ form_start(commentForm) }}
                                {#{ form_widget(commentForm) }#}
                                {% trans %}Email{% endtrans %}:<br>
                                {{ form_row(commentForm.email, {'label': false}) }}
                                {% trans %}Name{% endtrans %}:<br>
                                {{ form_row(commentForm.nickname, {'label': false}) }}
                                {% trans %}Content{% endtrans %}:<br>
                                {{ form_row(commentForm.content, {'label': false}) }}
                                <table class=\"mb-3\">
                                    <tr>
                                        <td width=\"5%\">
                                            {{ form_row(commentForm.rgpd, {'label': false}) }}
                                        </td>
                                        <td>
                                            {% trans %}Agree terms of service{% endtrans %}
                                        </td>
                                    </tr>
                                </table>
                                {% trans %}Copy antispam code{% endtrans %}:<br>
                                {{ form_row(commentForm.captcha, {'label': false}) }}
                                <div class=\"mt-2\">
                                    <button class=\"btn btn-sm btn-success\">{% trans %}Send message{% endtrans %}</button>
                                    <button class=\"btn btn-sm btn-secondary\" type=\"reset\">{% trans %}Reset{% endtrans %}</button>
                                </div>
                            {{ form_end(commentForm) }}
                        </div>

                    </div><!-- End blog comments -->

                </div><!-- End blog entries list -->

                {% block sidebar %}
                    {{ sidebar() }}
                {% endblock %}

            </div>
        </div>
    </section>
</main>
{% endblock %}

{% block javascripts %}
<script>
    window.onload = () => {
        // Listener event on each Reply button
        document.querySelectorAll(\"[data-reply]\").forEach(element => {
            element.addEventListener(\"click\", function () {
                document.querySelector(\"#comment_parentid\").value = this.dataset.id;
            });
        });
    }
</script>
{% endblock %}", "article/show.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\article\\show.html.twig");
    }
}
