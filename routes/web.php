<?php

use Illuminate\Support\Facades\Route;


// Backend
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\GalleryController;
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

// Frontend Start
Route::get('/',[FrontendController::class,'slides'])->name('frontend.slides');
Route::get('/about',[FrontendController::class,'about'])->name('frontend.about');

// Admin Start
Route::group(['prefix'=>'admin'],function(){
Route::get('/', function () {
    return view('admin.pages.dashboard.dash');
})->name('admin.dashboard');
});

// Dashboard
Route::get ('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');

// Home
Route::get ('/home/index',[HomeController::class,'index'])->name('home.index');
Route::get ('/home/create',[HomeController::class,'create'])->name('home.create');
Route::post('/home/store',[HomeController::class,'store'])->name('ahome.store');
Route::get ('/home/details/{id}',[HomeController::class,'details'])->name('home.details');
Route::get ('/home/edit/{id}',[HomeController::class,'edit'])->name('home.edit');
Route::put ('/home/update/{id}',[HomeController::class,'update'])->name('home.update');
Route::get ('/home/delete/{id}',[HomeController::class,'delete'])->name('home.delete');

// Gallery
Route::get ('/gallery/index',[GalleryController::class,'index'])->name('gallery.index');
Route::get ('/gallery/create',[GalleryController::class,'create'])->name('gallery.create');
Route::post('/gallery/store',[GalleryController::class,'store'])->name('gallery.store');
Route::get ('/gallery/details/{id}',[GalleryController::class,'details'])->name('gallery.details');
Route::get ('/gallery/edit/{id}',[GalleryController::class,'edit'])->name('gallery.edit');
Route::put ('/gallery/update/{id}',[GalleryController::class,'update'])->name('gallery.update');
Route::get ('/gallery/delete/{id}',[GalleryController::class,'delete'])->name('gallery.delete');