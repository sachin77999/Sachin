<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationAndSubLocations extends Model
{
    use HasFactory;
    protected $table="location_and_sub_locations";
    public $timestamps = false;
    protected $fillable = ['subcounty','division','location','sublocation','villages'];

    // public static function create($request)
    // {
    //     //print_r($request);
    //     $product = new LocationAndSubLocation();
    //     $product->subcounty = "Hello";
    //     print_r($product->subcounty);
    //      $product->division = "HI";
    //     $product->location = "Ho";
    //     $product->sublocation = "PO";
    //     $product->villages = "PP";
    //     print_r($product);
      
    //     $product->save();
    
    //     return response()->json([
    //        'status' => true,
    //        'errors' => 'errors',
    //        'message' => 'Product Added Successfully'
    //     ]);
    // }
}
