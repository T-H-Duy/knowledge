<?php

namespace ContainerGSN64BF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_ErrorPageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.action.error_page' shared service.
     *
     * @return \ApiPlatform\Symfony\Action\ErrorPageAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'ErrorPageAction.php';

        return $container->services['api_platform.action.error_page'] = new \ApiPlatform\Symfony\Action\ErrorPageAction();
    }
}
