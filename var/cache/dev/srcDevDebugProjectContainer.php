<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9lUOWtL\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9lUOWtL/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container9lUOWtL.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container9lUOWtL\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container9lUOWtL\srcDevDebugProjectContainer(array(
    'container.build_hash' => '9lUOWtL',
    'container.build_id' => '778fff8a',
    'container.build_time' => 1526375884,
), __DIR__.\DIRECTORY_SEPARATOR.'Container9lUOWtL');
