<?php

namespace ContainerLiCF7ox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getThemeCrudControllerconfigureFiltersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3Xb4Hur.App\Controller\Admin\ThemeCrudController::configureFilters()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3Xb4Hur.App\\Controller\\Admin\\ThemeCrudController::configureFilters()'] = ($container->privates['.service_locator.3Xb4Hur'] ?? $container->load('get_ServiceLocator_3Xb4HurService'))->withContext('App\\Controller\\Admin\\ThemeCrudController::configureFilters()', $container);
    }
}
