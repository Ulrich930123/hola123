<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::resource('/dashboard/post', PostController::class);
Route::resource('/dashboard/category', CategoryController::class);
Route::resource('dashboard/user','dashboard\UserController');
Route::get('/',[PostController::class,'index'])->name('index');
Route::post('dashboard/post/{post}/image','PostController@image')->name('post.image');
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');




