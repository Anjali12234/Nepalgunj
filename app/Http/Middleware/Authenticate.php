<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    public function handle(Request $request, Closure $next)
    {
        // if (!auth()->guard('registered-user')->check()) {
        //     return redirect()->route('welcome');
        // }

        // echo "hello middleware";
        return $next($request);
    }
}
