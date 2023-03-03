<?php

namespace ContainerMWSLiAg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_TwigService extends App_KernelProdContainer
{
    /*
     * Gets the public '.container.private.twig' shared service.
     *
     * @return \Twig\Environment
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle/Resources/views'), 'DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-migrations-bundle/Resources/views'), '!DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/templates'), 'KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-paginator-bundle/templates'), '!KnpPaginator');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'ckeditor-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), 'FOSCKEditor');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'ckeditor-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), '!FOSCKEditor');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'helios-ag'.\DIRECTORY_SEPARATOR.'fm-elfinder-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), 'FMElfinder');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'helios-ag'.\DIRECTORY_SEPARATOR.'fm-elfinder-bundle'.\DIRECTORY_SEPARATOR.'src/Resources/views'), '!FMElfinder');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gregwar'.\DIRECTORY_SEPARATOR.'captcha-bundle/Resources/views'), 'GregwarCaptcha');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gregwar'.\DIRECTORY_SEPARATOR.'captcha-bundle/Resources/views'), '!GregwarCaptcha');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'twig-bridge/Resources/views/Form'));

        $container->services['.container.private.twig'] = $instance = new \Twig\Environment($a, ['autoescape' => 'name', 'cache' => ($container->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => false, 'strict_variables' => false]);

        $b = ($container->services['translator'] ?? $container->load('getTranslatorService'));
        $c = ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService());

        $e = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), new \Symfony\Component\Asset\Context\RequestStackContext($c, $d->getBaseUrl(), $d->isSecure())), new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0));
        $f = ($container->services['router'] ?? $container->getRouterService());
        $g = ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService());
        $h = new \Symfony\Bridge\Twig\AppVariable();
        $h->setEnvironment('prod');
        $h->setDebug(false);
        if ($container->has('.container.private.security.token_storage')) {
            $h->setTokenStorage($g);
        }
        if ($container->has('request_stack')) {
            $h->setRequestStack($c);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($e));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($container->privates['debug.file_link_formatter'] ?? ($container->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($f));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($c, $d)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SerializerExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($container->privates['security.logout_url_generator'] ?? $container->getSecurity_LogoutUrlGeneratorService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService()), new \Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator($c, ($container->privates['security.firewall.map'] ?? $container->getSecurity_Firewall_MapService()), $g)));
        $instance->addExtension(new \App\twig\sidebarExtension(($container->privates['App\\Repository\\ArticleRepository'] ?? $container->load('getArticleRepositoryService')), ($container->privates['App\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\TagRepository'] ?? $container->load('getTagRepositoryService')), ($container->privates['App\\Repository\\CommentRepository'] ?? $container->load('getCommentRepositoryService')), ($container->privates['App\\Repository\\LinkRepository'] ?? $container->load('getLinkRepositoryService')), $instance));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Twig\Extra\Intl\IntlExtension());
        $instance->addExtension(new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension(new \Knp\Bundle\PaginatorBundle\Helper\Processor($f, $b)));
        $instance->addExtension(new \FOS\CKEditorBundle\Twig\CKEditorExtension(new \FOS\CKEditorBundle\Renderer\CKEditorRenderer(new \FOS\CKEditorBundle\Builder\JsonBuilder(($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService'))), $f, $e, $c, $instance, (($container->hasParameter("locale")) ? ($container->getParameter("locale")) : (null)))));
        $instance->addExtension(new \FM\ElfinderBundle\Twig\Extension\FMElfinderExtension($instance));
        $instance->addExtension(new \Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension(new \Knp\Bundle\TimeBundle\DateTimeFormatter($b)));
        $instance->addGlobal('app', $h);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', true],
            'Symfony\\Bridge\\Twig\\Extension\\SerializerRuntime' => ['privates', 'twig.runtime.serializer', 'getTwig_Runtime_SerializerService', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', true],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\SerializerRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ])));
        $instance->addGlobal('locales', $container->parameters['app.locales']);
        $instance->addGlobal('site_name', 'A+BFB');
        $instance->addGlobal('site_name_full', 'My Wonderfull Blog');
        $instance->addGlobal('site_url', 'A+BFB.com');
        $instance->addGlobal('site_url_full', 'https://www.A+BFB.com');
        $instance->addGlobal('site_mail', 'contact@A+BFB.com');
        $instance->addGlobal('site_author', 'citizenz7');
        $instance->addGlobal('site_address1', 'A108 Adam Street');
        $instance->addGlobal('site_address_city', 'New York');
        $instance->addGlobal('site_address_code', 'NY 535022');
        $instance->addGlobal('site_address_country', 'United States');
        $instance->addGlobal('site_address_phone', '+1 5589 55488 55');
        $instance->addGlobal('site_version', '1.0.1');
        $instance->addGlobal('site_year', '2021');
        $instance->addGlobal('site_keywords', 'website, blog, news, info, opensource, linux, windows, apple, smartphone, ios, android, cinema, music');
        $instance->addGlobal('site_presentation', 'Cras fermentum odio eu feugiat lide par naso tierra.  Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');
        $instance->addGlobal('github_repo', 'https://github.com/citizenz7/blog');
        $instance->addGlobal('github_url', '');
        $instance->addGlobal('twitter_url', '');
        $instance->addGlobal('facebook_url', '');
        $instance->addGlobal('instagram_url', '');
        $instance->addGlobal('linkedin_url', '');
        $instance->addGlobal('discord_url', '');
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }
}