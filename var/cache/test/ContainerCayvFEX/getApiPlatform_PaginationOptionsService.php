<?php

namespace ContainerCayvFEX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_PaginationOptionsService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.pagination_options' shared service.
     *
     * @return \ApiPlatform\State\Pagination\PaginationOptions
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'state'.\DIRECTORY_SEPARATOR.'Pagination'.\DIRECTORY_SEPARATOR.'PaginationOptions.php';

        return $container->privates['api_platform.pagination_options'] = new \ApiPlatform\State\Pagination\PaginationOptions(true, 'page', false, 'itemsPerPage', false, 'pagination', 30, NULL, false, false, 'partial');
    }
}
