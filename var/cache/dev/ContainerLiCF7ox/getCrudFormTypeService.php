<?php

namespace ContainerLiCF7ox;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCrudFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Form\Type\CrudFormType' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\CrudFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'CrudFormType.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\CrudFormType'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\CrudFormType(($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService')));
    }
}
