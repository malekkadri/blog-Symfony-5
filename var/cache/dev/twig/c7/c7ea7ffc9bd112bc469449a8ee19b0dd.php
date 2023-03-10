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

/* registration/policy.html.twig */
class __TwigTemplate_f178706b4b64a5cb5cb8ad62ef7a5ac2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/policy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/policy.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/policy.html.twig", 1);
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
        echo ": ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pravacy policy", [], "messages");
        
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
        echo "
<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Policy", [], "messages");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Policy", [], "messages");
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

                    <h2>PRIVACY NOTICE</h2>

                    <p>Last updated: Jun 28, 2021</p>

                    <p>
                        Thank you for choosing to be part of our community at ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["site_name_full"]) || array_key_exists("site_name_full", $context) ? $context["site_name_full"] : (function () { throw new RuntimeError('Variable "site_name_full" does not exist.', 37, $this->source); })()), "html", null, true);
        echo ". We are committed to protecting your 
                        personal information and your right to privacy. If you have any questions or concerns about this privacy notice, 
                        or our practices with regards to your personal information, please contact us at ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["site_mail"]) || array_key_exists("site_mail", $context) ? $context["site_mail"] : (function () { throw new RuntimeError('Variable "site_mail" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "
                    </p>
                    <p>
                        When you and more generally, use any of our services (the \"Services\", which include the ), 
                        we appreciate that you are trusting us with your personal information. We take your privacy very seriously. 
                        In this privacy notice, we seek to explain to you in the clearest way possible what information we collect, 
                        how we use it and what rights you have in relation to it. We hope you take some time to read through it carefully, 
                        as it is important. If there are any terms in this privacy notice that you do not agree with, please discontinue 
                        use of our Services immediately.
                    </p>
                    <p>
                        This privacy notice applies to all information collected through our Services (which, as described above, includes our ), 
                        as well as, any related services, sales, marketing or events.
                    </p>
                    <p>
                        Please read this privacy notice carefully as it will help you understand what we do with the information that we collect.
                    </p>

                    <p>
                        <b>TABLE OF CONTENTS</b>
                        <br>
                        1. WHAT INFORMATION DO WE COLLECT?<br>
                        2. WILL YOUR INFORMATION BE SHARED WITH ANYONE?<br>
                        3. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?<br>
                        4. HOW DO WE HANDLE YOUR SOCIAL LOGINS?<br>
                        5. IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?<br>
                        6. HOW LONG DO WE KEEP YOUR INFORMATION?<br>
                        7. DO WE COLLECT INFORMATION FROM MINORS?<br>
                        8. WHAT ARE YOUR PRIVACY RIGHTS?<br>
                        9. CONTROLS FOR DO-NOT-TRACK FEATURES<br>
                        10. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?<br>
                        11. DO WE MAKE UPDATES TO THIS NOTICE?<br>
                        12. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?<br>
                        13. HOW CAN YOU REVIEW, UPDATE OR DELETE THE DATA WE COLLECT FROM YOU?
                    </p>

                    <p>
                        <b>1. WHAT INFORMATION DO WE COLLECT?</b>
                        <br>
                        Personal information you disclose to us<br>
                        In Short:  We collect personal information that you provide to us.<br>
                        We collect personal information that you voluntarily provide to us when you register on the express an interest in 
                        obtaining information about us or our products and Services, when you participate in activities on the 
                        (such as by posting messages in our online forums or entering competitions, contests or giveaways) or 
                        otherwise when you contact us.
                        <br>
                        The personal information that we collect depends on the context of your interactions with us and the, 
                        the choices you make and the products and features you use. The personal information we collect may include the following:
                        <br>
                        Social Media Login Data. We may provide you with the option to register with us using your existing social 
                        media account details, like your Facebook, Twitter or other social media account. 
                        If you choose to register in this way, we will collect the information described 
                        in the section called \"HOW DO WE HANDLE YOUR SOCIAL LOGINS?\" below.
                        <br>
                        All personal information that you provide to us must be true, complete and accurate, 
                        and you must notify us of any changes to such personal information.
                        <br>
                        <b>Information automatically collected</b>
                        <br>
                        In Short:  Some information ??? such as your Internet Protocol (IP) address and/or browser and device characteristics ??? 
                        is collected automatically when you visit our.
                        <br>
                        We automatically collect certain information when you visit, use or navigate the . This information does not 
                        reveal your specific identity (like your name or contact information) but may include device and usage information, 
                        such as your IP address, browser and device characteristics, operating system, language preferences, referring 
                        URLs, device name, country, location, information about how and when you use our and other technical information. 
                        This information is primarily needed to maintain the security and operation of our , 
                        and for our internal analytics and reporting purposes.
                        <br>
                        Like many businesses, we also collect information through cookies and similar technologies.
                    </p>
                    <p>
                        <b>2. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</b>
                        <br>
                        In Short:  We only share information with your consent, to comply with laws, 
                        to provide you with services, to protect your rights, or to fulfill business obligations.
                        <br>
                        We may process or share your data that we hold based on the following legal basis:
                        <br>
                        More specifically, we may need to process your data or share your personal information in the following situations:
                        <br>
                        - Business Transfers. We may share or transfer your information in connection with, or during negotiations of, 
                        any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.
                        <br>
                        - Affiliates. We may share your information with our affiliates, in which case we will require those 
                        affiliates to honor this privacy notice. Affiliates include our parent company and any subsidiaries, 
                        joint venture partners or other companies that we control or that are under common control with us.
                        <br>
                        - Business Partners. We may share your information with our business partners to offer you certain products, services or promotions.
                        <br>
                        - Other Users. When you share personal information or otherwise interact with public areas of the , 
                        such personal information may be viewed by all users and may be publicly made available outside the in perpetuity. 
                        If you interact with other users of our and register for our through a social network (such as Facebook), 
                        your contacts on the social network will see your name, profile photo, and descriptions of your activity. 
                        Similarly, other users will be able to view descriptions of your activity, communicate with you within our , 
                        and view your profile.
                    </p>
                    <p>
                        <b>3. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</b>
                        <br>
                        In Short:  We may use cookies and other tracking technologies to collect and store your information.
                        <br>
                        We may use cookies and similar tracking technologies (like web beacons and pixels) to access or store information. 
                        Specific information about how we use such technologies and how you can refuse certain cookies is set out in our Cookie Notice.
                    </p>
                    <p>
                        <b>4. HOW DO WE HANDLE YOUR SOCIAL LOGINS?</b>  
                        <br>
                        In Short:  If you choose to register or log in to our services using a social media account, 
                        we may have access to certain information about you.
                        <br>
                        Our offers you the ability to register and login using your third-party social media account details (like 
                        your Facebook or Twitter logins). Where you choose to do this, we will receive certain profile 
                        information about you from your social media provider. The profile information we receive may vary 
                        depending on the social media provider concerned, but will often include your name, email address, 
                        friends list, profile picture as well as other information you choose to make public on such social 
                        media platform.
                        <br>
                        We will use the information we receive only for the purposes that are described in this privacy notice 
                        or that are otherwise made clear to you on the relevant . Please note that we do not control, and are 
                        not responsible for, other uses of your personal information by your third-party social media provider. 
                        We recommend that you review their privacy notice to understand how they collect, use and share your 
                        personal information, and how you can set your privacy preferences on their sites and apps.
                    </p>
                    <p>
                        <b>5. IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?</b>   
                        <br>
                        In Short:  We may transfer, store, and process your information in countries other than your own.
                        <br>
                        Our servers are located in. If you are accessing our  from outside, please be aware that your information may 
                        be transferred to, stored, and processed by us in our facilities and by those third parties with whom we may 
                        share your personal information (see \"WILL YOUR INFORMATION BE SHARED WITH ANYONE?\" above), in and other countries.
                        <br>
                        If you are a resident in the European Economic Area (EEA) or United Kingdom (UK), then these countries 
                        may not necessarily have data protection laws or other similar laws as comprehensive as those in your 
                        country. We will however take all necessary measures to protect your personal information in accordance 
                        with this privacy notice and applicable law.
                    </p>
                    <p>
                        <b>6. HOW LONG DO WE KEEP YOUR INFORMATION?</b>
                        <br>
                        In Short:  We keep your information for as long as necessary to fulfill the purposes outlined in this 
                        privacy notice unless otherwise required by law.
                        <br>
                        We will only keep your personal information for as long as it is necessary for the purposes set 
                        out in this privacy notice, unless a longer retention period is required or permitted by law 
                        (such as tax, accounting or other legal requirements). No purpose in this notice will require 
                        us keeping your personal information for longer than 6 months.
                        <br>
                        When we have no ongoing legitimate business need to process your personal information, 
                        we will either delete or anonymize such information, or, if this is not possible (for example, 
                        because your personal information has been stored in backup archives), then we will securely 
                        store your personal information and isolate it from any further processing until deletion is possible.
                    </p>
                    <p>
                        <b>7. DO WE COLLECT INFORMATION FROM MINORS?</b>
                        <br>
                        In Short:  We do not knowingly collect data from or market to children under 18 years of age.
                        <br>
                        We do not knowingly solicit data from or market to children under 18 years of age. By using the , 
                        you represent that you are at least 18 or that you are the parent or guardian of such a minor and 
                        consent to such minor dependent???s use of the . If we learn that personal information from users less 
                        than 18 years of age has been collected, we will deactivate the account and take reasonable measures 
                        to promptly delete such data from our records. If you become aware of any data we may have collected 
                        from children under age 18, please contact us at ";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["site_mail"]) || array_key_exists("site_mail", $context) ? $context["site_mail"] : (function () { throw new RuntimeError('Variable "site_mail" does not exist.', 203, $this->source); })()), "html", null, true);
        echo "
                    </p>
                    <p>
                        <b>8. WHAT ARE YOUR PRIVACY RIGHTS?</b>
                        <br>
                        In Short:  You may review, change, or terminate your account at any time.
                        <br>
                        If you are a resident in the EEA or UK and you believe we are unlawfully processing your personal information, 
                        you also have the right to complain to your local data protection supervisory authority. 
                        You can find their contact details here: http://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm.
                        <br>
                        If you are a resident in Switzerland, the contact details for the data protection authorities are available 
                        here: https://www.edoeb.admin.ch/edoeb/en/home.html.
                        <br>
                        Account Information
                        <br>
                        If you would at any time like to review or change the information in your account or terminate your account, you can:
                        Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, we may retain some information in our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce our Terms of Use and/or comply with applicable legal requirements.
                        <br>
                        Opting out of email marketing: You can unsubscribe from our marketing email list at any time by clicking on the unsubscribe link in the emails that we send or by contacting us using the details provided below. You will then be removed from the marketing email list ??? however, we may still communicate with you, for example to send you service-related emails that are necessary for the administration and use of your account, to respond to service requests, or for other non-marketing purposes. To otherwise opt-out, you may:
                    </p>
                    <p>
                        <b>9. CONTROLS FOR DO-NOT-TRACK FEATURES</b>
                        <br>
                        Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track (\"DNT\") feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. At this stage no uniform technology standard for recognizing and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this privacy notice. 
                    </p>
                    <p>
                        <b>10. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</b>
                        <br>
                        In Short:  Yes, if you are a resident of California, you are granted specific rights regarding access to your personal information.
                        <br>
                        California Civil Code Section 1798.83, also known as the \"Shine The Light\" law, permits our users who are 
                        California residents to request and obtain from us, once a year and free of charge, information about categories of 
                        personal information (if any) we disclosed to third parties for direct marketing purposes and the names and 
                        addresses of all third parties with which we shared personal information in the immediately preceding calendar 
                        year. If you are a California resident and would like to make such a request, please submit your request in 
                        writing to us using the contact information provided below.
                        <br>
                        If you are under 18 years of age, reside in California, and have a registered account with , you have the 
                        right to request removal of unwanted data that you publicly post on the . To request removal of such data, 
                        please contact us using the contact information provided below, and include the email address associated 
                        with your account and a statement that you reside in California. We will make sure the data is not publicly 
                        displayed on the , but please be aware that the data may not be completely or comprehensively removed from 
                        all our systems (e.g. backups, etc.).
                    </p>
                    <p>
                        <b>11. DO WE MAKE UPDATES TO THIS NOTICE?</b> 
                        <br>
                        In Short:  Yes, we will update this notice as necessary to stay compliant with relevant laws.
                        <br>
                        We may update this privacy notice from time to time. The updated version will be indicated by an updated 
                        \"Revised\" date and the updated version will be effective as soon as it is accessible. If we 
                        make material changes to this privacy notice, we may notify you either by prominently posting a 
                        notice of such changes or by directly sending you a notification. We encourage you to review this 
                        privacy notice frequently to be informed of how we are protecting your information.
                    </p>
                    <p>
                        <b>12. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</b> 
                        <br>
                        If you have questions or comments about this notice, you may email us at ";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["site_mail"]) || array_key_exists("site_mail", $context) ? $context["site_mail"] : (function () { throw new RuntimeError('Variable "site_mail" does not exist.', 262, $this->source); })()), "html", null, true);
        echo " or by post to:
                        <br>
                        ";
        // line 264
        echo twig_escape_filter($this->env, (isset($context["site_name"]) || array_key_exists("site_name", $context) ? $context["site_name"] : (function () { throw new RuntimeError('Variable "site_name" does not exist.', 264, $this->source); })()), "html", null, true);
        echo "
                        <br>
                        ";
        // line 266
        echo twig_escape_filter($this->env, (isset($context["site_address1"]) || array_key_exists("site_address1", $context) ? $context["site_address1"] : (function () { throw new RuntimeError('Variable "site_address1" does not exist.', 266, $this->source); })()), "html", null, true);
        echo "
                        <br>
                        ";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["site_address_city"]) || array_key_exists("site_address_city", $context) ? $context["site_address_city"] : (function () { throw new RuntimeError('Variable "site_address_city" does not exist.', 268, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["site_address_code"]) || array_key_exists("site_address_code", $context) ? $context["site_address_code"] : (function () { throw new RuntimeError('Variable "site_address_code" does not exist.', 268, $this->source); })()), "html", null, true);
        echo "
                        <br>
                        ";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["site_address_country"]) || array_key_exists("site_address_country", $context) ? $context["site_address_country"] : (function () { throw new RuntimeError('Variable "site_address_country" does not exist.', 270, $this->source); })()), "html", null, true);
        echo "
                    </p>
                    <p>
                        <b>13. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</b>
                        <br>
                        Based on the applicable laws of your country, you may have the right to request access to the personal 
                        information we collect from you, change that information, or delete it in some circumstances. 
                        To request to review, update, or delete your personal information, please submit a request form by clicking here.
                        This privacy policy was created using Termly???s Privacy Policy Generator.
                    </p>
                </div>

                ";
        // line 282
        $this->displayBlock('sidebar', $context, $blocks);
        // line 285
        echo "
            </div>
        </div>
    </section>
</main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 282
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 283
        echo "                    ";
        echo $this->extensions['App\twig\sidebarExtension']->getSidebar();
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/policy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 283,  424 => 282,  408 => 285,  406 => 282,  391 => 270,  384 => 268,  379 => 266,  374 => 264,  369 => 262,  307 => 203,  140 => 39,  135 => 37,  113 => 18,  107 => 17,  101 => 14,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ site_name }}: {% trans %}Pravacy policy{% endtrans %}{% endblock %}

{% block body %}

<main id=\"main\">

    <!-- ======= Blog Section ======= -->
    <section class=\"breadcrumbs\">
        <div class=\"container\">

            <div class=\"d-flex justify-content-between align-items-center\">
                <h2>{% trans %}Policy{% endtrans %}</h2>

                <ol>
                    <li><a href=\"{{ path('home') }}\">{% trans %}Home{% endtrans %}</a></li>
                    <li>{% trans %}Policy{% endtrans %}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id=\"blog\" class=\"blog\">
        <div class=\"container\" data-aos=\"fade-up\">

            <div class=\"row d-flex justify-content-center mb-5\">
                <div class=\"col\">

                    <h2>PRIVACY NOTICE</h2>

                    <p>Last updated: Jun 28, 2021</p>

                    <p>
                        Thank you for choosing to be part of our community at {{ site_name_full }}. We are committed to protecting your 
                        personal information and your right to privacy. If you have any questions or concerns about this privacy notice, 
                        or our practices with regards to your personal information, please contact us at {{ site_mail }}
                    </p>
                    <p>
                        When you and more generally, use any of our services (the \"Services\", which include the ), 
                        we appreciate that you are trusting us with your personal information. We take your privacy very seriously. 
                        In this privacy notice, we seek to explain to you in the clearest way possible what information we collect, 
                        how we use it and what rights you have in relation to it. We hope you take some time to read through it carefully, 
                        as it is important. If there are any terms in this privacy notice that you do not agree with, please discontinue 
                        use of our Services immediately.
                    </p>
                    <p>
                        This privacy notice applies to all information collected through our Services (which, as described above, includes our ), 
                        as well as, any related services, sales, marketing or events.
                    </p>
                    <p>
                        Please read this privacy notice carefully as it will help you understand what we do with the information that we collect.
                    </p>

                    <p>
                        <b>TABLE OF CONTENTS</b>
                        <br>
                        1. WHAT INFORMATION DO WE COLLECT?<br>
                        2. WILL YOUR INFORMATION BE SHARED WITH ANYONE?<br>
                        3. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?<br>
                        4. HOW DO WE HANDLE YOUR SOCIAL LOGINS?<br>
                        5. IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?<br>
                        6. HOW LONG DO WE KEEP YOUR INFORMATION?<br>
                        7. DO WE COLLECT INFORMATION FROM MINORS?<br>
                        8. WHAT ARE YOUR PRIVACY RIGHTS?<br>
                        9. CONTROLS FOR DO-NOT-TRACK FEATURES<br>
                        10. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?<br>
                        11. DO WE MAKE UPDATES TO THIS NOTICE?<br>
                        12. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?<br>
                        13. HOW CAN YOU REVIEW, UPDATE OR DELETE THE DATA WE COLLECT FROM YOU?
                    </p>

                    <p>
                        <b>1. WHAT INFORMATION DO WE COLLECT?</b>
                        <br>
                        Personal information you disclose to us<br>
                        In Short:  We collect personal information that you provide to us.<br>
                        We collect personal information that you voluntarily provide to us when you register on the express an interest in 
                        obtaining information about us or our products and Services, when you participate in activities on the 
                        (such as by posting messages in our online forums or entering competitions, contests or giveaways) or 
                        otherwise when you contact us.
                        <br>
                        The personal information that we collect depends on the context of your interactions with us and the, 
                        the choices you make and the products and features you use. The personal information we collect may include the following:
                        <br>
                        Social Media Login Data. We may provide you with the option to register with us using your existing social 
                        media account details, like your Facebook, Twitter or other social media account. 
                        If you choose to register in this way, we will collect the information described 
                        in the section called \"HOW DO WE HANDLE YOUR SOCIAL LOGINS?\" below.
                        <br>
                        All personal information that you provide to us must be true, complete and accurate, 
                        and you must notify us of any changes to such personal information.
                        <br>
                        <b>Information automatically collected</b>
                        <br>
                        In Short:  Some information ??? such as your Internet Protocol (IP) address and/or browser and device characteristics ??? 
                        is collected automatically when you visit our.
                        <br>
                        We automatically collect certain information when you visit, use or navigate the . This information does not 
                        reveal your specific identity (like your name or contact information) but may include device and usage information, 
                        such as your IP address, browser and device characteristics, operating system, language preferences, referring 
                        URLs, device name, country, location, information about how and when you use our and other technical information. 
                        This information is primarily needed to maintain the security and operation of our , 
                        and for our internal analytics and reporting purposes.
                        <br>
                        Like many businesses, we also collect information through cookies and similar technologies.
                    </p>
                    <p>
                        <b>2. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</b>
                        <br>
                        In Short:  We only share information with your consent, to comply with laws, 
                        to provide you with services, to protect your rights, or to fulfill business obligations.
                        <br>
                        We may process or share your data that we hold based on the following legal basis:
                        <br>
                        More specifically, we may need to process your data or share your personal information in the following situations:
                        <br>
                        - Business Transfers. We may share or transfer your information in connection with, or during negotiations of, 
                        any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.
                        <br>
                        - Affiliates. We may share your information with our affiliates, in which case we will require those 
                        affiliates to honor this privacy notice. Affiliates include our parent company and any subsidiaries, 
                        joint venture partners or other companies that we control or that are under common control with us.
                        <br>
                        - Business Partners. We may share your information with our business partners to offer you certain products, services or promotions.
                        <br>
                        - Other Users. When you share personal information or otherwise interact with public areas of the , 
                        such personal information may be viewed by all users and may be publicly made available outside the in perpetuity. 
                        If you interact with other users of our and register for our through a social network (such as Facebook), 
                        your contacts on the social network will see your name, profile photo, and descriptions of your activity. 
                        Similarly, other users will be able to view descriptions of your activity, communicate with you within our , 
                        and view your profile.
                    </p>
                    <p>
                        <b>3. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</b>
                        <br>
                        In Short:  We may use cookies and other tracking technologies to collect and store your information.
                        <br>
                        We may use cookies and similar tracking technologies (like web beacons and pixels) to access or store information. 
                        Specific information about how we use such technologies and how you can refuse certain cookies is set out in our Cookie Notice.
                    </p>
                    <p>
                        <b>4. HOW DO WE HANDLE YOUR SOCIAL LOGINS?</b>  
                        <br>
                        In Short:  If you choose to register or log in to our services using a social media account, 
                        we may have access to certain information about you.
                        <br>
                        Our offers you the ability to register and login using your third-party social media account details (like 
                        your Facebook or Twitter logins). Where you choose to do this, we will receive certain profile 
                        information about you from your social media provider. The profile information we receive may vary 
                        depending on the social media provider concerned, but will often include your name, email address, 
                        friends list, profile picture as well as other information you choose to make public on such social 
                        media platform.
                        <br>
                        We will use the information we receive only for the purposes that are described in this privacy notice 
                        or that are otherwise made clear to you on the relevant . Please note that we do not control, and are 
                        not responsible for, other uses of your personal information by your third-party social media provider. 
                        We recommend that you review their privacy notice to understand how they collect, use and share your 
                        personal information, and how you can set your privacy preferences on their sites and apps.
                    </p>
                    <p>
                        <b>5. IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?</b>   
                        <br>
                        In Short:  We may transfer, store, and process your information in countries other than your own.
                        <br>
                        Our servers are located in. If you are accessing our  from outside, please be aware that your information may 
                        be transferred to, stored, and processed by us in our facilities and by those third parties with whom we may 
                        share your personal information (see \"WILL YOUR INFORMATION BE SHARED WITH ANYONE?\" above), in and other countries.
                        <br>
                        If you are a resident in the European Economic Area (EEA) or United Kingdom (UK), then these countries 
                        may not necessarily have data protection laws or other similar laws as comprehensive as those in your 
                        country. We will however take all necessary measures to protect your personal information in accordance 
                        with this privacy notice and applicable law.
                    </p>
                    <p>
                        <b>6. HOW LONG DO WE KEEP YOUR INFORMATION?</b>
                        <br>
                        In Short:  We keep your information for as long as necessary to fulfill the purposes outlined in this 
                        privacy notice unless otherwise required by law.
                        <br>
                        We will only keep your personal information for as long as it is necessary for the purposes set 
                        out in this privacy notice, unless a longer retention period is required or permitted by law 
                        (such as tax, accounting or other legal requirements). No purpose in this notice will require 
                        us keeping your personal information for longer than 6 months.
                        <br>
                        When we have no ongoing legitimate business need to process your personal information, 
                        we will either delete or anonymize such information, or, if this is not possible (for example, 
                        because your personal information has been stored in backup archives), then we will securely 
                        store your personal information and isolate it from any further processing until deletion is possible.
                    </p>
                    <p>
                        <b>7. DO WE COLLECT INFORMATION FROM MINORS?</b>
                        <br>
                        In Short:  We do not knowingly collect data from or market to children under 18 years of age.
                        <br>
                        We do not knowingly solicit data from or market to children under 18 years of age. By using the , 
                        you represent that you are at least 18 or that you are the parent or guardian of such a minor and 
                        consent to such minor dependent???s use of the . If we learn that personal information from users less 
                        than 18 years of age has been collected, we will deactivate the account and take reasonable measures 
                        to promptly delete such data from our records. If you become aware of any data we may have collected 
                        from children under age 18, please contact us at {{ site_mail }}
                    </p>
                    <p>
                        <b>8. WHAT ARE YOUR PRIVACY RIGHTS?</b>
                        <br>
                        In Short:  You may review, change, or terminate your account at any time.
                        <br>
                        If you are a resident in the EEA or UK and you believe we are unlawfully processing your personal information, 
                        you also have the right to complain to your local data protection supervisory authority. 
                        You can find their contact details here: http://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm.
                        <br>
                        If you are a resident in Switzerland, the contact details for the data protection authorities are available 
                        here: https://www.edoeb.admin.ch/edoeb/en/home.html.
                        <br>
                        Account Information
                        <br>
                        If you would at any time like to review or change the information in your account or terminate your account, you can:
                        Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, we may retain some information in our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce our Terms of Use and/or comply with applicable legal requirements.
                        <br>
                        Opting out of email marketing: You can unsubscribe from our marketing email list at any time by clicking on the unsubscribe link in the emails that we send or by contacting us using the details provided below. You will then be removed from the marketing email list ??? however, we may still communicate with you, for example to send you service-related emails that are necessary for the administration and use of your account, to respond to service requests, or for other non-marketing purposes. To otherwise opt-out, you may:
                    </p>
                    <p>
                        <b>9. CONTROLS FOR DO-NOT-TRACK FEATURES</b>
                        <br>
                        Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track (\"DNT\") feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. At this stage no uniform technology standard for recognizing and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this privacy notice. 
                    </p>
                    <p>
                        <b>10. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</b>
                        <br>
                        In Short:  Yes, if you are a resident of California, you are granted specific rights regarding access to your personal information.
                        <br>
                        California Civil Code Section 1798.83, also known as the \"Shine The Light\" law, permits our users who are 
                        California residents to request and obtain from us, once a year and free of charge, information about categories of 
                        personal information (if any) we disclosed to third parties for direct marketing purposes and the names and 
                        addresses of all third parties with which we shared personal information in the immediately preceding calendar 
                        year. If you are a California resident and would like to make such a request, please submit your request in 
                        writing to us using the contact information provided below.
                        <br>
                        If you are under 18 years of age, reside in California, and have a registered account with , you have the 
                        right to request removal of unwanted data that you publicly post on the . To request removal of such data, 
                        please contact us using the contact information provided below, and include the email address associated 
                        with your account and a statement that you reside in California. We will make sure the data is not publicly 
                        displayed on the , but please be aware that the data may not be completely or comprehensively removed from 
                        all our systems (e.g. backups, etc.).
                    </p>
                    <p>
                        <b>11. DO WE MAKE UPDATES TO THIS NOTICE?</b> 
                        <br>
                        In Short:  Yes, we will update this notice as necessary to stay compliant with relevant laws.
                        <br>
                        We may update this privacy notice from time to time. The updated version will be indicated by an updated 
                        \"Revised\" date and the updated version will be effective as soon as it is accessible. If we 
                        make material changes to this privacy notice, we may notify you either by prominently posting a 
                        notice of such changes or by directly sending you a notification. We encourage you to review this 
                        privacy notice frequently to be informed of how we are protecting your information.
                    </p>
                    <p>
                        <b>12. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</b> 
                        <br>
                        If you have questions or comments about this notice, you may email us at {{ site_mail }} or by post to:
                        <br>
                        {{ site_name }}
                        <br>
                        {{ site_address1 }}
                        <br>
                        {{ site_address_city }}, {{ site_address_code }}
                        <br>
                        {{ site_address_country }}
                    </p>
                    <p>
                        <b>13. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</b>
                        <br>
                        Based on the applicable laws of your country, you may have the right to request access to the personal 
                        information we collect from you, change that information, or delete it in some circumstances. 
                        To request to review, update, or delete your personal information, please submit a request form by clicking here.
                        This privacy policy was created using Termly???s Privacy Policy Generator.
                    </p>
                </div>

                {% block sidebar %}
                    {{ sidebar() }}
                {% endblock %}

            </div>
        </div>
    </section>
</main>

{% endblock %}", "registration/policy.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\registration\\policy.html.twig");
    }
}
