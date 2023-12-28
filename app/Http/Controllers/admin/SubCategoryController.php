<?php

namespace App\Http\Controllers\admin;

use App\Models\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    public function create(){
        $categories = Category::orderBy('name','ASC')->get();
        $data['categories'] = $categories;
   return view('admin.sub_category.create',$data);
    }

    public function store(Request $request){
       $validator = Validator::make($request->all(),[
          'name' => 'required',
          'slug' => 'required|unique:sub_categories',
          'category' => 'required',
          'status' => 'required'
       ]); 

       if($validator->passes()){
         $subCategory = new SubCategory();
         $subCategory->name = $request->name;
         $subCategory->slug = $request->slug;
         $subCategory->status = $request->status;
         $subCategory->category_id = $request->category;
         $subCategory->save();

         $request->sesssion()->flash('success','Sub Category Created Successfully');

         return response([
            'status' => true,
            'message' => 'Sub Category Created Successfully'
        ]);
         
        }
       else {
        return response([
            'status' => false,
            'errors' => $validator->errors()
        ]);
       }
    }
    
    public function index(Request $request){
       
            $subCategories = SubCategory::select('sub_categories.*','categories.name as category_name')
            ->latest('id')
            ->leftJoin('categories','categories.id','sub_categories.category_id');
            // if(!empty($request->get('keyword'))){
            //     $subCategories = $subCategories->where('name','like','%'.$request->get('keyword').'%');
            // }
            $subCategories = $subCategories->paginate(10);
            return view('admin.sub_category.list',compact('subCategories'));

    }

}
