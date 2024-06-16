<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IceClassShip extends Model
{

    const SPEED_TYPE_MAX='max';
    const SPEED_TYPE_CUSTOM='custom';
    const MOVEMENT_FORBIDDEN='forbidden';
    const MOVEMENT_UNDER_WIRING='under_wiring';
    const MOVEMENT_INDEPENDENT='independent';

    protected $fillable=[
        'title',
        'movement_on_ice_ocean',
        'speed_type',
        'speed_from',
        'speed_to',
        'speed_max_slowdown',
        'moonshine_user_id',
    ];

    public function hard_ice_integral()
    {
        return $this->belongsTo(IceIntegral::class);
    }
}
