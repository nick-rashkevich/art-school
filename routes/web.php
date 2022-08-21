<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'blog'], function (){
    Route::get('/', [PostController::class, 'index'])->name('posts');
    Route::get('/{slug}', [PostController::class, 'show'])->name('post.show');
//    Route::get('/{slug}', [PostController::class, 'category'])->name('category.show');
});

Route::group([ 'name' => 'auth'], function (){
    Route::get('signpage', [AuthController::class, 'signpage'])->name('signpage');
    Route::post('signin', [AuthController::class, 'login'])->name('signin');
    Route::post('signup', [AuthController::class, 'register'])->name('signup');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
