<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RatingController;
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

Route::get('/productdetail/{id}', [WelcomeController::class, 'productdetail'])->name('productdetail');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// User Routes
Route::prefix('user')->middleware('user')->group(function(){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
});

// Admin Routes
Route::prefix('admin')->middleware('admin')->group(function(){
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // User
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/user/delete/{id}',  [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
    // Categories
    Route::get('/categories', [AdminController::class, 'categories'])->name('admin.categories');
    // Product
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/product/delete/{id}',  [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
    // Rating and Feedback
    Route::get('/ratings', [RatingController::class, 'ratings'])->name('admin.ratings');
});
Route::post('/admin/updateRatingStatus', [RatingController::class, 'updateRatingStatus'])->name('admin.updateRatingStatus');
