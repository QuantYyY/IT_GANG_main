<?php

namespace ContainerXHsoP0h;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddAlbumControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AddAlbumController' shared autowired service.
     *
     * @return \App\Controller\AddAlbumController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AddAlbumController'] = $instance = new \App\Controller\AddAlbumController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\AddAlbumController', $container));

        return $instance;
    }
}
