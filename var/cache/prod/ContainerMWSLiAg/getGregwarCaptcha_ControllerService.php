<?php

namespace ContainerMWSLiAg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGregwarCaptcha_ControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'gregwar_captcha.controller' shared autowired service.
     *
     * @return \Gregwar\CaptchaBundle\Controller\CaptchaController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['gregwar_captcha.controller'] = new \Gregwar\CaptchaBundle\Controller\CaptchaController(($container->services['gregwar_captcha.generator'] ?? $container->load('getGregwarCaptcha_GeneratorService')), $container->parameters['gregwar_captcha.config']);
    }
}
