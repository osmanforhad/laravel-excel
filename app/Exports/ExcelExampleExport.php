<?php

namespace App\Exports;

use App\Models\ExcelExample;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExcelExampleExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ExcelExample::select(
        'name',
        'slug',
        'price',
        'category',
        'image',
        'brand',
        'quantity',
        'details')->get();
    }

}
