<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFFgRtQd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFFgRtQd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFFgRtQd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFFgRtQd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFFgRtQd\App_KernelDevDebugContainer([
    'container.build_hash' => 'FFgRtQd',
    'container.build_id' => '3f148b32',
    'container.build_time' => 1637066060,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFFgRtQd');
