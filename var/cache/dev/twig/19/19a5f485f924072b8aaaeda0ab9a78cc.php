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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_e77d5478eb0cd0a61ad8cdd95d13f064 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/confirmation_email.html.twig"));

        // line 1
        echo "<h3>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hi! Please confirm your email!", [], "messages");
        echo "</h3>

<p>
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please confirm your email address by clicking the following link", [], "messages");
        echo ": <br><br>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["signedUrl"]) || array_key_exists("signedUrl", $context) ? $context["signedUrl"] : (function () { throw new RuntimeError('Variable "signedUrl" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Confirm my Email", [], "messages");
        echo "</a>.
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This link will expire in", [], "messages");
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["expiresAtMessageKey"]) || array_key_exists("expiresAtMessageKey", $context) ? $context["expiresAtMessageKey"] : (function () { throw new RuntimeError('Variable "expiresAtMessageKey" does not exist.', 6, $this->source); })()), (isset($context["expiresAtMessageData"]) || array_key_exists("expiresAtMessageData", $context) ? $context["expiresAtMessageData"] : (function () { throw new RuntimeError('Variable "expiresAtMessageData" does not exist.', 6, $this->source); })()), "VerifyEmailBundle"), "html", null, true);
        echo ".<br>
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Then please sign-in.", [], "messages");
        // line 8
        echo "</p>

<p>
    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cheers!", [], "messages");
        // line 12
        echo "</p>
<p>
    ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["site_name_full"]) || array_key_exists("site_name_full", $context) ? $context["site_name_full"] : (function () { throw new RuntimeError('Variable "site_name_full" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "
</p>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  75 => 12,  73 => 11,  68 => 8,  66 => 7,  60 => 6,  54 => 5,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>{% trans %}Hi! Please confirm your email!{% endtrans %}</h3>

<p>
    {% trans %}Please confirm your email address by clicking the following link{% endtrans %}: <br><br>
    <a href=\"{{ signedUrl }}\">{% trans %}Confirm my Email{% endtrans %}</a>.
    {% trans %}This link will expire in{% endtrans %} {{ expiresAtMessageKey|trans(expiresAtMessageData, 'VerifyEmailBundle') }}.<br>
    {% trans %}Then please sign-in.{% endtrans %}
</p>

<p>
    {% trans %}Cheers!{% endtrans %}
</p>
<p>
    {{ site_name_full }}
</p>", "registration/confirmation_email.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\registration\\confirmation_email.html.twig");
    }
}
