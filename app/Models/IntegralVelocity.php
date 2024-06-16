<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IntegralVelocity extends Model
{
    protected $fillable = [
        'integral_velocity_point_id',
        'for_date_at',
        'moonshine_user_id',
    ];
}
