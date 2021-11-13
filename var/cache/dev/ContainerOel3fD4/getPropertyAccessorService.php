<?php

namespace ContainerOel3fD4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyAccessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['property_info.reflection_extractor'] ?? ($container->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));

        return $container->privates['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(3, 2, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false), $a, $a);
    }
}
