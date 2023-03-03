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

/* base.html.twig */
class __TwigTemplate_703bc8dc994a7cd25635549724c7ec08 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'Footer' => [$this, 'block_Footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 44
        echo "</head>
<body>

<!-- BEGAIN PRELOADER -->
<div id=\"preloader\">
    <div id=\"status\">&nbsp;</div>


</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class=\"scrollToTop\" href=\"#\"><i class=\"fa fa-angle-up\"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header -->
<header id=\"header\">
    <!-- header top search -->
    <div class=\"header-top\">
        <div class=\"container\">
            <form action=\"\">
                <div id=\"search\">
                    <input type=\"text\" placeholder=\"Type your search keyword here and hit Enter...\" name=\"s\" id=\"m_search\" style=\"display: inline-block;\">
                    <button type=\"submit\">
                        <i class=\"fa fa-search\"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- header bottom -->
    <div class=\"header-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <div class=\"header-contact\">
                        <ul>
                            <li>
                                <div class=\"phone\">
                                    <i class=\"fa fa-phone\"></i>
                                    +1(800) 699-7071
                                </div>
                            </li>
                            <li>
                                <div class=\"mail\">
                                    <i class=\"fa fa-envelope\"></i>
                                    iam@domain.com
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                    <div class=\"header-login\">
                        <a class=\"login modal-form\" data-target=\"#login-form\" data-toggle=\"modal\" href=\"#\">Login / Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header -->

<!-- Start login modal window -->
<div aria-hidden=\"false\" role=\"dialog\" tabindex=\"-1\" id=\"login-form\" class=\"modal leread-modal fade in\">
    <div class=\"modal-dialog\">
        <!-- Start login section -->
        <div id=\"login-content\" class=\"modal-content\">
            <div class=\"modal-header\">
                <button aria-label=\"Close\" data-dismiss=\"modal\" class=\"close\" type=\"button\"><span aria-hidden=\"true\">×</span></button>
                <h4 class=\"modal-title\"><i class=\"fa fa-unlock-alt\"></i>Login</h4>
            </div>
            <div class=\"modal-body\">
                <form>
                    <div class=\"form-group\">
                        <input type=\"text\" placeholder=\"User name\" class=\"form-control\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
                    </div>
                    <div class=\"loginbox\">
                        <label><input type=\"checkbox\"><span>Remember me</span></label>
                        <button class=\"btn signin-btn\" type=\"button\">SIGN IN</button>
                    </div>
                </form>
            </div>
            <div class=\"modal-footer footer-box\">
                <a href=\"#\">Forgot password ?</a>
                <span>No account ? <a id=\"signup-btn\" href=\"#\">Sign Up.</a></span>
            </div>
        </div>
        <!-- Start signup section -->
        <div id=\"signup-content\" class=\"modal-content\">
            <div class=\"modal-header\">
                <button aria-label=\"Close\" data-dismiss=\"modal\" class=\"close\" type=\"button\"><span aria-hidden=\"true\">×</span></button>
                <h4 class=\"modal-title\"><i class=\"fa fa-lock\"></i>Sign Up</h4>
            </div>
            <div class=\"modal-body\">
                <form>
                    <div class=\"form-group\">
                        <input placeholder=\"Name\" class=\"form-control\">
                    </div>
                    <div class=\"form-group\">
                        <input placeholder=\"Username\" class=\"form-control\">
                    </div>
                    <div class=\"form-group\">
                        <input placeholder=\"Email\" class=\"form-control\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
                    </div>
                    <div class=\"signupbox\">
                        <span>Already got account? <a id=\"login-btn\" href=\"#\">Sign In.</a></span>
                    </div>
                    <div class=\"loginbox\">
                        <label><input type=\"checkbox\"><span>Remember me</span><i class=\"fa\"></i></label>
                        <button class=\"btn signin-btn\" type=\"button\">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End login modal window -->

    <!-- BEGIN MENU -->
    <section id=\"menu-area\">
        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <a class=\"navbar-brand\" href=\"index.html\">Intensely</a>
                    <!-- IMG BASED LOGO  -->
                    <!-- <a class=\"navbar-brand\" href=\"index.html\"><img src=\"assets/images/logo.png\" alt=\"logo\"></a> -->
                </div>
                <div id=\"navbar\" class=\"navbar-collapse collapse\">
                    <ul id=\"top-menu\" class=\"nav navbar-nav navbar-right main-nav\">
                        <li class=\"active\"><a href=\"index.html\">Home</a></li>
                        <li><a href=\"feature.html\">Feature</a></li>
                        <li><a href=\"service.html\">Service</a></li>
                        <li><a href=\"portfolio.html\">Portfolio</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog <span class=\"fa fa-angle-down\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
                        
                            </ul>
                        </li>
                        <li><a href=\"404.html\">404 Page</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
                <a href=\"#\" id=\"search-icon\">
                    <i class=\"fa fa-search\">
                    </i>
                </a>
            </div>
        </nav>
    </section>
    <!-- END MENU -->
";
        // line 212
        $this->displayBlock('body', $context, $blocks);
        // line 215
        echo "

";
        // line 217
        $this->displayBlock('Footer', $context, $blocks);
        // line 245
        echo "<!-- jQuery library -->
";
        // line 246
        $this->displayBlock('js', $context, $blocks);
        // line 277
        echo "</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "A+BFB : Home";
    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Bootstrap -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Slick slider -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slick.css"), "html", null, true);
        echo "\">
        <!-- Fancybox slider -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" assets/css/jquery.fancybox.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <!-- Animate css -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
        <!-- Progress bar  -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap-progressbar-3.3.4.css"), "html", null, true);
        echo "\">
        <!-- Theme color -->
        <link id=\"switcher\" href=\" ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/theme-color/default-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Main Style -->
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Fonts -->

        <!-- Open Sans for body font -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Lato for Title -->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    ";
    }

    // line 212
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 213
        echo "
