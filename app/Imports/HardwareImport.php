<?php

namespace App\Imports;

use App\Models\Hardware;
use Maatwebsite\Excel\Concerns\ToModel;

class HardwareImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Hardware([
            //
        ]);
    }
}
