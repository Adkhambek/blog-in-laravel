<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', [BlogController::class, 'index']);

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'create');
    Route::post('login', 'store');
    Route::get('logout', 'destroy');
});

Route::prefix('admin')->middleware('admin')->group(function (){
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('posts', AdminPostController::class);
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('images', ImageController::class);
});




