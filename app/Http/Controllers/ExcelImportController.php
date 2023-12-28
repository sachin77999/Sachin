<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\YourImportClass;
use Maatwebsite\Excel\Facades\Excel as excel;
 
class ExcelImportController extends Controller
{
    public function import(Request $request)
    {
        // Validate the uploaded file
        // $request->validate([
        //     'file' => 'required|mimes:xlsx,xls',
        // ]);
 
        // Get the uploaded file
        $file = $request->file('file');
 
        // Process the Excel file
        excel::import(new YourImportClass, $file);
 
        return redirect()->back()->with('success', 'Excel file imported successfully!');
    }
}