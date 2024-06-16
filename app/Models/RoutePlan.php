<?php

namespace App\Models;

use Clickbar\Magellan\Database\Eloquent\HasPostgisColumns;
use Illuminate\Database\Eloquent\Model;

class RoutePlan extends Model
{
    use HasPostgisColumns;

    protected $fillable=[
        'description',
        'from_port_id',
        'to_port_id',
        'route_line',
        'moonshine_user_id',
    ];

    protected array $postgisColumns = [
        'route_line' => [
            'type' => 'geometry',
            'srid' => 4326,
        ],
    ];
}
