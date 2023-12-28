<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    
    public function create(){
        $data = [];
        $categories = Category::orderBy('name','ASC')->get();
        $brands = Brand::orderBy('name','ASC')->get();
        $data['categories'] = $categories;
        $data['brands'] = $brands;
        return view('admin.products.create',$data);

    }

    public function store(Request $request)
    {
       $rules = [
            'title' => 'required',
            'slug'  => 'required|unique:products',
            'price' => 'required|numeric',
            'sku'   => 'required',
            'track_qty' => 'required|in:Yes,No',
            'category' => 'required|numeric',
            'is_featured' => 'required|in:Yes:No',
       ];
       if(!empty($request->track_qty) && $request->track_qty == 'Ys'){
        $rules['qty'] = 'required|numeric';
       }
       $validator = Validator::make($request->all(),$rules);
       if($validator->passes()){
            
           $product = new Product();
           $product->title = $request->title;
           $product->slug = $request->slug;
           $product->price = $request->price;
           $product->compare_price = $request->compare_price;
           $product->description = $request->description;
           $product->sku = $request->sku;
           $product->title = $request->title;
           $product->barcode = $request->barcode;
           $product->track_qty = $request->track_qty;
           $product->qty = $request->qty;
           $product->status = $request->status;
           $product->category_id = $request->category_id;
           $product->sub_category_id = $request->sub_category;
           $product->brand_id = $request->brand;
           $product->is_featured = $request->is_featured;
           $product->save();
       
           return response()->json([
              'status' => true,
              'errors' => $validator->errors(),
              'message' => 'Product Added Successfully'
           ]);
        }
       else {
        return response()->json([
          'status' => false,
          'erros'  => $validator->errors()
        ]);
       }
    }
}
