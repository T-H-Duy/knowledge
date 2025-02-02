<?php

namespace ContainerCayvFEX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ApiPlatform_DebugResource_CommandService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.api_platform.debug_resource.command' shared service.
     *
     * @return \ApiPlatform\Symfony\Bundle\Command\DebugResourceCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugResourceCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Cloner'.\DIRECTORY_SEPARATOR.'ClonerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Cloner'.\DIRECTORY_SEPARATOR.'AbstractCloner.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'var-dumper'.\DIRECTORY_SEPARATOR.'Cloner'.\DIRECTORY_SEPARATOR.'VarCloner.php';

        $container->privates['debug.api_platform.debug_resource.command'] = $instance = new \ApiPlatform\Symfony\Bundle\Command\DebugResourceCommand(($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), ($container->privates['debug.var_dumper.cloner'] ??= new \Symfony\Component\VarDumper\Cloner\VarCloner()), ($container->privates['debug.var_dumper.cli_dumper'] ??= new \Symfony\Component\VarDumper\Dumper\CliDumper()));

        $instance->setName('debug:api-resource');

        return $instance;
    }
}
