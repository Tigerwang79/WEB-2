<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container66sxltw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container66sxltw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container66sxltw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container66sxltw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container66sxltw\App_KernelDevDebugContainer([
    'container.build_hash' => '66sxltw',
    'container.build_id' => '26679f5b',
    'container.build_time' => 1651148021,
], __DIR__.\DIRECTORY_SEPARATOR.'Container66sxltw');
