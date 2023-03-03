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

/* @FMElfinder/Elfinder/ckeditor.html.twig */
class __TwigTemplate_5cc08557a9de0888d3b59a7320d7703d extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=2\">
    <script data-main=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_main_js");
        echo "\" src=\"//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js\"></script>
    <script>
        function getUrlParam(paramName) {
            const reParam = new RegExp('(?:[\\?&]|&amp;)' + paramName + '=([^&]+)', 'i');
            const match = window.location.search.match(reParam);

            return (match && match.length > 1) ? match[1] : '' ;
        }
        const funcNum = getUrlParam('CKEditorFuncNum');
        const mode = getUrlParam('mode');
        define('elFinderConfig', {
            // elFinder options (REQUIRED)
            // Documentation for client options:
            // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
            defaultOpts : {
                url : '";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_connect", ["instance" => ($context["instance"] ?? null), "homeFolder" => ($context["homeFolder"] ?? null)]), "html", null, true);
        echo "',
                lang : '";
        // line 23
        echo twig_escape_filter($this->env, ($context["locale"] ?? null), "html", null, true);
        echo "',
                onlyMimes: ";
        // line 24
        echo ($context["onlyMimes"] ?? null);
        echo ",
                getFileCallback : function(file) {
                    if (funcNum) {
                        ";
        // line 27
        if (($context["relative_path"] ?? null)) {
            // line 28
            echo "                        window.opener.CKEDITOR.tools.callFunction(funcNum, '";
            echo twig_escape_filter($this->env, ($context["pathPrefix"] ?? null), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "schemeAndHttpHost", [], "any", false, false, false, 28), "html", null, true);
            echo "/\", \"\"));
                        ";
        } else {
            // line 30
            echo "                        window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);
                        ";
        }
        // line 32
        echo "                        window.close();
                    }
                },
                commandsOptions : {
                    edit : {
                        extraOptions : {
                            // set API key to enable Creative Cloud image editor
                            // see https://console.adobe.io/
                            creativeCloudApiKey : '',
                            // browsing manager URL for CKEditor, TinyMCE
                            // uses self location with the empty value
                            managerUrl : ''
                        }
                    },
                    quicklook : {
                        // to enable CAD-Files and 3D-Models preview with sharecad.org
                        sharecadMimes : ['image/vnd.dwg', 'image/vnd.dxf', 'model/vnd.dwf', 'application/vnd.hp-hpgl', 'application/plt', 'application/step', 'model/iges', 'application/vnd.ms-pki.stl', 'application/sat', 'image/cgm', 'application/x-msmetafile'],
                        // to enable preview with Google Docs Viewer
                        googleDocsMimes : ['application/pdf', 'image/tiff', 'application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/postscript', 'application/rtf'],
                        // to enable preview with Microsoft Office Online Viewer
                        // these MIME types override \"googleDocsMimes\"
                        officeOnlineMimes : ['application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.spreadsheet', 'application/vnd.oasis.opendocument.presentation']
                    }
                },
                // bootCalback calls at before elFinder boot up
                bootCallback : function(fm, extraObj) {
                    /* any bind functions etc. */
                    fm.bind('init', function() {
                        // any your code
                    });
                    // for example set document.title dynamically.
                    var title = document.title;
                    fm.bind('open', function() {
                        var path = '',
                            cwd  = fm.cwd();
                        if (cwd) {
                            path = fm.path(cwd.hash) || null;
                        }
                        document.title = path? path + ':' + title : title;
                    }).bind('destroy', function() {
                        document.title = title;
                    });
                }
            },
            managers : {
                // 'DOM Element ID': { /* elFinder options of this DOM Element */ }
                'elfinder': {}
            }
        });
    </script>
</head>
<body>

<!-- Element where elFinder will be created (REQUIRED) -->
<div id=\"elfinder\"></div>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/ckeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  87 => 30,  79 => 28,  77 => 27,  71 => 24,  67 => 23,  63 => 22,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FMElfinder/Elfinder/ckeditor.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Resources\\views\\Elfinder\\ckeditor.html.twig");
    }
}
