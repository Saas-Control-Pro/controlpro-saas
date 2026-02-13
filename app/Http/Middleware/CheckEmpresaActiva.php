<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckEmpresaActiva
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        $empresa = auth()->user()->empresa;

        if (
            !$empresa ||
            $empresa->estado !== 'activa' ||
            ($empresa->subscription_ends_at && now()->greaterThan($empresa->subscription_ends_at))
        ) {
            auth()->logout();
            return redirect('/login')->withErrors([
                'error' => 'Empresa suspendida o suscripción vencida.'
            ]);
        }

        return $next($request);
    }
}
