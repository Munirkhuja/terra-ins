<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IceIntegral extends Model
{

    protected $fillable=[
        'title',
        'from',
        'to',
        'moonshine_user_id',
    ];
}
