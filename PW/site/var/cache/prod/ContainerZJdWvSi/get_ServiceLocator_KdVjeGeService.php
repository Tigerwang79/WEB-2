<?php

namespace ContainerZJdWvSi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KdVjeGeService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.kdVjeGe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kdVjeGe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hashedPassword' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'user' => ['privates', '.errored..service_locator.kdVjeGe.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.kdVjeGe": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'hashedPassword' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}