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
class __TwigTemplate_ee511e7719dcfa8523eca15c77153958 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 33));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image", [], "any", false, false, false, 43), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 43), "html", null, true);
        echo "\" class=\"img-fluid\" height=\"400\" width=\"500\">
                        </div>

                        <h2 class=\"entry-title\">
                            ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 47), "html", null, true);
        echo "
                        </h2>

                        <div class=\"entry-meta\">
                            <ul>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-person\"></i>
                                    <a href=\"\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 54), "html", null, true);
        echo "</a>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-clock\"></i>
                                    <a href=\"\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "createdAt", [], "any", false, false, false, 58), "medium", "short"), "html", null, true);
        echo "</a>
                                </li>
                                <li class=\"d-flex align-items-center\">
                                    <i class=\"bi bi-chat-dots\"></i>
                                    ";
        // line 62
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comment", [], "any", false, false, false, 62)) <= 1)) {
            // line 63
            echo "                                        <a href=\"\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comment", [], "any", false, false, false, 63)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Comment", [], "messages");
            echo "</a>
                                    ";
        } else {
            // line 65
            echo "                                        <a href=\"\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comment", [], "any", false, false, false, 65)), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "views", [], "any", false, false, false, 70), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 76), "html", null, true);
        echo "\" data-layout=\"button\" data-size=\"small\"><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 76), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 86)]), "html", null, true);
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
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 96);
        echo "
                        </div>

                        <div class=\"entry-footer\">
                            <i class=\"bi bi-folder\"></i>
                            <ul class=\"cats\">
                                ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 102));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "tag", [], "any", false, false, false, 109));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 118), "image", [], "any", false, false, false, 118), "html", null, true);
        echo "\" class=\"rounded-circle float-start\" style=\"max-width: 100px; width: 100%;\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 118), "username", [], "any", false, false, false, 118), "html", null, true);
        echo "\">
                        <div>
                            <h5>";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted by", [], "messages");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 120), "username", [], "any", false, false, false, 120), "html", null, true);
        echo "</h5>
                            <div class=\"social-links\">
                                ";
        // line 122
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 122), "twitter", [], "any", false, false, false, 122)) {
            // line 123
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 123), "twitter", [], "any", false, false, false, 123), "html", null, true);
            echo "\"><i class=\"bi bi-twitter\"></i></a>
                                ";
        }
        // line 125
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 125), "facebook", [], "any", false, false, false, 125)) {
            // line 126
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 126), "facebook", [], "any", false, false, false, 126), "html", null, true);
            echo "\"><i class=\"bi bi-facebook\"></i></a>
                                ";
        }
        // line 128
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 128), "instagram", [], "any", false, false, false, 128)) {
            // line 129
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 129), "instagram", [], "any", false, false, false, 129), "html", null, true);
            echo "\"><i class=\"bi bi-instagram\"></i></a>
                                ";
        }
        // line 131
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 131), "linkedin", [], "any", false, false, false, 131)) {
            // line 132
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 132), "linkedin", [], "any", false, false, false, 132), "html", null, true);
            echo "\"><i class=\"bi bi-linkedin\"></i></a>
                                ";
        }
        // line 134
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 134), "github", [], "any", false, false, false, 134)) {
            // line 135
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 135), "github", [], "any", false, false, false, 135), "html", null, true);
            echo "\"><i class=\"bi bi-github\"></i></a>
                                ";
        }
        // line 137
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 137), "youtube", [], "any", false, false, false, 137)) {
            // line 138
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 138), "youtube", [], "any", false, false, false, 138), "html", null, true);
            echo "\"><i class=\"bi bi-youtube\"></i></a>
                                ";
        }
        // line 140
        echo "                            </div>
                            <p>
                                ";
        // line 142
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 142), "presentation", [], "any", false, false, false, 142);
        echo "
                            </p>
                        </div>
                    </div><!-- End blog author bio -->

                    <div class=\"blog-comments\">

                        <h4 class=\"comments-count\">
                            ";
        // line 150
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comment", [], "any", false, false, false, 150)) >= 2)) {
            // line 151
            echo "                            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comment", [], "any", false, false, false, 151)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("comments", [], "messages");
            // line 152
            echo "                            ";
        } else {
            // line 153
            echo "                            ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comment", [], "any", false, false, false, 153)), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "comment", [], "any", false, false, false, 158));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["commentForm"] ?? null), 'form_start');
        echo "
                                ";
        // line 210
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages");
        echo ":<br>
                                ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["commentForm"] ?? null), "email", [], "any", false, false, false, 211), 'row', ["label" => false]);
        echo "
                                ";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        echo ":<br>
                                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["commentForm"] ?? null), "nickname", [], "any", false, false, false, 213), 'row', ["label" => false]);
        echo "
                                ";
        // line 214
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Content", [], "messages");
        echo ":<br>
                                ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["commentForm"] ?? null), "content", [], "any", false, false, false, 215), 'row', ["label" => false]);
        echo "
                                <table class=\"mb-3\">
                                    <tr>
                                        <td width=\"5%\">
                                            ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["commentForm"] ?? null), "rgpd", [], "any", false, false, false, 219), 'row', ["label" => false]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["commentForm"] ?? null), "captcha", [], "any", false, false, false, 227), 'row', ["label" => false]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["commentForm"] ?? null), 'form_end');
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
    }

    // line 239
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 240
        echo "                    ";
        echo $this->extensions['App\twig\sidebarExtension']->getSidebar();
        echo "
                ";
    }

    // line 249
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  600 => 250,  596 => 249,  589 => 240,  585 => 239,  576 => 242,  574 => 239,  564 => 232,  559 => 230,  555 => 229,  550 => 227,  546 => 226,  541 => 223,  539 => 222,  533 => 219,  526 => 215,  522 => 214,  518 => 213,  514 => 212,  510 => 211,  505 => 210,  501 => 208,  497 => 207,  493 => 206,  489 => 204,  482 => 202,  478 => 200,  466 => 194,  459 => 190,  455 => 189,  449 => 186,  443 => 182,  438 => 181,  429 => 174,  423 => 171,  419 => 170,  415 => 168,  413 => 167,  409 => 166,  405 => 165,  399 => 161,  397 => 160,  394 => 159,  390 => 158,  385 => 155,  382 => 154,  377 => 153,  374 => 152,  369 => 151,  367 => 150,  356 => 142,  352 => 140,  346 => 138,  343 => 137,  337 => 135,  334 => 134,  328 => 132,  325 => 131,  319 => 129,  316 => 128,  310 => 126,  307 => 125,  301 => 123,  299 => 122,  292 => 120,  285 => 118,  277 => 112,  266 => 110,  262 => 109,  256 => 105,  245 => 103,  241 => 102,  232 => 96,  226 => 92,  220 => 89,  212 => 86,  209 => 85,  207 => 84,  192 => 76,  181 => 70,  176 => 67,  168 => 65,  160 => 63,  158 => 62,  151 => 58,  144 => 54,  134 => 47,  125 => 43,  119 => 39,  109 => 35,  106 => 34,  102 => 33,  84 => 18,  80 => 17,  74 => 16,  62 => 6,  58 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "article/show.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\article\\show.html.twig");
    }
}
