<?php

namespace ContainerWFqxG40;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSandboxInterfaceControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Sandbox\SandboxInterfaceController' shared autowired service.
     *
     * @return \App\Controller\Sandbox\SandboxInterfaceController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Sandbox\\SandboxInterfaceController'] = $instance = new \App\Controller\Sandbox\SandboxInterfaceController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Sandbox\\SandboxInterfaceController', $container));

        return $instance;
    }
}
