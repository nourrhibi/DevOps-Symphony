<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBJ8iMkz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBJ8iMkz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBJ8iMkz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBJ8iMkz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBJ8iMkz\App_KernelDevDebugContainer([
    'container.build_hash' => 'BJ8iMkz',
    'container.build_id' => 'd8adfbf5',
    'container.build_time' => 1658146900,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBJ8iMkz');