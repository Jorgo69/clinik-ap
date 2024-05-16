<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MedecinMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Si  authentifier == true && statut != de patient Continue ...
        if(auth()->check() && auth()->user()->statut === 'medecin' )
        {
            return $next($request);
        }
        // ya pas de Sinon donc sa va juste ignorer la requete ... 
        // en continuant sa va 
        
        // Redirigez vers une autre page ou renvoyez une réponse d'erreur pour les utilisateurs non autorisés
        return redirect('/login')->with('error', 'Accès refusé. Vous devez être un administrateur pour accéder à cette page.');
        // return redirect('/home')->with('error', 'Accès refusé. Vous devez être un administrateur pour accéder à cette page.');
    }
}
