<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {
    return view('pages/blog');
});

Route::get('login', [LoginController::class, 'create']);
Route::post('login', [LoginController::class, 'store']);
Route::get('logout', [LoginController::class, 'destroy']);

Route::prefix('admin')->middleware('admin')->group(function (){
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('posts', AdminPostController::class);
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('images', ImageController::class);
});




