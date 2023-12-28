<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Positions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LocationAndSubLocation;
use App\Http\Services\PositionServices;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LocationFormRequest;

class PositionController extends Controller
{
    //
    public function getPositionList(Request $request)
    {
        // return "Hello";
      //  $request = $request->validated();
            $positionList = Positions::getPositionList($request);
       //     print_r($positionList);
           return $positionList;
           //  return response()->data(['position_list'=> $positionList]);
    }

    public function locationAndSubLocation(Request $request){
     
        $validator = Validator::make($request->all(),[
            'sub_county' => 'required',
            'division'  => 'required',
            'location' => 'required',
            'sub_location'   => 'required',
            'villages' => 'required',
       ]);
      // print_r($validator);
      
     // $validator = Validator::make($request->all(),$rules);
  //     if($validator->passes()){
          // $data =   LocationAndSubLocation::create($request);
          // print_r($data);
          $product = new LocationAndSubLocation();
          $product->subcounty = "Hello";
          print_r($product->subcounty);
           $product->division = "HI";
          $product->location = "Ho";
          $product->sublocation = "PO";
          $product->villages = "PP";
          print_r($product);
        //    $product = new LocationAndSubLocation();
        //    $product->sub_county = $product->sub_county;
        //   //  $product->division = $product->division;
        //    $product->location = $product->location;
        //    $product->sub_location = $product->sub_location;
        //    $product->villages = $product->villages;
         
         
        //    $product->save();
       
        //    return response()->json([
        //       'status' => true,
        //       'errors' => $validator->errors(),
        //       'message' => 'Product Added Successfully'
        //    ]);
   //     }
    //    else {
    //     print_r("o");
    //     return response()->json([
    //       'status' => false,
    //       'erros'  => $validator->errors()
    //     ]);
    //    }
    }

    public function dummyTestingApi(Request $request){
        $validator = Validator::make($request->all(),[
            'subcounty' => 'required',
            'division'  => 'required',
            'location' => 'required',
            'sublocation'   => 'required',
            'villages' => 'required',
       ]);
       print_r($validator);
       $product = new LocationAndSubLocation();
       $product->subcounty = "Hello";
       print_r($product->subcounty);
        $product->division = "HI";
       $product->location = "Ho";
       $product->sublocation = "PO";
       $product->villages = "PP";
       print_r($product);
      //  $validated = $validator->validated();
   

    // print_r($validated);
  
 //   print_r($request->validated());
    
    //    if ($validator->fails()) {
    //          return response()->json([
    //         'status' => false,
    //         'errors' => $validator->errors()
    //     ]);
  //  }
     //   print_r($validated);
      //  print_r($request['sub_county']);
        //   $product = new LocationAndSubLocation();
        //    $product->sub_county = $request->sub_county;
        //     $product->division = $request->division;
        //    $product->location = $request->location;
        //    $product->sub_location = $request->sub_location;
        //    $product->villages = $request->villages;
         
        //  print_r($product);
        //    $product->save();
       
        //    return response()->json([
        //       'status' => true,
        //       'errors' =>"Error",
        //       'message' => 'Product Added Successfully'
        //    ]);
    }
}
