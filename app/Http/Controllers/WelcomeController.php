<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;

class WelcomeController extends Controller
{
    public function welcome ()
    {
        $category    = Category::select('*')->get();
        $products    = Product::select('*')->get();
        $ratings     = Rating::select('*')->get();
        $feedback    = Product::rightJoin('ratings', 'products.id', '=', 'ratings.product_id')->leftJoin('users', 'users.id', '=', 'ratings.user_id')->select('users.name as user_name', 'ratings.product_id', 'ratings.review', 'ratings.title', 'ratings.category', 'products.name as food', 'users.email')->where('ratings.status', 1)->get();
        return view('welcome', compact('products', 'category', 'ratings', 'feedback'));
    }
    public function productdetail (Request $request, $id)
    {
        $product_id  = $id;
        $product     = Product::where('id', $product_id)->get()[0];
        $feedback    = Product::leftJoin('ratings', 'products.id', '=', 'ratings.product_id')->leftJoin('users', 'users.id', '=', 'ratings.user_id')->select('users.name as user_name', 'ratings.product_id', 'ratings.review', 'ratings.title', 'ratings.category')->where('ratings.status', 1)->get();
        return view('products.productdetail', compact('product', 'feedback', 'product_id'));
    }

}
