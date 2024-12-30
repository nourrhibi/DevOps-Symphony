<?php

namespace ContainerBJ8iMkz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_22EfiitService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.22Efiit' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.22Efiit'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\PostController::edit' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\PostController::index' => ['privates', '.service_locator.ZTtrrPm', 'get_ServiceLocator_ZTtrrPmService', true],
            'App\\Controller\\PostController::show' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\PostController:edit' => ['privates', '.service_locator.E6OewJ8', 'get_ServiceLocator_E6OewJ8Service', true],
            'App\\Controller\\PostController:index' => ['privates', '.service_locator.ZTtrrPm', 'get_ServiceLocator_ZTtrrPmService', true],
            'App\\Controller\\PostController:show' => ['privates', '.service_locator.d00XA5i', 'get_ServiceLocator_D00XA5iService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.wOdllM6', 'get_ServiceLocator_WOdllM6Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\PostController::edit' => '?',
            'App\\Controller\\PostController::index' => '?',
            'App\\Controller\\PostController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\PostController:edit' => '?',
            'App\\Controller\\PostController:index' => '?',
            'App\\Controller\\PostController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
