<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\TempImage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index(Request $request){
        $categories = Category::latest();
        if(!empty($request->get('keyword'))){
            $categories = $categories->where('name','like','%'.$request->get('keyword').'%');
        }
         // $categories = Category::latest()->paginate(10);
         $categories = $categories->paginate(10);  
         $data['categories'] = $categories;
          return view('admin.category.list',compact('categories'));
        }

    public function create(){
      return view('admin.category.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'category_description' => 'required',
            'seo_information' => 'required'
        ]);
        if($validator->passes()){
          $category = new Category();
          $category->name = $request->name;
          $category->category_description = $request->category_description;
          $category->seo_information = $request['seo_information'];
          $category->slug = $request->slug;
          $category->image = $request->image;
          $category->status = $request->status;
          $category->save();

          // save image here 
          if(!empty($request->image_id)){
            $tempImage = TempImage::find($request->image_id);
            $extArray = explode('.',$tempImage->name);
            $ext = last($extArray);
        
            $newImageName = $category->id.'.'.$ext;
            $sPath = public_path().'/temp/'.$tempImage->name;
            $dPath = public_path().'/uploads/category/'.$newImageName;
          
            File::copy($sPath,$dPath);

            // Generate Image Thumbnail 
            // $dPath = public_path().'/uploads/category/thumb/'.$newImageName;
            // $img = Image::make($sPath);
            // $img->resize(450,600);
            // $img->save($dPath);

            $category->image = $newImageName;
            $category->save();
        
        }

      //    $request->session()->flash('success','Category Added Successfully');

          return response()->json([
                'status'   => true,
                'message' => 'Category Added Successfully'
          ]);
        }
        else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }

    }

    public function edit($categoryId,Request $request){
        $category = Category::find($categoryId);     
        if(empty($category)){
            return redirect()->route('categories.index');
        }
        return view('admin.category.edit',compact('category'));
    }

    public function update($categoryId,Request $request){
        $category = Category::find($categoryId);
        if(empty($category)){
            return response()->json([
                'status' => false,
                'notFound' => true,
                'message' => 'Category not found'
            ]);
        }
       $validator = Validator::make($request->all(),[
         'name' => 'required',
         'slug' => 'required|unique:categories,slug,'.$category->id.',id',
       ]);

       if($validator->passes()){
   
        $category->name = $request->name;
        $category->category_description = $request->category_description;
        $category->seo_information = $request['seo_information'];
        $category->slug = $request->slug;
        $category->image = $request->image;
        $category->status = $request->status;
        $category->save();

        // save image here 
        if(!empty($request->image_id)){
          $tempImage = TempImage::find($request->image_id);
          $extArray = explode('.',$tempImage->name);
          $ext = last($extArray);
      
          $newImageName = $category->id.'.'.$ext;
          $sPath = public_path().'/temp/'.$tempImage->name;
          $dPath = public_path().'/uploads/category/'.$newImageName;
        
          File::copy($sPath,$dPath);

          // Generate Image Thumbnail 
          // $dPath = public_path().'/uploads/category/thumb/'.$newImageName;
          // $img = Image::make($sPath);
          // $img->resize(450,600);
          // $img->save($dPath);

          $category->image = $newImageName;
          $category->save();
      
      }

  

        return response()->json([
              'status'   => true,
              'message' => 'Category Added Successfully'
        ]);
      }
      else {
          return response()->json([
              'status' => false,
              'errors' => $validator->errors()
          ]);
      }

    }

    public function destroy(){

    }
}
