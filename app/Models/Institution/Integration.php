<?php

namespace App\Models\Institution;

use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    protected $fillable = [
        'site_name', 
        'domain', 
        'api_key', 
        'active_flag',
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->api_key)) {
                $model->api_key = 'att_raki_' . bin2hex(random_bytes(16));
            }
        });
    }
}
