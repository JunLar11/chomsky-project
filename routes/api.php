<?php

use App\Models\User;
use Chomsky\Routing\Route;

Route::get('/user/{user}', fn (User $user) => json($user->toArray()));