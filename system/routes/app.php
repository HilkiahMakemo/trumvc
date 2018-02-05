<?php

return [
    "/" => [
        "method" => 'any', 'group' => 'guest',
        'class'  => ["AboutController", "about"]
    ],
    "other" => [
        "method" => "any", "group" => "Better",
        "class" => [IndexController::class, "index"]
    ]

];