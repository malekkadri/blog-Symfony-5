<?php

namespace ContainerMWSLiAg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\TagRepository' shared autowired service.
     *
     * @return \App\Repository\TagRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\TagRepository'] = new \App\Repository\TagRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
