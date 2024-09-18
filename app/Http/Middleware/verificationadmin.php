<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class verificationadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->guest()) {
            return redirect('/login')->with('messagedanger', "Veuillez vous connecter en tant qu'administrateur pour accéder à cette page");
        }elseif( auth()->user()->role_id !== 1){
            return redirect('/')->with('messagedanger', "Votre statut ne vous permet pas d'accéder à cette page");
        }
        
        return $next($request);
    }
}
