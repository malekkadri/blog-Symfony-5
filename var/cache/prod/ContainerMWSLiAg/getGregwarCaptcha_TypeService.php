<?php

namespace ContainerMWSLiAg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGregwarCaptcha_TypeService extends App_KernelProdContainer
{
    /*
     * Gets the public 'gregwar_captcha.type' shared service.
     *
     * @return \Gregwar\CaptchaBundle\Type\CaptchaType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['gregwar_captcha.type'] = new \Gregwar\CaptchaBundle\Type\CaptchaType(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['gregwar_captcha.generator'] ?? $container->load('getGregwarCaptcha_GeneratorService')), ($container->services['translator'] ?? $container->load('getTranslatorService')), $container->parameters['gregwar_captcha.config']);
    }
}