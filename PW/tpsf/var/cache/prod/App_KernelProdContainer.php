<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWFqxG40\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWFqxG40/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerWFqxG40.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerWFqxG40\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerWFqxG40\App_KernelProdContainer([
    'container.build_hash' => 'WFqxG40',
    'container.build_id' => 'ab5c42a8',
    'container.build_time' => 1648575976,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWFqxG40');