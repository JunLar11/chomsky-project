<?php

namespace App\Middlewares;

use Chomsky\Auth\Auth;
use Chomsky\Http\Middleware;
use Chomsky\Http\Request;
use Chomsky\Http\Response;
use Closure;

class AuthMiddleware implements Middleware {
    public function handle(Request $request, Closure $next): Response {
        if (Auth::isGuest()) {
            return redirect('/login');
        }

        return $next($request);
    }
}