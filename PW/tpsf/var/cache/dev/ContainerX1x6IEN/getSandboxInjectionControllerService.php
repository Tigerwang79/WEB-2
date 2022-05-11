<?php

namespace ContainerX1x6IEN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSandboxInjectionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Sandbox\SandboxInjectionController' shared autowired service.
     *
     * @return \App\Controller\Sandbox\SandboxInjectionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Sandbox/SandboxInjectionController.php';

        $container->services['App\\Controller\\Sandbox\\SandboxInjectionController'] = $instance = new \App\Controller\Sandbox\SandboxInjectionController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Sandbox\\SandboxInjectionController', $container));

        return $instance;
    }
}