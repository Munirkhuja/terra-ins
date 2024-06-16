<?php

namespace App\Models;

use Clickbar\Magellan\Database\Eloquent\HasPostgisColumns;
use Illuminate\Database\Eloquent\Model;

class IntegralVelocityPoint extends Model
{
    use HasPostgisColumns;

    protected $fillable=[
        'location',
        'cell_index',
        'moonshine_user_id',
    ];

    protected array $postgisColumns = [
        'location' => [
            'type' => 'geometry',
            'srid' => 4326,
        ],
    ];
}
