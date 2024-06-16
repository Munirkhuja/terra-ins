<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\IceClassShip;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Block;
use MoonShine\Fields\Field;
use MoonShine\Fields\ID;
use MoonShine\Resources\ModelResource;

/**
 * @extends ModelResource<IceClassShip>
 */
class IceClassShipResource extends ModelResource
{
    protected string $model = IceClassShip::class;

    protected string $title = 'IceClassShips';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make(
                [
                    ID::make()->sortable(),
                ]
            ),
        ];
    }

    /**
     * @param IceClassShip $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
