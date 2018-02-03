<?php

return [
    'routes'   => glob(realpath(__DIR__.'/system/routes').DS.'*.php', GLOB_NOSORT),
    'configs'  => glob(realpath(__DIR__.'/system/config').DS.'*.php', GLOB_NOSORT),
];