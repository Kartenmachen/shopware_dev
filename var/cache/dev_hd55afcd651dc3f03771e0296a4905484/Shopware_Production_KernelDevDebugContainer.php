<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRjNPltY\Shopware_Production_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRjNPltY/Shopware_Production_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRjNPltY.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRjNPltY\Shopware_Production_KernelDevDebugContainer::class, Shopware_Production_KernelDevDebugContainer::class, false);
}

return new \ContainerRjNPltY\Shopware_Production_KernelDevDebugContainer([
    'container.build_hash' => 'RjNPltY',
    'container.build_id' => '9da9ede0',
    'container.build_time' => 1626262609,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRjNPltY');
