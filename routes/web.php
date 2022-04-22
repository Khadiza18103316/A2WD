<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Backend
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\TeammatesController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\AboutController;

// Frontend
use App\Http\Controllers\Frontend\FrontendController;

// Email
use App\Http\Controllers\Email\EmailController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Frontend Start
Route::get('/',[FrontendController::class,'home'])->name('frontend.home');
Route::get('/gallery',[FrontendController::class,'gallery'])->name('frontend.gallery');
Route::get('/team',[FrontendController::class,'team'])->name('frontend.team');
Route::get('/about',[FrontendController::class,'about'])->name('frontend.about');
Route::get('/logo',[FrontendController::class,'logo'])->name('frontend.logo');
Route::get('/footer',[FrontendController::class,'footer'])->name('frontend.footer');

//Search
Route::get ('/search',[FrontendController::class,'search'])->name('search');


// Admin Start

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
Route::get('/admin', function () {
return view('admin.pages.dashboard.dash');
})->name('admin.dashboard');

// Dashboard
Route::get ('/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');


// Home
Route::get ('/home/index',[HomeController::class,'index'])->name('home.index');
Route::get ('/home/create',[HomeController::class,'create'])->name('home.create');
Route::post('/home/store',[HomeController::class,'store'])->name('home.store');
Route::get ('/home/edit/{id}',[HomeController::class,'edit'])->name('home.edit');
Route::put ('/home/update/{id}',[HomeController::class,'update'])->name('home.update');
Route::get ('/home/delete/{id}',[HomeController::class,'delete'])->name('home.delete');

// Gallery
Route::get ('/gallery/index',[GalleryController::class,'index'])->name('gallery.index');
Route::get ('/gallery/create',[GalleryController::class,'create'])->name('gallery.create');
Route::post('/gallery/store',[GalleryController::class,'store'])->name('gallery.store');
Route::get ('/gallery/edit/{id}',[GalleryController::class,'edit'])->name('gallery.edit');
Route::put ('/gallery/update/{id}',[GalleryController::class,'update'])->name('gallery.update');
Route::get ('/gallery/delete/{id}',[GalleryController::class,'delete'])->name('gallery.delete');

// Teammates
Route::get ('/team/index',[TeammatesController::class,'index'])->name('team.index');
Route::get ('/team/create',[TeammatesController::class,'create'])->name('team.create');
Route::post('/team/store',[TeammatesController::class,'store'])->name('team.store');
Route::get ('/team/details/{id}',[TeammatesController::class,'details'])->name('team.details');
Route::get ('/team/edit/{id}',[TeammatesController::class,'edit'])->name('team.edit');
Route::put ('/team/update/{id}',[TeammatesController::class,'update'])->name('team.update');
Route::get ('/team/delete/{id}',[TeammatesController::class,'delete'])->name('team.delete');

// Category
Route::get ('/category/index',[CategoryController::class,'index'])->name('category.index');
Route::get ('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get ('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::put ('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get ('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

// Setting
Route::get ('/setting/index',[SettingController::class,'index'])->name('setting.index');
Route::get ('/setting/create',[SettingController::class,'create'])->name('setting.create');
Route::post('/setting/store',[SettingController::class,'store'])->name('setting.store');
Route::get ('/setting/details/{id}',[SettingController::class,'details'])->name('setting.details');
Route::get ('/setting/edit/{id}',[SettingController::class,'edit'])->name('setting.edit');
Route::put ('/setting/update/{id}',[SettingController::class,'update'])->name('setting.update');
Route::get ('/setting/delete/{id}',[SettingController::class,'delete'])->name('setting.delete');

// About
Route::get ('/about/index',[AboutController::class,'index'])->name('about.index');
Route::get ('/about/create',[AboutController::class,'create'])->name('about.create');
Route::post('/about/store',[AboutController::class,'store'])->name('about.store');
Route::get ('/about/edit/{id}',[AboutController::class,'edit'])->name('about.edit');
Route::put ('/about/update/{id}',[AboutController::class,'update'])->name('about.update');
Route::get ('/about/delete/{id}',[AboutController::class,'delete'])->name('about.delete');

// Email
Route::post('/about/send',[EmailController::class,'send'])->name('send.email');

});
