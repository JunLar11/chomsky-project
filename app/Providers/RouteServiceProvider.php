<?php

namespace App\Providers;

use Chomsky\App;
use Chomsky\Providers\ServiceProvider;
use Chomsky\Routing\Route;

class RouteServiceProvider implements ServiceProvider
{
    public function registerServices(){
        Route::load(App::$root . "/routes");
    }
}
