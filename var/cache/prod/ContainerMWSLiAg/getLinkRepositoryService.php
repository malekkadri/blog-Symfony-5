<?php

namespace ContainerMWSLiAg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLinkRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\LinkRepository' shared autowired service.
     *
     * @return \App\Repository\LinkRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\LinkRepository'] = new \App\Repository\LinkRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
