<?php

namespace ContainerZJdWvSi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTotalService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Service\Total' shared autowired service.
     *
     * @return \App\Service\Total
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Service\\Total'] = new \App\Service\Total();
    }
}
