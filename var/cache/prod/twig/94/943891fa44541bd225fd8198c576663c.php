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

/* registration/terms.html.twig */
class __TwigTemplate_11b7355fe55feb398534772638f5bf2c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/terms.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["site_name"] ?? null), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("terms of service", [], "messages");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Terms", [], "messages");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Terms", [], "messages");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Terms Of Use", [], "messages");
        echo "</h1>

                    <div class=\"py-3 small fw-bold\">Last updated June 25, 2021</div>
                    <b>AGREEMENT TO TERMS</b>
                    <p>
                        These Terms of Use constitute a legally binding agreement made between you, whether personally
                        or on behalf of an entity (“you”)
                        and A+BFB (\"Company\", “we”, “us”, or “our”), concerning your access to and use of the
                        A+BFB.com website as well
                        as any other media form, media channel, mobile website or mobile application related, linked, or
                        otherwise connected thereto
                        (collectively, the “Site”). You agree that by accessing the Site, you have read, understood, and
                        agreed to be bound by all of
                        these Terms of Use. IF YOU DO NOT AGREE WITH ALL OF THESE TERMS OF USE, THEN YOU ARE EXPRESSLY
                        PROHIBITED FROM USING THE SITE
                        AND YOU MUST DISCONTINUE USE IMMEDIATELY.
                    </p>
                    <p>
                        Supplemental terms and conditions or documents that may be posted on the Site from time to time
                        are hereby expressly incorporated
                        herein by reference. We reserve the right, in our sole discretion, to make changes or
                        modifications to these Terms of Use at any
                        time and for any reason. We will alert you about any changes by updating the “Last updated” date
                        of these Terms of Use, and you waive
                        any right to receive specific notice of each such change. It is your responsibility to
                        periodically review these Terms of Use to stay
                        nformed of updates. You will be subject to, and will be deemed to have been made aware of and to
                        have accepted, the changes in any revised
                        Terms of Use by your continued use of the Site after the date such revised Terms of Use are
                        posted.
                    </p>
                    <p>
                        The information provided on the Site is not intended for distribution to or use by any person or
                        entity in any jurisdiction
                        or country where such distribution or use would be contrary to law or regulation or which would
                        subject us to any registration
                        requirement within such jurisdiction or country. Accordingly, those persons who choose to access
                        the Site from other locations
                        do so on their own initiative and are solely responsible for compliance with local laws, if and
                        to the extent local laws are applicable.
                    </p>
                    <p>
                        All users who are minors in the jurisdiction in which they reside (generally under the age of
                        18) must have the permission of,
                        and be directly supervised by, their parent or guardian to use the Site. If you are a minor, you
                        must have your parent or guardian
                        read and agree to these Terms of Use prior to you using the Site.
                    </p>
                    <p>
                        <b>INTELLECTUAL PROPERTY RIGHTS</b>
                        <br>
                        Unless otherwise indicated, the Site is our proprietary property and all source code, databases,
                        functionality, software,
                        website designs, audio, video, text, photographs, and graphics on the Site (collectively, the
                        “Content”) and the trademarks,
                        service marks, and logos contained therein (the “Marks”) are owned or controlled by us or
                        licensed to us, and are protected by
                        copyright and trademark laws and various other intellectual property rights and unfair
                        competition laws of the United States,
                        international copyright laws, and international conventions. The Content and the Marks are
                        provided on the Site “AS IS” for your
                        information and personal use only. Except as expressly provided in these Terms of Use, no part
                        of the Site and no Content or
                        Marks may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed,
                        encoded, translated, transmitted,
                        distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever,
                        without our express prior written permission.
                    </p>
                    <p>
                        Provided that you are eligible to use the Site, you are granted a limited license to access and
                        use the Site and to download or
                        print a copy of any portion of the Content to which you have properly gained access solely for
                        your personal, non-commercial use.
                        We reserve all rights not expressly granted to you in and to the Site, the Content and the
                        Marks.
                    </p>
                    <p>
                        <b>USER REPRESENTATIONS</b>
                        <br>
                        By using the Site, you represent and warrant that:<br>
                        (1) you have the legal capacity and you agree to comply with these Terms of Use;<br>
                        (2) you are not a minor in the jurisdiction in which you reside, or if a minor, you have
                        received parental permission to use the Site;<br>
                        (3) you will not access the Site through automated or non-human means, whether through a bot,
                        script, or otherwise;<br>
                        (4) you will not use the Site for any illegal or unauthorized purpose; and (5) your use of the
                        Site will not violate any applicable law or regulation.
                    </p>
                    <p>
                        If you provide any information that is untrue, inaccurate, not current, or incomplete, we have
                        the right to suspend or terminate
                        your account and refuse any and all current or future use of the Site (or any portion thereof).
                    </p>
                    <p>
                        <b>PROHIBITED ACTIVITIES</b>
                        <br>
                        You may not access or use the Site for any purpose other than that for which we make the Site
                        available.
                        The Site may not be used in connection with any commercial endeavors except those that are
                        specifically endorsed or approved by us.
                    </p>
                    <p>
                        As a user of the Site, you agree not to:<br>
                        1. Systematically retrieve data or other content from the Site to create or compile, directly or
                        indirectly, a collection,
                        compilation, database, or directory without written permission from us.<br>
                        2. Trick, defraud, or mislead us and other users, especially in any attempt to learn sensitive
                        account information such as user passwords.<br>
                        3. Circumvent, disable, or otherwise interfere with security-related features of the Site,
                        including features that prevent
                        or restrict the use or copying of any Content or enforce limitations on the use of the Site
                        and/or the Content contained therein.<br>
                        4. Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Site.<br>
                        5. Use any information obtained from the Site in order to harass, abuse, or harm another
                        person.<br>
                        6. Make improper use of our support services or submit false reports of abuse or misconduct.<br>
                        7. Use the Site in a manner inconsistent with any applicable laws or regulations.<br>
                        8. Use the Site to advertise or offer to sell goods and services.<br>
                        9. Engage in unauthorized framing of or linking to the Site.<br>
                        10. Upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other
                        material, including excessive
                        use of capital letters and spamming (continuous posting of repetitive text), that interferes
                        with any party’s uninterrupted
                        use and enjoyment of the Site or modifies, impairs, disrupts, alters, or interferes with the
                        use, features, functions, operation,
                        or maintenance of the Site.<br>
                        11. Engage in any automated use of the system, such as using scripts to send comments or
                        messages, or using any data mining,
                        robots, or similar data gathering and extraction tools.<br>
                        12. Delete the copyright or other proprietary rights notice from any Content.<br>
                        13. Attempt to impersonate another user or person or use the username of another user.<br>
                        14. Sell or otherwise transfer your profile.<br>
                        15. Upload or transmit (or attempt to upload or to transmit) any material that acts as a passive
                        or active information
                        collection or transmission mechanism, including without limitation, clear graphics interchange
                        formats (“gifs”), 1×1 pixels,
                        web bugs, cookies, or other similar devices (sometimes referred to as “spyware” or “passive
                        collection mechanisms” or “pcms”).<br>
                        16. Interfere with, disrupt, or create an undue burden on the Site or the networks or services
                        connected to the Site.<br>
                        17. Harass, annoy, intimidate, or threaten any of our employees or agents engaged in providing
                        any portion of the Site to you.<br>
                        18. Attempt to bypass any measures of the Site designed to prevent or restrict access to the
                        Site, or any portion of the Site.<br>
                        19. Decipher, decompile, disassemble, or reverse engineer any of the software comprising or in
                        any way making up a part of the Site.<br>
                        20. Except as may be the result of standard search engine or Internet browser usage, use,
                        launch, develop, or distribute any automated
                        system, including without limitation, any spider, robot, cheat utility, scraper, or offline
                        reader that accesses the Site, or using
                        or launching any unauthorized script or other software.<br>
                        21. Use a buying agent or purchasing agent to make purchases on the Site.<br>
                        22. Make any unauthorized use of the Site, including collecting usernames and/or email addresses
                        of users by electronic or
                        other means for the purpose of sending unsolicited email, or creating user accounts by automated
                        means or under false pretenses.<br>
                        23. Use the Site as part of any effort to compete with us or otherwise use the Site and/or the
                        Content for any revenue-generating
                        endeavor or commercial enterprise.
                    </p>
                    <p>
                        <b>USER GENERATED CONTRIBUTIONS</b>
                        <br>
                        The Site does not offer users to submit or post content. We may provide you with the opportunity
                        to create, submit, post, display,
                        transmit, perform, publish, distribute, or broadcast content and materials to us or on the Site,
                        including but not limited to text,
                        writings, video, audio, photographs, graphics, comments, suggestions, or personal information or
                        other material (collectively, \"Contributions\").
                        Contributions may be viewable by other users of the Site and through third-party websites. As
                        such, any Contributions you transmit may
                        be treated in accordance with the Site Privacy Policy. When you create or make available any
                        Contributions, you thereby represent and warrant that:
                    </p>
                    <p>
                        1. The creation, distribution, transmission, public display, or performance, and the accessing,
                        downloading, or copying of
                        your Contributions do not and will not infringe the proprietary rights, including but not
                        limited to the copyright, patent,
                        trademark, trade secret, or moral rights of any third party.<br>
                        2. You are the creator and owner of or have the necessary licenses, rights, consents, releases,
                        and permissions to
                        use and to authorize us, the Site, and other users of the Site to use your Contributions in any
                        manner contemplated by the Site and these Terms of Use.<br>
                        3. You have the written consent, release, and/or permission of each and every identifiable
                        individual person in your
                        Contributions to use the name or likeness of each and every such identifiable individual person
                        to enable inclusion and
                        use of your Contributions in any manner contemplated by the Site and these Terms of Use.<br>
                        4. Your Contributions are not false, inaccurate, or misleading.<br>
                        5. Your Contributions are not unsolicited or unauthorized advertising, promotional materials,
                        pyramid schemes, chain letters,
                        spam, mass mailings, or other forms of solicitation.<br>
                        6. Your Contributions are not obscene, lewd, lascivious, filthy, violent, harassing, libelous,
                        slanderous, or otherwise
                        objectionable (as determined by us).<br>
                        7. Your Contributions do not ridicule, mock, disparage, intimidate, or abuse anyone.<br>
                        8. Your Contributions are not used to harass or threaten (in the legal sense of those terms) any
                        other person and to
                        promote violence against a specific person or class of people.<br>
                        9. Your Contributions do not violate any applicable law, regulation, or rule.<br>
                        10. Your Contributions do not violate the privacy or publicity rights of any third party.<br>
                        11. Your Contributions do not contain any material that solicits personal information from
                        anyone under the age of 18 or
                        exploits people under the age of 18 in a sexual or violent manner.<br>
                        12. Your Contributions do not violate any applicable law concerning child pornography, or
                        otherwise intended to protect
                        the health or well-being of minors.<br>
                        13. Your Contributions do not include any offensive comments that are connected to race,
                        national origin, gender, sexual preference, or physical handicap.<br>
                        14. Your Contributions do not otherwise violate, or link to material that violates, any
                        provision of these Terms of Use, or any applicable law or regulation.<br>
                    </p>
                    <p>
                        Any use of the Site in violation of the foregoing violates these Terms of Use and may result in,
                        among other things, termination or
                        suspension of your rights to use the Site.
                    </p>
                    <p>
                        <b>CONTRIBUTION LICENSE</b>
                        <br>
                        You and the Site agree that we may access, store, process, and use any information and personal
                        data that you provide following
                        the terms of the Privacy Policy and your choices (including settings).<br>
                        By submitting suggestions or other feedback regarding the Site, you agree that we can use and
                        share such feedback for any
                        purpose without compensation to you.<br>
                        We do not assert any ownership over your Contributions. You retain full ownership of all of your
                        Contributions and any
                        intellectual property rights or other proprietary rights associated with your Contributions. We
                        are not liable for any
                        statements or representations in your Contributions provided by you in any area on the Site. You
                        are solely responsible for your
                        Contributions to the Site and you expressly agree to exonerate us from any and all
                        responsibility and to refrain from any
                        legal action against us regarding your Contributions.
                    </p>
                    <p>
                        <b>GUIDELINES FOR REVIEWS</b>
                        <br>
                        We may provide you areas on the Site to leave reviews or ratings. When posting a review, you
                        must comply with the following criteria: (1)
                        you should have firsthand experience with the person/entity being reviewed; (2) your reviews
                        should not contain offensive profanity,
                        or abusive, racist, offensive, or hate language; (3) your reviews should not contain
                        discriminatory references based on religion,
                        race, gender, national origin, age, marital status, sexual orientation, or disability; (4) your
                        reviews should not contain references
                        to illegal activity; (5) you should not be affiliated with competitors if posting negative
                        reviews; (6) you should not make any
                        conclusions as to the legality of conduct; (7) you may not post any false or misleading
                        statements; and (8) you may not organize a
                        campaign encouraging others to post reviews, whether positive or negative.<br>
                        We may accept, reject, or remove reviews in our sole discretion. We have absolutely no
                        obligation to screen reviews or to delete reviews,
                        even if anyone considers reviews objectionable or inaccurate. Reviews are not endorsed by us,
                        and do not necessarily represent our
                        opinions or the views of any of our affiliates or partners. We do not assume liability for any
                        review or for any claims, liabilities,
                        or losses resulting from any review. By posting a review, you hereby grant to us a perpetual,
                        non-exclusive, worldwide, royalty-free,
                        fully-paid, assignable, and sublicensable right and license to reproduce, modify, translate,
                        transmit by any means, display, perform,
                        and/or distribute all content relating to reviews.
                    </p>
                    <p>
                        <b>SUBMISSIONS</b>
                        <br>
                        You acknowledge and agree that any questions, comments, suggestions, ideas, feedback, or other
                        information regarding the Site
                        (\"Submissions\") provided by you to us are non-confidential and shall become our sole property.
                        We shall own exclusive rights,
                        including all intellectual property rights, and shall be entitled to the unrestricted use and
                        dissemination of these Submissions
                        for any lawful purpose, commercial or otherwise, without acknowledgment or compensation to you.
                        You hereby waive all moral rights
                        to any such Submissions, and you hereby warrant that any such Submissions are original with you
                        or that you have the right to submit
                        such Submissions. You agree there shall be no recourse against us for any alleged or actual
                        infringement or misappropriation of
                        any proprietary right in your Submissions.
                    </p>
                    <p>
                        <b>THIRD-PARTY WEBSITE AND CONTENT</b>
                        <br>
                        The Site may contain (or you may be sent via the Site) links to other websites (\"Third-Party
                        Websites\") as well as articles,
                        photographs, text, graphics, pictures, designs, music, sound, video, information, applications,
                        software, and other content or
                        items belonging to or originating from third parties (\"Third-Party Content\"). Such Third-Party
                        Websites and Third-Party Content
                        are not investigated, monitored, or checked for accuracy, appropriateness, or completeness by
                        us, and we are not responsible for
                        any Third-Party Websites accessed through the Site or any Third-Party Content posted on,
                        available through, or installed from the
                        Site, including the content, accuracy, offensiveness, opinions, reliability, privacy practices,
                        or other policies of or contained
                        in the Third-Party Websites or the Third-Party Content. Inclusion of, linking to, or permitting
                        the use or installation of any
                        Third-Party Websites or any Third-Party Content does not imply approval or endorsement thereof
                        by us. If you decide to leave the
                        Site and access the Third-Party Websites or to use or install any Third-Party Content, you do so
                        at your own risk, and you should
                        be aware these Terms of Use no longer govern. You should review the applicable terms and
                        policies, including privacy and data
                        gathering practices, of any website to which you navigate from the Site or relating to any
                        applications you use or install
                        from the Site. Any purchases you make through Third-Party Websites will be through other
                        websites and from other companies,
                        and we take no responsibility whatsoever in relation to such purchases which are exclusively
                        between you and the applicable
                        third party. You agree and acknowledge that we do not endorse the products or services offered
                        on Third-Party Websites and you
                        shall hold us harmless from any harm caused by your purchase of such products or services.
                        Additionally, you shall hold us
                        harmless from any losses sustained by you or harm caused to you relating to or resulting in any
                        way from any Third-Party Content
                        or any contact with Third-Party Websites.
                    </p>
                    <p>
                        <b>ADVERTISERS</b>
                        <br>
                        We allow advertisers to display their advertisements and other information in certain areas of
                        the Site,
                        such as sidebar advertisements or banner advertisements. If you are an advertiser, you shall
                        take full
                        responsibility for any advertisements you place on the Site and any services provided on the
                        Site or products sold
                        through those advertisements. Further, as an advertiser, you warrant and represent that you
                        possess all rights and
                        authority to place advertisements on the Site, including, but not limited to, intellectual
                        property rights, publicity
                        rights, and contractual rights. We simply provide the space to place such advertisements, and we
                        have no other relationship with advertisers.
                    </p>
                    <p>
                        <b>SITE MANAGEMENT</b>
                        <br>
                        We reserve the right, but not the obligation, to:<br>
                        (1) monitor the Site for violations of these Terms of Use;<br>
                        (2) take appropriate legal action against anyone who, in our sole discretion, violates the law
                        or these Terms of Use,
                        including without limitation, reporting such user to law enforcement authorities;<br>
                        (3) in our sole discretion and without limitation, refuse, restrict access to, limit the
                        availability of, or
                        disable (to the extent technologically feasible) any of your Contributions or any portion
                        thereof;<br>
                        (4) in our sole discretion and without limitation, notice, or liability, to remove from the Site
                        or otherwise disable
                        all files and content that are excessive in size or are in any way burdensome to our
                        systems;<br>
                        (5) otherwise manage the Site in a manner designed to protect our rights and property and to
                        facilitate the proper functioning of the Site.
                    </p>
                    <p>
                        <b>PRIVACY POLICY</b>
                        <br>
                        We care about data privacy and security.<br>
                        Please review our <a href=\"";
        // line 390
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("policy");
        echo "\">PRIVACY POLICY</a>.<br>
                        By using the Site, you agree to be bound by our Privacy Policy, which is incorporated into these
                        Terms of Use.
                        Please be advised the Site is hosted in ";
        // line 393
        echo twig_escape_filter($this->env, ($context["site_address_country"] ?? null), "html", null, true);
        echo ". If you access the Site from any other region of
                        the world with laws or other
                        requirements governing personal data collection, use, or disclosure that differ from applicable
                        laws in ";
        // line 396
        echo twig_escape_filter($this->env, ($context["site_address_country"] ?? null), "html", null, true);
        echo ", then through
                        your continued use of the Site, you are transferring your data to ";
        // line 397
        echo twig_escape_filter($this->env, ($context["site_address_country"] ?? null), "html", null, true);
        echo ", and you agree to have
                        your data transferred to and processed in ";
        // line 398
        echo twig_escape_filter($this->env, ($context["site_address_country"] ?? null), "html", null, true);
        echo ".
                    </p>
                    <p>
                        <b>TERM AND TERMINATION</b>
                        <br>
                        These Terms of Use shall remain in full force and effect while you use the Site. WITHOUT
                        LIMITING ANY OTHER PROVISION OF THESE
                        TERMS OF USE, WE RESERVE THE RIGHT TO, IN OUR SOLE DISCRETION AND WITHOUT NOTICE OR LIABILITY,
                        DENY ACCESS TO AND USE OF
                        THE SITE (INCLUDING BLOCKING CERTAIN IP ADDRESSES), TO ANY PERSON FOR ANY REASON OR FOR NO
                        REASON, INCLUDING WITHOUT
                        LIMITATION FOR BREACH OF ANY REPRESENTATION, WARRANTY, OR COVENANT CONTAINED IN THESE TERMS OF
                        USE OR OF ANY APPLICABLE
                        LAW OR REGULATION. WE MAY TERMINATE YOUR USE OR PARTICIPATION IN THE SITE OR DELETE ANY CONTENT
                        OR INFORMATION THAT YOU
                        POSTED AT ANY TIME, WITHOUT WARNING, IN OUR SOLE DISCRETION.<br>
                        If we terminate or suspend your account for any reason, you are prohibited from registering and
                        creating a new account
                        under your name, a fake or borrowed name, or the name of any third party, even if you may be
                        acting on behalf of the
                        third party. In addition to terminating or suspending your account, we reserve the right to take
                        appropriate legal
                        action, including without limitation pursuing civil, criminal, and injunctive redress.
                    </p>
                    <p>
                        <b>MODIFICATIONS AND INTERRUPTIONS</b>
                        <br>
                        We reserve the right to change, modify, or remove the contents of the Site at any time or for
                        any reason at our
                        sole discretion without notice. However, we have no obligation to update any information on our
                        Site. We also reserve the
                        right to modify or discontinue all or part of the Site without notice at any time. We will not
                        be liable to you or any third
                        party for any modification, price change, suspension, or discontinuance of the Site.<br>
                        We cannot guarantee the Site will be available at all times. We may experience hardware,
                        software, or other problems or
                        need to perform maintenance related to the Site, resulting in interruptions, delays, or errors.
                        We reserve the right to
                        change, revise, update, suspend, discontinue, or otherwise modify the Site at any time or for
                        any reason without notice to you.
                        You agree that we have no liability whatsoever for any loss, damage, or inconvenience caused by
                        your inability to access or
                        use the Site during any downtime or discontinuance of the Site. Nothing in these Terms of Use
                        will be construed to obligate
                        us to maintain and support the Site or to supply any corrections, updates, or releases in
                        connection therewith.
                    </p>
                    <p>
                        <b>GOVERNING LAW</b>
                        <br>
                        These conditions are governed by and interpreted following the laws of ";
        // line 448
        echo twig_escape_filter($this->env, ($context["site_address_country"] ?? null), "html", null, true);
        echo ", and the use of
                        the United Nations
                        Convention of Contracts for the International Sale of Goods is expressly excluded. If your
                        habitual residence is
                        in the EU, and you are a consumer, you additionally possess the protection provided to you by
                        obligatory provisions
                        of the law of your country of residence. A+BFB and yourself both agree to submit to the
                        non-exclusive jurisdiction
                        of the courts of Bretagne, which means that you may make a claim to defend your consumer
                        protection rights in regards to these
                        Conditions of Use in ";
        // line 458
        echo twig_escape_filter($this->env, ($context["site_address_country"] ?? null), "html", null, true);
        echo ", or in the EU country in which you reside.
                    </p>
                    <p>
                        <b>DISPUTE RESOLUTION</b>
                        <br>
                        Informal Negotiations
                        <br>
                        To expedite resolution and control the cost of any dispute, controversy, or claim related to
                        these Terms of Use
                        (each \"Dispute\" and collectively, the “Disputes”) brought by either you or us (individually, a
                        “Party” and collectively,
                        the “Parties”), the Parties agree to first attempt to negotiate any Dispute (except those
                        Disputes expressly
                        provided below) informally for at least thirty (30) days before initiating arbitration. Such
                        informal negotiations
                        commence upon written notice from one Party to the other Party.
                        <br>
                        Binding Arbitration
                        <br>
                        Any dispute arising from the relationships between the Parties to this contract shall be
                        determined by one arbitrator
                        who will be chosen in accordance with the Arbitration and Internal Rules of the European Court
                        of Arbitration being
                        part of the European Centre of Arbitration having its seat in Strasbourg, and which are in force
                        at the time the
                        application for arbitration is filed, and of which adoption of this clause constitutes
                        acceptance. The seat of
                        arbitration shall be ";
        // line 485
        echo twig_escape_filter($this->env, ($context["site_address_city"] ?? null), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, ($context["site_address_country"] ?? null), "html", null, true);
        echo ". The language of the proceedings shall be French. Applicable
                        rules of
                        substantive law shall be the law of ";
        // line 487
        echo twig_escape_filter($this->env, ($context["site_address_country"] ?? null), "html", null, true);
        echo ".
                        <br>
                        Restrictions
                        <br>
                        The Parties agree that any arbitration shall be limited to the Dispute between the Parties
                        individually.
                        To the full extent permitted by law,<br>
                        (a) no arbitration shall be joined with any other proceeding;<br>
                        (b) there is no right or authority for any Dispute to be arbitrated on a class-action basis or
                        to utilize class action procedures;<br>
                        (c) there is no right or authority for any Dispute to be brought in a purported representative
                        capacity on
                        behalf of the general public or any other persons.
                        <br>
                        Exceptions to Informal Negotiations and Arbitration
                        <br>
                        The Parties agree that the following Disputes are not subject to the above provisions concerning
                        informal
                        negotiations and binding arbitration:<br>
                        (a) any Disputes seeking to enforce or protect, or concerning the validity of, any of the
                        intellectual property rights of a Party;<br>
                        (b) any Dispute related to, or arising from, allegations of theft, piracy, invasion of privacy,
                        or unauthorized use;<br>
                        (c) any claim for injunctive relief. If this provision is found to be illegal or unenforceable,
                        then neither Party will
                        elect to arbitrate any Dispute falling within that portion of this provision found to be illegal
                        or unenforceable and such
                        Dispute shall be decided by a court of competent jurisdiction within the courts listed for
                        jurisdiction above, and the
                        Parties agree to submit to the personal jurisdiction of that court.
                    </p>
                    <p>
                        <b>CORRECTIONS</b>
                        <br>
                        There may be information on the Site that contains typographical errors, inaccuracies, or
                        omissions, including descriptions,
                        pricing, availability, and various other information. We reserve the right to correct any
                        errors, inaccuracies, or omissions
                        and to change or update the information on the Site at any time, without prior notice.
                    </p>
                    <p>
                        <b>DISCLAIMER</b>
                        <br>
                        THE SITE IS PROVIDED ON AN AS-IS AND AS-AVAILABLE BASIS. YOU AGREE THAT YOUR USE OF THE SITE AND
                        OUR SERVICES
                        WILL BE AT YOUR SOLE RISK. TO THE FULLEST EXTENT PERMITTED BY LAW, WE DISCLAIM ALL WARRANTIES,
                        EXPRESS
                        OR IMPLIED, IN CONNECTION WITH THE SITE AND YOUR USE THEREOF, INCLUDING, WITHOUT LIMITATION, THE
                        IMPLIED
                        WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. WE MAKE
                        NO WARRANTIES OR
                        REPRESENTATIONS ABOUT THE ACCURACY OR COMPLETENESS OF THE SITE’S CONTENT OR THE CONTENT OF ANY
                        WEBSITES LINKED TO
                        THE SITE AND WE WILL ASSUME NO LIABILITY OR RESPONSIBILITY FOR ANY (1) ERRORS, MISTAKES, OR
                        INACCURACIES OF CONTENT
                        AND MATERIALS, (2) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM
                        YOUR ACCESS TO AND
                        USE OF THE SITE, (3) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL
                        PERSONAL INFORMATION
                        AND/OR FINANCIAL INFORMATION STORED THEREIN, (4) ANY INTERRUPTION OR CESSATION OF TRANSMISSION
                        TO OR FROM THE SITE,
                        (5) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE
                        SITE BY ANY THIRD PARTY, AND/OR
                        (6) ANY ERRORS OR OMISSIONS IN ANY CONTENT AND MATERIALS OR FOR ANY LOSS OR DAMAGE OF ANY KIND
                        INCURRED AS A RESULT OF
                        THE USE OF ANY CONTENT POSTED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE SITE. WE DO NOT
                        WARRANT, ENDORSE,
                        GUARANTEE, OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD
                        PARTY THROUGH THE SITE,
                        ANY HYPERLINKED WEBSITE, OR ANY WEBSITE OR MOBILE APPLICATION FEATURED IN ANY BANNER OR OTHER
                        ADVERTISING, AND WE WILL
                        NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND
                        ANY THIRD-PARTY PROVIDERS
                        OF PRODUCTS OR SERVICES. AS WITH THE PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY MEDIUM OR IN
                        ANY ENVIRONMENT,
                        YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE.
                    </p>
                    <p>
                        <b>LIMITATIONS OF LIABILITY</b>
                        <br>
                        IN NO EVENT WILL WE OR OUR DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE TO YOU OR ANY THIRD PARTY
                        FOR ANY DIRECT,
                        INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL, OR PUNITIVE DAMAGES, INCLUDING LOST
                        PROFIT, LOST REVENUE,
                        LOSS OF DATA, OR OTHER DAMAGES ARISING FROM YOUR USE OF THE SITE, EVEN IF WE HAVE BEEN ADVISED
                        OF THE POSSIBILITY OF
                        SUCH DAMAGES. NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED HEREIN, OUR LIABILITY TO YOU
                        FOR ANY CAUSE WHATSOEVER
                        AND REGARDLESS OF THE FORM OF THE ACTION, WILL AT ALL TIMES BE LIMITED TO THE AMOUNT PAID, IF
                        ANY, BY YOU TO US DURING
                        THE six (6) mONTH PERIOD PRIOR TO ANY CAUSE OF ACTION ARISING. CERTAIN US STATE LAWS AND
                        INTERNATIONAL LAWS DO NOT
                        ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF
                        THESE LAWS APPLY TO YOU,
                        SOME OR ALL OF THE ABOVE DISCLAIMERS OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MAY HAVE
                        ADDITIONAL RIGHTS.
                    </p>
                    <p>
                        <b>INDEMNIFICATION</b>
                        <br>
                        You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates,
                        and all of our respective
                        officers, agents, partners, and employees, from and against any loss, damage, liability, claim,
                        or demand,
                        including reasonable attorneys’ fees and expenses, made by any third party due to or arising out
                        of:
                        (1) use of the Site; (2) breach of these Terms of Use; (3) any breach of your representations
                        and warranties set forth in these Terms of Use;
                        (4) your violation of the rights of a third party, including but not limited to intellectual
                        property rights; or
                        (5) any overt harmful act toward any other user of the Site with whom you connected via the
                        Site. Notwithstanding
                        the foregoing, we reserve the right, at your expense, to assume the exclusive defense and
                        control of any matter
                        for which you are required to indemnify us, and you agree to cooperate, at your expense, with
                        our defense of such
                        claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding
                        which is subject to
                        this indemnification upon becoming aware of it.
                    </p>
                    <p>
                        <b>USER DATA</b>
                        <br>
                        We will maintain certain data that you transmit to the Site for the purpose of managing the
                        performance of the Site,
                        as well as data relating to your use of the Site. Although we perform regular routine backups of
                        data, you are solely
                        responsible for all data that you transmit or that relates to any activity you have undertaken
                        using the Site.
                        You agree that we shall have no liability to you for any loss or corruption of any such data,
                        and you hereby waive
                        any right of action against us arising from any such loss or corruption of such data.
                    </p>
                    <p>
                        <b>ELECTRONIC COMMUNICATIONS, TRANSACTIONS, AND SIGNATURES</b>
                        <br>
                        Visiting the Site, sending us emails, and completing online forms constitute electronic
                        communications.
                        You consent to receive electronic communications, and you agree that all agreements, notices,
                        disclosures,
                        and other communications we provide to you electronically, via email and on the Site, satisfy
                        any legal
                        requirement that such communication be in writing. YOU HEREBY AGREE TO THE USE OF ELECTRONIC
                        SIGNATURES,
                        CONTRACTS, ORDERS, AND OTHER RECORDS, AND TO ELECTRONIC DELIVERY OF NOTICES, POLICIES, AND
                        RECORDS OF
                        TRANSACTIONS INITIATED OR COMPLETED BY US OR VIA THE SITE. You hereby waive any rights or
                        requirements under any
                        statutes, regulations, rules, ordinances, or other laws in any jurisdiction which require an
                        original signature
                        or delivery or retention of non-electronic records, or to payments or the granting of credits by
                        any means
                        other than electronic means.
                    </p>
                    <p>
                        <b>MISCELLANEOUS</b>
                        <br>
                        These Terms of Use and any policies or operating rules posted by us on the Site or in respect to
                        the
                        Site constitute the entire agreement and understanding between you and us. Our failure to
                        exercise or
                        enforce any right or provision of these Terms of Use shall not operate as a waiver of such right
                        or provision.
                        These Terms of Use operate to the fullest extent permissible by law. We may assign any or all of
                        our rights and
                        obligations to others at any time. We shall not be responsible or liable for any loss, damage,
                        delay, or failure
                        to act caused by any cause beyond our reasonable control. If any provision or part of a
                        provision of these Terms
                        of Use is determined to be unlawful, void, or unenforceable, that provision or part of the
                        provision is deemed
                        severable from these Terms of Use and does not affect the validity and enforceability of any
                        remaining provisions.
                        There is no joint venture, partnership, employment or agency relationship created between you
                        and us as a result
                        of these Terms of Use or use of the Site. You agree that these Terms of Use will not be
                        construed against us by
                        virtue of having drafted them. You hereby waive any and all defenses you may have based on the
                        electronic form
                        of these Terms of Use and the lack of signing by the parties hereto to execute these Terms of
                        Use.
                    </p>
                    <p>
                        <b>CONTACT US</b>
                        <br>
                        In order to resolve a complaint regarding the Site or to receive further information regarding
                        use of the Site, please contact us at:
                        <br>
                        ";
        // line 675
        echo twig_escape_filter($this->env, ($context["site_name_full"] ?? null), "html", null, true);
        echo "<br>
                        ";
        // line 676
        echo twig_escape_filter($this->env, ($context["site_address1"] ?? null), "html", null, true);
        echo "<br>
                        ";
        // line 677
        echo twig_escape_filter($this->env, ($context["site_address_city"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["site_address_code"] ?? null), "html", null, true);
        echo "<br>
                        ";
        // line 678
        echo twig_escape_filter($this->env, ($context["site_address_country"] ?? null), "html", null, true);
        echo "<br>
                        Phone: ";
        // line 679
        echo twig_escape_filter($this->env, ($context["site_address_phone"] ?? null), "html", null, true);
        echo "<br>
                        ";
        // line 680
        echo twig_escape_filter($this->env, ($context["site_mail"] ?? null), "html", null, true);
        echo "<br>
                        <br>
                        These terms of use were created using Termly’s Terms and Conditions Generator.
                </div>

                ";
        // line 685
        $this->displayBlock('sidebar', $context, $blocks);
        // line 688
        echo "
            </div>
        </div>
    </section>
</main>

";
    }

    // line 685
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 686
        echo "                ";
        echo $this->extensions['App\twig\sidebarExtension']->getSidebar();
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "registration/terms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  821 => 686,  817 => 685,  807 => 688,  805 => 685,  797 => 680,  793 => 679,  789 => 678,  783 => 677,  779 => 676,  775 => 675,  584 => 487,  577 => 485,  547 => 458,  534 => 448,  481 => 398,  477 => 397,  473 => 396,  467 => 393,  461 => 390,  100 => 32,  83 => 18,  77 => 17,  71 => 14,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/terms.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\registration\\terms.html.twig");
    }
}
