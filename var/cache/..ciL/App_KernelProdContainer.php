<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container96j5L06\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container96j5L06/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container96j5L06.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container96j5L06\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container96j5L06\App_KernelProdContainer([
    'container.build_hash' => '96j5L06',
    'container.build_id' => '850550f8',
    'container.build_time' => 1654005875,
], __DIR__.\DIRECTORY_SEPARATOR.'Container96j5L06');
