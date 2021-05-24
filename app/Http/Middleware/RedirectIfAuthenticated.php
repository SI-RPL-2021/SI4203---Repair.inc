<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard('mitra')->check()) {

            return redirect('/mitra');

<<<<<<< HEAD
      } else if (Auth::guard('customer')->check()) {
=======
        } else if (Auth::guard('customer')->check()) {
>>>>>>> origin/Firyal_1202180097

          return redirect('/customer');

      } else if (Auth::guard('admin')->check()) {

          return redirect('/admin');

      }

      return $next($request);
  }
}
