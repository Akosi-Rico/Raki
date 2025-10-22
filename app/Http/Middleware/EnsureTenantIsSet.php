<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\Multitenancy\Models\Tenant;
use Symfony\Component\HttpFoundation\Response;

class EnsureTenantIsSet
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Tenant::current()) {
            abort(Response::HTTP_FORBIDDEN, 'This domain is not valid.');
        }

        return $next($request);
    }
}
