<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Brand;

class BrandsController extends Controller
{
    public function index(){
        $brands = Brand::latest('id');
        $brands = $brands->paginate(10);
        return view('admin.brands.list',compact('brands'));

    }
    public function create() {
        return view('admin.brands.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'slug' => 'required|unique:brands',
        ]);
        if($validator->passes()){
             $brand = new Brand();
             $brand->name = $request->name;
             $brand->slug = $request->slug;
             $brand->status = $request->status;
             $brand->save();
             return response()->json([
                'status' => true,
                'message' => 'Brand Added Successfully'
             ]);

        }
        else {
            return response()->json([
                 'status' => false,
                 'errors' => $validator->errors()
            ]);
        }
    }
}
