<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PollingStations;
use Illuminate\Support\Facades\Validator;

class PollingStation extends Controller
{
    public function create(){
      return view('polling.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'ward' => 'required',
            'pollingstationcode' => 'required',
            'nameofpollingstation' => 'required',
            'registervoters' => 'required'
        ]);
        if($validator->passes()){
          $category = new PollingStations();
          $category->ward = $request->ward;
          $category->pollingstationcode = $request->pollingstationcode;
          $category->nameofpollingstation = $request->nameofpollingstation;
          $category->registervoters = $request->registervoters;
          $category->save();
        }

   

    }
}
