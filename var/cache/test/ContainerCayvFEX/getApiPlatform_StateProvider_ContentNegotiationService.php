<?php

namespace ContainerCayvFEX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProvider_ContentNegotiationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.state_provider.content_negotiation' shared service.
     *
     * @return \ApiPlatform\State\Provider\ContentNegotiationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'metadata'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'ContentNegotiationTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'state'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'ContentNegotiationProvider.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'willdurand'.\DIRECTORY_SEPARATOR.'negotiation'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Negotiation'.\DIRECTORY_SEPARATOR.'AbstractNegotiator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'willdurand'.\DIRECTORY_SEPARATOR.'negotiation'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Negotiation'.\DIRECTORY_SEPARATOR.'Negotiator.php';

        return $container->privates['api_platform.state_provider.content_negotiation'] = new \ApiPlatform\State\Provider\ContentNegotiationProvider(($container->privates['api_platform.state_provider.parameter'] ?? $container->load('getApiPlatform_StateProvider_ParameterService')), ($container->privates['api_platform.negotiator'] ??= new \Negotiation\Negotiator()), $container->parameters['api_platform.formats'], $container->parameters['api_platform.error_formats']);
    }
}
