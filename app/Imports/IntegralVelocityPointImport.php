<?php

namespace App\Imports;

use App\Models\IntegralVelocityPoint;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class IntegralVelocityPointImport implements ToModel, WithChunkReading
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new IntegralVelocityPoint(
            [
                'cell_index' => '',
                'moonshine_user_id' => 1
            ]
        );
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
