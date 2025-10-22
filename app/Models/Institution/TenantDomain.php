<?php

namespace App\Models\Institution;

use Illuminate\Database\Eloquent\Model;

class TenantDomain extends Model
{
    protected $connection = 'landlord';

    public const SECURE_PROTOCOL = 'https://';

    protected $fillable = [
        'tenant_id',
        'domain',
    ];

    protected $appends  = [
        'secure_url'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function getSecureUrlAttribute()
    {
        return self::SECURE_PROTOCOL . $this->domain;
    }
}
