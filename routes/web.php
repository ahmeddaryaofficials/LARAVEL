<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Frontend\FrontendController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//users
Route::middleware(['cors'])->group(function () {
    Route::post('/hogehoge', 'Controller@hogehoge');
});
Route::get('/offline', function () {
    return view('modules/laravelpwa/offline');
    });
Route::get('/', [FrontendController::class,'index']);
Route::get('/wait', [FrontendController::class,'wait']);
Route::get('categorys', [FrontendController::class,'categorys']);
Route::get('view_category/{slug}', [FrontendController::class,'view']);
Route::get('view_category/{cate_slug}/{ven_meta}', [FrontendController::class,'vendorview']);
Route::post('/send_inquiry',  'BookingController@booking_availibility');
Route::get('/user_confirm_booking', [FrontendController::class,'confirm_booking']);
Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
 Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard',  'Admin\FrontendController@index');
    Route::get('/categories',  'Admin\CategoryController@index');
    Route::get('/add_Category',  'Admin\CategoryController@add');
    Route::post('/insert_Category','Admin\CategoryController@insert');
    Route::get('edit-product/{id}', [CategoryController::class,'edit']);
    Route::post('update_Category/{id}', [CategoryController::class,'update']);
    Route::get('delete_Category/{id}', [CategoryController::class,'delete']);
    Route::get('/vendors',  'Admin\VendorController@index');
    Route::get('/add_vendors',  'Admin\VendorController@add');
    Route::post('/insert_vendors','Admin\VendorController@insert');
    Route::get('edit_vendors/{id}', [VendorController::class,'edit']);
    Route::post('update_vendor/{id}', [VendorController::class,'update']);
    Route::get('delete_vendors/{id}', [VendorController::class,'delete']);
 });

 //vendors
 Route::middleware(['auth', 'isVendor'])->group(function () {
    Route::get('vendor_dashboard',  'Vendor\FrontendController@index');
    Route::get('/get_inquiry',  'Vendor\FrontendController@get_inquiry');
    Route::post('/change_availibility',  'Vendor\FrontendController@change_availibility');
 });
