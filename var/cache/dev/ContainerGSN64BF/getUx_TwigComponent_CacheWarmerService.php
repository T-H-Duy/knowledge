<?php

namespace ContainerGSN64BF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_CacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.cache_warmer' shared service.
     *
     * @return \Symfony\UX\TwigComponent\CacheWarmer\TwigComponentCacheWarmer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CacheWarmer'.\DIRECTORY_SEPARATOR.'TwigComponentCacheWarmer.php';

        return $container->privates['ux.twig_component.cache_warmer'] = new \Symfony\UX\TwigComponent\CacheWarmer\TwigComponentCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ux.twig_component.component_properties' => ['privates', 'ux.twig_component.component_properties', 'getUx_TwigComponent_ComponentPropertiesService', true],
        ], [
            'ux.twig_component.component_properties' => 'Symfony\\UX\\TwigComponent\\ComponentProperties',
        ]))->withContext('ux.twig_component.cache_warmer', $container));
    }
}
