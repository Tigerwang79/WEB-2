<?php

namespace Container66sxltw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSandboxFormControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Sandbox\SandboxFormController' shared autowired service.
     *
     * @return \App\Controller\Sandbox\SandboxFormController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Sandbox'.\DIRECTORY_SEPARATOR.'SandboxFormController.php';

        $container->services['App\\Controller\\Sandbox\\SandboxFormController'] = $instance = new \App\Controller\Sandbox\SandboxFormController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Sandbox\\SandboxFormController', $container));

        return $instance;
    }
}
