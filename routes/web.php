<?php

use Illuminate\Support\Facades\Route;


// Backend
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HomeController;

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
    return view('frontend.index');
});

// Admin Start
Route::group(['prefix'=>'admin'],function(){
Route::get('/', function () {
    return view('admin.pages.dashboard.dash');
})->name('admin.dashboard');
});

// Dashboard
Route::get ('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

// Home
Route::get ('/admin/index',[HomeController::class,'index'])->name('admin.index');
Route::get ('/admin/create',[HomeController::class,'create'])->name('admin.create');
Route::post('/admin/store',[HomeController::class,'store'])->name('admin.store');
Route::get ('/admin/details/{id}',[HomeController::class,'details'])->name('admin.details');
Route::get ('/admin/edit/{id}',[HomeController::class,'edit'])->name('admin.edit');
Route::put ('/admin/update/{id}',[HomeController::class,'update'])->name('admin.update');
Route::get ('/admin/delete/{id}',[HomeController::class,'delete'])->name('admin.delete');