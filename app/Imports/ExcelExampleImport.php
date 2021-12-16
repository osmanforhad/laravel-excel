<?php

namespace App\Imports;

use App\Models\ExcelExample;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelExampleImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExcelExample([
            'name' => $row[0],
            'slug' => $row[1],
            'price' => $row[2],
            'category' => $row[3],
            'image' => $row[4],
            'brand' => $row[5],
            'quantity' => $row[6],
            'details' => $row[7],
        ]);
    }
}
