<?php

namespace ContainerCayvFEX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerconfigureUserMenuService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator._1ARgjp.App\Controller\Admin\DashboardController::configureUserMenu()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._1ARgjp.App\\Controller\\Admin\\DashboardController::configureUserMenu()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'user' => ['privates', '.errored..service_locator._1ARgjp.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator._1ARgjp": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. You should maybe alias this interface to the existing "App\\Entity\\User" service.'],
        ], [
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]))->withContext('App\\Controller\\Admin\\DashboardController::configureUserMenu()', $container);
    }
}
