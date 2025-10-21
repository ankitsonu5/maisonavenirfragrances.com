<?php

namespace App\Imports;

use App\Models\Admin\FragranceAccord;
use App\Models\Admin\FragranceFamily;
use App\Models\Admin\Ingredients;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class DynamicImport implements ToModel
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        return new FragranceFamily([
            'name'     => $row[0],
        ]);
    }
}
