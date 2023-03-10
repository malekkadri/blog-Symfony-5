<?php

namespace ContainerMWSLiAg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGregwarCaptcha_PhraseBuilderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'gregwar_captcha.phrase_builder' shared service.
     *
     * @return \Gregwar\Captcha\PhraseBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['gregwar_captcha.phrase_builder'] = new \Gregwar\Captcha\PhraseBuilder();
    }
}
