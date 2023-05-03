<?php

namespace App\Middlewares;
use Chomsky\Http\Middleware;
use Chomsky\Http\Request;
use Chomsky\Http\Response;
use Closure;

class MiddlewareName implements Middleware {
    public function handle(Request $request, Closure $next): Response {
        //code here

        return $next($request);
    }
}