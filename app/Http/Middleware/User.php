<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            if (!Auth::check()) {
            return redirect()->route('/');
           }
           if (Auth::user()->role == 'user') {
            return $next($request);
           }
           if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.dashboard');
           }
    }

}
