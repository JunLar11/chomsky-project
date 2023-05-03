<?php

use App\Controllers\Home;
use App\Models\User;
use Chomsky\Auth\Auth;
use Chomsky\Http\Response;
use Chomsky\Routing\Route;

Auth::Routes();
Route::get('/', [Home::class,'create']);
Route::get('/form', function () {
    return view('form');
});