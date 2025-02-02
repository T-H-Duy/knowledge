<?php

namespace ContainerCayvFEX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStripeServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\StripeService' shared autowired service.
     *
     * @return \App\Service\StripeService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'StripeService.php';

        return $container->privates['App\\Service\\StripeService'] = new \App\Service\StripeService($container->getEnv('STRIPE_SECRET_KEY'));
    }
}
