<?php

namespace App\Models;

use Clickbar\Magellan\Database\Eloquent\HasPostgisColumns;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    use HasPostgisColumns;

    protected $fillable=[
        'title',
        'description',
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
