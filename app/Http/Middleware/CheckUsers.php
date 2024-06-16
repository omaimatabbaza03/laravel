<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUsers
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
        if ($request->has('username') && $request->username !== 'oumaima' && $request->has('password') && $request->password !== '1234') {
            
    
            return redirect()->back()->withInput()->withErrors(['login' => 'Identifiants incorrects']);
        }
        return $next($request);
    }
}
