<?php

namespace ContainerCayvFEX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminRouteLoaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Router\AdminRouteLoader' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Router\AdminRouteLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'Loader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Router'.\DIRECTORY_SEPARATOR.'AdminRouteLoader.php';

        $a = ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminRouteGenerator'] ?? self::getAdminRouteGeneratorService($container));

        if (isset($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminRouteLoader'])) {
            return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminRouteLoader'];
        }

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminRouteLoader'] = new \EasyCorp\Bundle\EasyAdminBundle\Router\AdminRouteLoader($a, ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()), $container->targetDir.'');
    }
}
