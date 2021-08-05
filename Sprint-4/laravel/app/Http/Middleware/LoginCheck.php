<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginCheck
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
        if(session()->has('username') && session('level') == 'Admin'){
            return $next($request);
        }else{
            session()->flash('loginCheck', 'Anda belum login');
            return redirect('/login');
        }
    }
}
