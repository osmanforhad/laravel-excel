<?php

namespace App\Http\Controllers;
use App\Exports\ExcelExampleExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExcelexampleController extends Controller
{

    //__function for display font view of import excel__//
    public function index()
    {
        return view('excel.import');
    }

    public function export() 
    {
        return Excel::download(new ExcelExampleExport, 'ExcelExample.xlsx');
    }

    public function import(Request $request)
    {

    }
}
