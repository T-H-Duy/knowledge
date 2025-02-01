<?php

namespace ContainerGSN64BF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormationControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AI5Yibq.App\Controller\FormationController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AI5Yibq.App\\Controller\\FormationController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'themeRepository' => ['privates', 'App\\Repository\\ThemeRepository', 'getThemeRepositoryService', true],
            'purchaseRepository' => ['privates', 'App\\Repository\\PurchaseRepository', 'getPurchaseRepositoryService', true],
        ], [
            'themeRepository' => 'App\\Repository\\ThemeRepository',
            'purchaseRepository' => 'App\\Repository\\PurchaseRepository',
        ]))->withContext('App\\Controller\\FormationController::index()', $container);
    }
}
