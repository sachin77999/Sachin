<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Positions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LocationAndSubLocations;

class DataController extends Controller
{

    public function create()
    {
        $data = DB::table('positions')->select('positions')->get();
        $data1 = DB::table('location_and_sub_locations')->select('location', 'sublocation', 'subcounty')->get();
        // $query = LocationAndSubLocations::select('subcounty','division','location','sublocation','villages','ward','pollingstationcode','nameofpollingstation','registervoters')
        // ->Join('polling_stations','polling_stations.id','=','location_and_sub_locations.id')->get();
        $data2 = DB::table('location_and_sub_locations')->select('subcounty','division','location','sublocation','villages','ward','pollingstationcode','nameofpollingstation','registervoters')
        ->Join('polling_stations','polling_stations.id','=','location_and_sub_locations.id')->get();
       // $data2 = json_encode(json_decode($data2));
        foreach($data2 as $key=>$value){
          print_r($value->sublocation);
        }
        //$data = Positions::all();
        // echo '<pre>';
        // print_r(json_decode(json_encode($data), true));
        // // print_r($data);
        // echo '<pre>';
        return view('data.create', ['data' => json_decode(json_encode($data)), 'data1' => $data1,'data2' => $data2]);
    }

    public function store(Request $request)
    {
        // validate data 
        // $request->validate([
        //     'fullnames' => 'required',
        //     'nickname' => 'required',
        //     'gender' => 'required',
        //     'occupation' => 'required',
        //     // 'workplace' => 'required',
        //     'phonesafaricom' => 'required',
        //     'phoneairtel' => 'required',
        //     'facebookid' => 'required',
        //     'ageset' => 'required',
        //     // 'ward' => 'required',
        //     // 'location' => 'required',
        //     // 'sublocation' => 'required',
        //     'village' => 'required',
        //     'pollingstation' => 'required',
        //     'nfluencelocality' => 'required',
        //     'influenceother' => 'required',
        //     'supportlevel' => 'required',
        //     'remarks' => 'required',
        //     'positionnominated' => 'required'

        // ]);
      //  print_r("hi");
        // dd($request->all());
        $product = new Data;
        $product->fullnames = $request->fullnames;
        // print_r($product->fullnames);
        // die("bye");
        $product->nickname = $request->nickname;
        $product->gender = $request->gender;
        $product->occupation = $request->occupation;
        $product->workplace = $request->input('workplace');
        $product->phonesafaricom = $request->phonesafaricom;
        $product->phoneairtel = $request->phoneairtel;
        $product->idno = $request->idno;
        $product->facebookid = $request->facebookid;
        $product->ageset = $request->ageset;
        $product->ward = $request->input('ward');
        $product->location = $request->input('location');
        $product->sublocation = $request->input('sublocation');
        $product->village = $request->village;
        $product->pollingstation = $request->pollingstation;
        $product->nfluencelocality = $request->nfluencelocality;
        $product->influenceother = $request->influenceother;
        $product->supportlevel = $request->supportlevel;
        $product->remarks = $request->remarks;
       $product->positionnominated = $request->input('positionnominated');
        // print_r($request->input('positionnominated'));
        print_r($product);
        if($product->save()){
            return "data saved successfully";
        }else {
            return "data is not saved";
        }
       // print_r($product->save());
        return back();
    }
}
