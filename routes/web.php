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

// Route::get('/', function () {
//     return view('frontend.index');
// });

// Admin Start
Route::group(['prefix'=>'admin'],function(){
Route::get('/', function () {
    return view('admin.pages.dashboard.dash');
})->name('admin.dashboard');
});

// Dashboard
Route::get ('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

// Home
Route::get ('/index',[HomeController::class,'index'])->name('admin.index');