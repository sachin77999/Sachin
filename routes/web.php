<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PollingStation;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\ExcelImportController;
use App\Http\Controllers\admin\BrandsController;
use App\Http\Controllers\LocationAndSubLocation;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\TempImagesController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\ProductSubCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LocationAndSubLocation::class,'index'])->name('locations.index');
Route::get('/locations/create',[LocationAndSubLocation::class,'create'])->name('locations.create');
Route::post('/locations/store',[LocationAndSubLocation::class,'store'])->name('locations.store');
//Route::get('export-user',[LocationAndSubLocation::class,'exportUser'])->name('export-user');
Route::post('import-user',[LocationAndSubLocation::class,'importUser'])->name('import-user');

// data store /locations/store/data
Route::get('/locations/data',[DataController::class,'create'])->name('locations.create');
Route::post('/locations/store/data',[DataController::class,'store'])->name('sachin.store');

// polling station 

Route::get('/polling/station/create',[PollingStation::class,'create'])->name('polling.create');
Route::post('/polling/station/store',[PollingStation::class,'store'])->name('polling.store');



// routes/web.php
 
// Route::get('/import-excel', [ExcelImportController::class,'index'])->name('import.excel');
Route::post('/import-excel', [ExcelImportController::class,'import']);

Route::get('excel',function(){
  return view('excel');
});
// Route::get('/send',[MailController::class,'index']);

// Route::group(['prefix' => 'admin'],function(){

//     Route::group(['middleware' => 'admin.guest'],function(){
//         Route::get('/login',[AdminLoginController::class,'index'])->name('admin.login');
//         Route::post('/authenticate',[AdminLoginController::class,'authenticate'])->name('admin.authenticate');

//     });
//     Route::group(['middleware' => 'admin.auth'],function(){
//      Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
//      Route::get('/logout',[HomeController::class,'logout'])->name('admin.logout');
     
//      // Category Routes 
//      Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
//      Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');

//      Route::get('/locationsandsublocation/create',[LocationAndSubLocation::class,'create'])->name('categories.create');
     
//      Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');
//      Route::get('/categories/{category}/edit',[CategoryController::class, 'edit'])->name('categories.edit');
//      Route::put('/categories/{category}',[CategoryController::class,'update'])->name('categories.update');
//      Route::delete('/category/{category}',[CategoryController::class,'destroy'])->name('categories.delete');
//      // temp-images.create
//     Route::post('/upload-temp-image',[TempImagesController::class,'create'])->name('temp-images.create');
     
//     // brands route 
//     Route::get('/brands',[BrandsController::class, 'index'])->name('brands.index');
//     Route::get('/brands/create',[BrandsController::class, 'create'])->name('brands.create');
//     Route::post('/brands',[BrandsController::class, 'store'])->name('brands.store');

//     // Sub Category Routes 
//     Route::get('/sub-categories',[SubCategoryController::class, 'index'])->name('sub-categories.index');
//     Route::get('/sub-categories/create',[SubCategoryController::class, 'create'])->name('sub-categories.create');
//     Route::post('/sub-categories',[SubCategoryController::class, 'store'])->name('sub-categories.store');
//     Route::get('/sub-categories/{subCategory}/edit',[SubCategoryController::class, 'edit'])->name('sub-categories.edit');
//     Route::put('/sub-categories/{subCategory}',[SubCategoryController::class, 'update'])->name('sub-categories.update');
//     Route::delete('/sub-categories/{subCategory}',[SubCategoryController::class, 'delete'])->name('sub-categories.delete');

//     // Product Routes 
//     Route::get('/products/create',[ProductController::class, 'create'])->name('products.create');
//     Route::get('/product-subcategories',[ProductSubCategoryController::class, 'index'])->name('product-subcategories.index');
//     Route::post('/products',[ProductController::class,'store'])->name('products.store');
    




//      Route::get('/getSlug',function(Request $request){
//          $slug = ''; 
//         if(!empty($request->title)){
//           $slug = Str::slug($request->title);
//          }
//          return response()->json([
//               'status' => true,
//               'slug'  => $slug
//          ]);
//      })->name('getSlug');
   
//     });

  



// });