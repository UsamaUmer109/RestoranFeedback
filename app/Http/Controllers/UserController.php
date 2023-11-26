<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        $category = Category::select('*')->get();
        $products = Product::select('*')->get();
        $ratings  = Rating::select('*')->get();
        $feedback    = Product::rightJoin('ratings', 'products.id', '=', 'ratings.product_id')->leftJoin('users', 'users.id', '=', 'ratings.user_id')->select('users.name as user_name', 'ratings.product_id', 'ratings.review', 'ratings.title', 'ratings.category', 'products.name as food', 'users.email')->where('ratings.status', 1)->get();
        return view('user.dashboard', compact('products', 'category', 'ratings', 'feedback'));
    }
}

