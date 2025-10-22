<?php

namespace App\Models\Institution;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Institution\TenantDomain;
use Spatie\Multitenancy\Models\Tenant as BaseTenant;
use Illuminate\Database\Eloquent\Model;

class Tenant extends BaseTenant
{
    protected $connection = 'landlord';

    protected $fillable = [
        'name',
        'database',
    ];

    protected static function booted(): void
    {
        static::creating(function ($tenant) {
            $tenant->database = 'tenant_' . strtolower($tenant->name);
        });
    }

    public function getConnectionName(): ?string
    {
        return 'landlord';
    }

    public function domains(): HasMany
    {
        return $this->hasMany(TenantDomain::class);
    }

    public function currentDomain()
    {
        return $this->hasOne(TenantDomain::class)->orderBy('id', 'desc');
    }
}
