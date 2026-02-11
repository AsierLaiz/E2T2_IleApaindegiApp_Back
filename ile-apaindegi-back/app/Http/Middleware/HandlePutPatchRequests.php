<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HandlePutPatchRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Manejar X-HTTP-Method-Override header
        if ($request->header('X-HTTP-Method-Override')) {
            $request->setMethod($request->header('X-HTTP-Method-Override'));
        }
        
        // Si es PUT o PATCH, asegurarse de que Laravel pueda leer el JSON body
        if (in_array($request->method(), ['PUT', 'PATCH', 'DELETE'])) {
            if ($request->isJson()) {
                $data = $request->json()->all();
                $request->merge($data);
            }
        }

        return $next($request);
    }
}
