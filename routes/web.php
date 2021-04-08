<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/ajax', [App\View\Components\Promocode::class, 'ajax'])->name('appeals.data');

Route::resource('/appeal', '\App\Http\Controllers\AppealController');

Route::group(['middleware' => 'guest'], function (){
    Route::get('/login', [\App\Http\Controllers\UserController::class,'loginForm'])->name('login.create');
    Route::post('/login', [\App\Http\Controllers\UserController::class,'login'])->name('login');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function (){
    Route::get('/',[\App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin.index');
    Route::resource('/users', '\App\Http\Controllers\Admin\UserController');
});

Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');
