<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCredentials
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
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username !== 'oumaima' || $password !== '1234') {
            // Rediriger l'utilisateur vers une page d'erreur ou une autre action
            return redirect()->route('login')->with('error', 'Identifiants de connexion invalides');
        }
        else{
            return redirect()->route('users');
 
        }

        return $next($request);
    }
}
