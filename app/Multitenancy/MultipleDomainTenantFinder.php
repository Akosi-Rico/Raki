<?php

namespace App\Multitenancy;

use App\Models\Institution\TenantDomain;
use Illuminate\Http\Request;
use Spatie\Multitenancy\Contracts\IsTenant;
use Spatie\Multitenancy\TenantFinder\TenantFinder;

class MultipleDomainTenantFinder extends TenantFinder
{
    public function findForRequest(Request $request): ?IsTenant
    {
        $host = request()->getHost();
        $tenantDomain = TenantDomain::where('domain', $host)->first();

        return $tenantDomain ? $tenantDomain->tenant : null;
    }

    public function isDeferred()
    {
    }
}
