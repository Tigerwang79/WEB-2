<?php

namespace ContainerWFqxG40;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSandboxDoctrineControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Sandbox\SandboxDoctrineController' shared autowired service.
     *
     * @return \App\Controller\Sandbox\SandboxDoctrineController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Sandbox\\SandboxDoctrineController'] = $instance = new \App\Controller\Sandbox\SandboxDoctrineController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Sandbox\\SandboxDoctrineController', $container));

        return $instance;
    }
}
