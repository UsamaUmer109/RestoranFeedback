<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome(Request $request)
    {
        $category = Category::select('*')->get();
        $products = Product::select('*')->get();
        $ratings  = Rating::select('*')->get();
        return view('welcome', compact('products', 'category', 'ratings'));
    }
}
