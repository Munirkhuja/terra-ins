<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SimpleRoute extends Model
{
    protected $fillable=[
        'from_port_id',
        'to_port_id',
        'distance',
        'moonshine_user_id',
    ];
}
