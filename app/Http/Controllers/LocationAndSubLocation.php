<?php

namespace App\Http\Controllers;
use App\Models\LocationAndSubLocations;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LocationImport;
use Maatwebsite\Excel\Excel as ExcelExcel;
use App\Imports\YourImportClass;


class LocationAndSubLocation extends Controller
{
    public function index(){
        return view('locations.index');
    }

    public function create(){
        return view('locations.create');
    }

    public function store(Request $request)
    {
        // validate data 
        $request->validate([
           'subcounty' => 'required',
           'division'  => 'required',
           'location' => 'required',
           'sublocation' => 'required',
           'villages' => 'required'
        ]);
       // dd($request->all());
       
        $product = new LocationAndSubLocations;
        $product->subcounty = $request->subcounty;
        $product->division = $request->division;
        $product->location = $request->location;
        $product->sublocation = $request->sublocation;
        $product->villages = $request->villages;
        // $file = $request->file('file');
 
        // Process the Excel file
        // excel::import(new YourImportClass, $file);
        // Excel::import(new LocationImport,$request->file('file'));
          $product->save();
         return back();
    }

    public function exportUser(){
        dd('export');
    }

    public function importUser(Request $request){
     //  dd("import");
    Excel::import(new LocationImport,$request->file('file'));
    }
    
}
