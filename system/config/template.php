<?php

return [
    'extension' => '.html',
    'templates' => glob(CLIENT.'views'.DS.'*', GLOB_ONLYDIR),
    'settings' => [
        'cache' => CLIENT . 'storage' .DS. 'cache',
        'debug' => true
    ]
];