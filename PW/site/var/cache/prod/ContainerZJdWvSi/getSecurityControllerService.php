<?php

namespace ContainerZJdWvSi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\SecurityController' shared autowired service.
     *
     * @return \App\Controller\SecurityController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\SecurityController'] = $instance = new \App\Controller\SecurityController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\SecurityController', $container));

        return $instance;
    }
}
