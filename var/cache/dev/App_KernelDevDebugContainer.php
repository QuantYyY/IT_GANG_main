<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOPWaMtE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOPWaMtE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOPWaMtE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOPWaMtE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOPWaMtE\App_KernelDevDebugContainer([
    'container.build_hash' => 'OPWaMtE',
    'container.build_id' => '9a8f8ce7',
    'container.build_time' => 1637074704,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOPWaMtE');
