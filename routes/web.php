<?php


use App\Http\Controllers\CategoryController;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PostControllerApi;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;

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
Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::group(['middleware'=>'auth'], function(){
    Route::resource('dashboard/post',PostController::class)->middleware('auth');
    Route::resource('dashboard/category',CategoryController::class)->middleware('auth');
    Route::resource('dashboard/rol',RolController::class)->middleware('auth');
    Route::resource('dashboard/user',UserController::class)->middleware('auth');
    Route::resource('/permission', PermissionController::class);
    
   
    Route::resource('usuarios',UserController::class);
    Route::get('/',[PostController::class,'index'])->name('index');
    
    Route::get('/api/post',[PostControllerApi::class,'index'])->name('index');
    Route::post('/api/post',[PostControllerApi::class,'store']);
    Route::get('/api/post/{post}/',[PostControllerApi::class,'show'])->name('show');
    
    
    Route::post('dashboard/post/{post}/image','PostController@image')->name('post.image');
});





