<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;

class WelcomeController extends Controller
{
    public function productdetail (Request $request, $id)
    {
        $product = Product::where('id', $id)->get()[0];
        return view('products.productdetail', compact('product'));
    }

}
