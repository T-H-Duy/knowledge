<?php

namespace ContainerCayvFEX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Serializer_ContextBuilder_FilterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.serializer.context_builder.filter' shared service.
     *
     * @return \ApiPlatform\Serializer\SerializerFilterContextBuilder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'state'.\DIRECTORY_SEPARATOR.'SerializerContextBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'serializer'.\DIRECTORY_SEPARATOR.'SerializerFilterContextBuilder.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container));

        if (isset($container->privates['api_platform.serializer.context_builder.filter'])) {
            return $container->privates['api_platform.serializer.context_builder.filter'];
        }
        $b = ($container->privates['api_platform.serializer.context_builder.filter.inner'] ?? $container->load('getApiPlatform_Serializer_ContextBuilder_Filter_InnerService'));

        if (isset($container->privates['api_platform.serializer.context_builder.filter'])) {
            return $container->privates['api_platform.serializer.context_builder.filter'];
        }

        return $container->privates['api_platform.serializer.context_builder.filter'] = new \ApiPlatform\Serializer\SerializerFilterContextBuilder($a, ($container->privates['api_platform.filter_locator'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], [])), $b);
    }
}
