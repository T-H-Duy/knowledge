<?php

namespace ContainerCayvFEX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormationControllervalidateLessonService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.BdFiRzT.App\Controller\FormationController::validateLesson()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BdFiRzT.App\\Controller\\FormationController::validateLesson()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'lessonRepository' => ['privates', 'App\\Repository\\LessonRepository', 'getLessonRepositoryService', true],
            'certificationRepository' => ['privates', 'App\\Repository\\CertificationRepository', 'getCertificationRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'lessonRepository' => 'App\\Repository\\LessonRepository',
            'certificationRepository' => 'App\\Repository\\CertificationRepository',
            'em' => '?',
        ]))->withContext('App\\Controller\\FormationController::validateLesson()', $container);
    }
}
