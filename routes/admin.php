<?php

use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\LoginController;
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
Route::group(['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function () {


    Route::get('dashboard', [DashController::class, 'index'])->name('admin.dashboard');
    Route::get('logout',[DashController::class,'logout'])->name('logout');
});


Route::group(['namespace'=>'admin','prefix'=>'admin','middleware'=>'guest:admin'],function(){

    Route::get('login',[LoginController::class,'Login'])->name('showlogin');
    Route::post('login',[LoginController::class,'ValLog'])->name('vallogin');
});


Route::get('/', function () {
    return view('admin.login');
});
