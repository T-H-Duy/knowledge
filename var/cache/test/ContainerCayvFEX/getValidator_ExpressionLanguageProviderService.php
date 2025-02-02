<?php

namespace ContainerCayvFEX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getValidator_ExpressionLanguageProviderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'validator.expression_language_provider' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionLanguageProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'ExpressionLanguageProvider.php';

        return $container->privates['validator.expression_language_provider'] = new \Symfony\Component\Validator\Constraints\ExpressionLanguageProvider();
    }
}
