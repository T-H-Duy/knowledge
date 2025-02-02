<?php

namespace ContainerCayvFEX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormationControllerdetailLessonService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.3L8N5lC.App\Controller\FormationController::detailLesson()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3L8N5lC.App\\Controller\\FormationController::detailLesson()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'lessonRepository' => ['privates', 'App\\Repository\\LessonRepository', 'getLessonRepositoryService', true],
            'purchaseRepository' => ['privates', 'App\\Repository\\PurchaseRepository', 'getPurchaseRepositoryService', true],
            'certificationRepository' => ['privates', 'App\\Repository\\CertificationRepository', 'getCertificationRepositoryService', true],
        ], [
            'lessonRepository' => 'App\\Repository\\LessonRepository',
            'purchaseRepository' => 'App\\Repository\\PurchaseRepository',
            'certificationRepository' => 'App\\Repository\\CertificationRepository',
        ]))->withContext('App\\Controller\\FormationController::detailLesson()', $container);
    }
}
