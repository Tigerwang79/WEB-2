<?php

namespace ContainerCzIIxIN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSandboxPrefixControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Sandbox\SandboxPrefixController' shared autowired service.
     *
     * @return \App\Controller\Sandbox\SandboxPrefixController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Sandbox\\SandboxPrefixController'] = $instance = new \App\Controller\Sandbox\SandboxPrefixController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Sandbox\\SandboxPrefixController', $container));

        return $instance;
    }
}
