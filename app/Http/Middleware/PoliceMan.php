<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PoliceMan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // if ($role == 'admin') {
        //     return redirect()->route('admin');
        // }
        // if ($role == 'user') {
        //     return redirect()->route('user');
        // }
        if ($request->route('type') == "admin") {
            return redirect()->route('admin');
        }
        if ($request->route('type') == "user") {
            return redirect()->route('user');
        }
        return $next($request);
    }
}
