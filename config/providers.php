<?php

return [
    'boot' => [
        Chomsky\Providers\ServerServiceProvider::class,
        Chomsky\Providers\DatabaseDriverServiceProvider::class,
        Chomsky\Providers\SessionStorageServiceProvider::class,
        Chomsky\Providers\ViewServiceProvider::class,
        Chomsky\Providers\AuthenticationServiceProvider::class,
        Chomsky\Providers\HasherServiceProvider::class,
        Chomsky\Providers\FileStorageDriverServiceProvider::class,
    ],

    'runtime' => [
        App\Providers\RuleServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\AppServiceProvider::class,
    ],
    'cli'=>[
        Chomsky\Providers\DatabaseDriverServiceProvider::class,
    ]
];