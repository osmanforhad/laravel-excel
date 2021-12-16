<?php

namespace App\Http\Controllers;
use App\Exports\ExcelExampleExport;
use App\Imports\ExcelExampleImport;
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
      $import =  Excel::import(new ExcelExampleImport, $request->file('import_file'));
      if($import)
      {
          $notification = array(
              'message' => 'Product Imported Successfully.',
              'alert-type' => 'success'
          );
          return redirect()->route('/')->with($notification);
      }
      else{
          return redirect()->back();
      }
        
    }

}
