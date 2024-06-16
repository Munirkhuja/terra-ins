<?php

namespace App\Imports;

use App\Models\IntegralVelocity;
use Maatwebsite\Excel\Concerns\ToModel;

class IntegralVelocityImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new IntegralVelocity([
            //
        ]);
    }
}
