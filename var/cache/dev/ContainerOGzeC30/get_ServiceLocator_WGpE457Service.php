<?php

namespace ContainerOGzeC30;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WGpE457Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WGpE457' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WGpE457'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tag' => ['privates', '.errored..service_locator.WGpE457.App\\Entity\\Tag', NULL, 'Cannot autowire service ".service_locator.WGpE457": it references class "App\\Entity\\Tag" but no such service exists.'],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'tag' => 'App\\Entity\\Tag',
            'translator' => '?',
        ]);
    }
}
