<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWcqN5ob\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWcqN5ob/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWcqN5ob.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWcqN5ob\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWcqN5ob\App_KernelDevDebugContainer([
    'container.build_hash' => 'WcqN5ob',
    'container.build_id' => 'dc16457a',
    'container.build_time' => 1714124694,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWcqN5ob');