";
    }

    // line 217
    public function block_Footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "<br>
<br>
<br>
<br>
 <!-- Start footer -->
<footer id=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-6\">
                <div class=\"footer-left\">
                    <p>Designed by <a href=\"http://www.markups.io/\">MarkUps.io</a></p>
                </div>
            </div>
            <div class=\"col-md-6 col-sm-6\">
                <div class=\"footer-right\">
                    <a href=\"index.html\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer> 
<!-- End footer -->
";
    }

    // line 246
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 247
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- Slick Slider -->
    <script type=\"text/javascript\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slick.js"), "html", null, true);
        echo "\"></script>
    <!-- mixit slider -->
    <script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.mixitup.js"), "html", null, true);
        echo "\"></script>
    <!-- Add fancyBox -->
    <script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>
    <!-- counter -->
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waypoints.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.counterup.js"), "html", null, true);
        echo "\"></script>
    <!-- Wow animation -->
    <script type=\"text/javascript\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/wow.js"), "html", null, true);
        echo "\"></script>
    <!-- progress bar   -->
    <script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-progressbar.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/purecounter/purecounter.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom js -->
    <script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 275,  445 => 273,  440 => 271,  436 => 270,  432 => 269,  428 => 268,  424 => 267,  420 => 266,  416 => 265,  412 => 264,  408 => 263,  403 => 261,  398 => 259,  394 => 258,  389 => 256,  384 => 254,  379 => 252,  374 => 250,  369 => 247,  365 => 246,  335 => 218,  331 => 217,  326 => 213,  322 => 212,  302 => 28,  296 => 25,  291 => 23,  286 => 21,  281 => 19,  276 => 17,  271 => 15,  265 => 13,  261 => 12,  254 => 8,  249 => 277,  247 => 246,  244 => 245,  242 => 217,  238 => 215,  236 => 212,  217 => 196,  63 => 44,  61 => 12,  56 => 10,  51 => 8,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\Malik\\Desktop\\blog-main\\templates\\base.html.twig");
    }
}
