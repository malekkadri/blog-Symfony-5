<?php

namespace ContainerMWSLiAg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WCZyunvService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.wCZyunv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wCZyunv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'linkRepository' => ['privates', 'App\\Repository\\LinkRepository', 'getLinkRepositoryService', true],
        ], [
            'linkRepository' => 'App\\Repository\\LinkRepository',
        ]);
    }
}
