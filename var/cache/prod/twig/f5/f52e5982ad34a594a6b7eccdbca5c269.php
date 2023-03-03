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

/* @email/zurb_2/notification/body.txt.twig */
class __TwigTemplate_218842c0310bc54c6d1bf393bb52ad2f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'lead' => [$this, 'block_lead'],
            'content' => [$this, 'block_content'],
            'action' => [$this, 'block_action'],
            'exception' => [$this, 'block_exception'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('lead', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('action', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('exception', $context, $blocks);
    }

    // line 1
    public function block_lead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "subject", [], "any", false, false, false, 2);
        echo "
";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo ($context["content"] ?? null);
        echo "
";
    }

    // line 9
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        if (($context["action_url"] ?? null)) {
            // line 11
            echo ($context["action_text"] ?? null);
            echo ": ";
            echo ($context["action_url"] ?? null);
            echo "
";
        }
    }

    // line 15
    public function block_exception($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        if (($context["exception"] ?? null)) {
            // line 17
            echo "Exception stack trace attached.
";
            // line 18
            echo ($context["exception"] ?? null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@email/zurb_2/notification/body.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 18,  101 => 17,  99 => 16,  95 => 15,  86 => 11,  84 => 10,  80 => 9,  74 => 6,  70 => 5,  64 => 2,  60 => 1,  56 => 15,  53 => 14,  51 => 9,  48 => 8,  46 => 5,  43 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@email/zurb_2/notification/body.txt.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\symfony\\twig-bridge\\Resources\\views\\Email\\zurb_2\\notification\\body.txt.twig");
    }
}
