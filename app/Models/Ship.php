<?php

namespace App\Models;

use Clickbar\Magellan\Database\Eloquent\HasPostgisColumns;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasPostgisColumns;

    const ACTIVE = true;
    const IN_ACTIVE = false;
    const STATUS_MOVEMENT = 'movement';
    const STATUS_STATION = 'station';

    protected $fillable = [
        'ice_class_ship_id',
        'title',
        'description',
        'max_speed_in_water',
        'active',
        'status_movement',
        'location',
        'moonshine_user_id',
    ];

    protected array $postgisColumns = [
        'location' => [
            'type' => 'geometry',
            'srid' => 4326,
        ],
    ];
}
