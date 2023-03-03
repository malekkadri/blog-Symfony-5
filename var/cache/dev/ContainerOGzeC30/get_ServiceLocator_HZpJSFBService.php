<?php

namespace ContainerOGzeC30;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HZpJSFBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HZpJSFB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HZpJSFB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'linkRepository' => ['privates', 'App\\Repository\\LinkRepository', 'getLinkRepositoryService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'linkRepository' => 'App\\Repository\\LinkRepository',
            'paginator' => '?',
        ]);
    }
}