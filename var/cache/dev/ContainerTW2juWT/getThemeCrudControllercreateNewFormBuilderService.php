<?php

namespace ContainerTW2juWT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getThemeCrudControllercreateNewFormBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o3gmRre.App\Controller\Admin\ThemeCrudController::createNewFormBuilder()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o3gmRre.App\\Controller\\Admin\\ThemeCrudController::createNewFormBuilder()'] = ($container->privates['.service_locator.o3gmRre'] ?? $container->load('get_ServiceLocator_O3gmRreService'))->withContext('App\\Controller\\Admin\\ThemeCrudController::createNewFormBuilder()', $container);
    }
}
