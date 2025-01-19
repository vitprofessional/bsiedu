<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class bsiadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->exists('bsiadmin')):
            // user value cannot be found in session
            return redirect(route('adminlogin'))->with('warning','Please login first to continue');
        endif;
        return $next($request);
    }
}
