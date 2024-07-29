<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && Auth::user()->roles()->first() && Auth::user()->roles()->first()->name == 'admin')
            return $next($request);
        else if(Auth::check() && Auth::user()->roles()->first() && Auth::user()->roles()->first()->name == 'player')
            return redirect()->route('player.profile');
        else
            return redirect()->back();
    }
}
