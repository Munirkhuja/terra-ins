<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShipWantRoute extends Model
{
    protected $fillable=[
        'ship_id',
        'from_port_id',
        'to_port_id',
        'start_sailing_at',
        'moonshine_user_id',
    ];
}
