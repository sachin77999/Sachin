<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Positions extends Model
{
    use HasFactory;
    public static function getPositionList($request){
        //     $poolsList = PublicBondOffering::getPboList($request);
        //     return $poolsList;
         $list = DB::table('positions')->select('positions')->get();
      //   $list = 'select positions from positions';
         if(!empty($list)){
            $list['position_list'] = json_encode(json_decode($list));
            $finalList = $list;
            return $finalList->toArray();
         }
         else {
         
            return "List is Empty";
         }
         //print_r($list);
       // return "serviceds";
         }
}
