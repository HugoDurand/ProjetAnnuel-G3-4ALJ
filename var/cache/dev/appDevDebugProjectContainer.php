<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4mntuae\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4mntuae/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container4mntuae.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container4mntuae\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container4mntuae\appDevDebugProjectContainer(array(
    'container.build_hash' => '4mntuae',
    'container.build_id' => '16c66634',
    'container.build_time' => 1527686992,
), __DIR__.\DIRECTORY_SEPARATOR.'Container4mntuae');
