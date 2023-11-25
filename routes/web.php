<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;

Route::get('/', function () {
    $category = Category::select('*')->get();
    $products = Product::select('*')->get();
    $ratings  = Rating::select('*')->get();
    return view('welcome', compact('products', 'category', 'ratings'));
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// User Routes
Route::middleware('user')->group(function(){
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
});

// Admin Routes
Route::middleware('admin')->group(function(){
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
