<?php

namespace ContainerD7y1Flb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Qj0NniXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qj0NniX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qj0NniX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::add' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController::addProduct' => ['privates', '.service_locator.Frtx4cz', 'get_ServiceLocator_Frtx4czService', true],
            'App\\Controller\\AdminController::deleteUser' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController::editUser' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController::usersList' => ['privates', '.service_locator.QOjUGpS', 'get_ServiceLocator_QOjUGpSService', true],
            'App\\Controller\\ProduitController::productList' => ['privates', '.service_locator.6bIMjA9', 'get_ServiceLocator_6bIMjA9Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::registration' => ['privates', '.service_locator.NGFjL5G', 'get_ServiceLocator_NGFjL5GService', true],
            'App\\Controller\\SiteController::add' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\SiteController::del' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\SuperAdminController::usersList' => ['privates', '.service_locator.QOjUGpS', 'get_ServiceLocator_QOjUGpSService', true],
            'App\\Controller\\UserController::deleteProduct' => ['privates', '.service_locator.8XUY8CO', 'get_ServiceLocator_8XUY8COService', true],
            'App\\Controller\\UserController::editUser' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::editUser2' => ['privates', '.service_locator.kdVjeGe', 'get_ServiceLocator_KdVjeGeService', true],
            'App\\Controller\\UserController::panierUser' => ['privates', '.service_locator.ulHwefD', 'get_ServiceLocator_UlHwefDService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminController:add' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController:addProduct' => ['privates', '.service_locator.Frtx4cz', 'get_ServiceLocator_Frtx4czService', true],
            'App\\Controller\\AdminController:deleteUser' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController:editUser' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\AdminController:usersList' => ['privates', '.service_locator.QOjUGpS', 'get_ServiceLocator_QOjUGpSService', true],
            'App\\Controller\\ProduitController:productList' => ['privates', '.service_locator.6bIMjA9', 'get_ServiceLocator_6bIMjA9Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:registration' => ['privates', '.service_locator.NGFjL5G', 'get_ServiceLocator_NGFjL5GService', true],
            'App\\Controller\\SiteController:add' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\SiteController:del' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\SuperAdminController:usersList' => ['privates', '.service_locator.QOjUGpS', 'get_ServiceLocator_QOjUGpSService', true],
            'App\\Controller\\UserController:deleteProduct' => ['privates', '.service_locator.8XUY8CO', 'get_ServiceLocator_8XUY8COService', true],
            'App\\Controller\\UserController:editUser' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:editUser2' => ['privates', '.service_locator.kdVjeGe', 'get_ServiceLocator_KdVjeGeService', true],
            'App\\Controller\\UserController:panierUser' => ['privates', '.service_locator.ulHwefD', 'get_ServiceLocator_UlHwefDService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminController::add' => '?',
            'App\\Controller\\AdminController::addProduct' => '?',
            'App\\Controller\\AdminController::deleteUser' => '?',
            'App\\Controller\\AdminController::editUser' => '?',
            'App\\Controller\\AdminController::usersList' => '?',
            'App\\Controller\\ProduitController::productList' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::registration' => '?',
            'App\\Controller\\SiteController::add' => '?',
            'App\\Controller\\SiteController::del' => '?',
            'App\\Controller\\SuperAdminController::usersList' => '?',
            'App\\Controller\\UserController::deleteProduct' => '?',
            'App\\Controller\\UserController::editUser' => '?',
            'App\\Controller\\UserController::editUser2' => '?',
            'App\\Controller\\UserController::panierUser' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:add' => '?',
            'App\\Controller\\AdminController:addProduct' => '?',
            'App\\Controller\\AdminController:deleteUser' => '?',
            'App\\Controller\\AdminController:editUser' => '?',
            'App\\Controller\\AdminController:usersList' => '?',
            'App\\Controller\\ProduitController:productList' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:registration' => '?',
            'App\\Controller\\SiteController:add' => '?',
            'App\\Controller\\SiteController:del' => '?',
            'App\\Controller\\SuperAdminController:usersList' => '?',
            'App\\Controller\\UserController:deleteProduct' => '?',
            'App\\Controller\\UserController:editUser' => '?',
            'App\\Controller\\UserController:editUser2' => '?',
            'App\\Controller\\UserController:panierUser' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
