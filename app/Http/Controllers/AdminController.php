<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;

class AdminController extends Controller
{
    // for check auth
    public function __construct()
    {
        $this->middleware('auth');
    }
    // show admin dashboard
    public function dashboard(Request $request)
    {
        $categoriescount    = Category::count();
        $productscount      = Product::count();
        $userscount         = User::count();
        $feedbackcount      = Rating::count();
        return view('admin.dashboard', compact('categoriescount', 'productscount', 'userscount', 'feedbackcount'));
    }
    // show admin user list
    public function users(Request $request)
    {
        $users = User::where('role', '!=', 'admin')->paginate(10);
        return view('admin.users', compact('users'));
    }
    // delete user from admin viewing list
    public function deleteUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('admin.users')->with('error', 'User not found...!!!');
        }
        $user->delete();
            return redirect()->route('admin.users')->with('success', 'User deleted successfully..!!');
    }
    // Show categories List
    public function categories(Request $request)
    {
        $categories = Category::select('*')->paginate(10);
        return view('admin.categories', compact('categories'));
    }
    // Show Product List
    public function products(Request $request)
    {
        $categories = Category::select('*')->get();
        $products = Product::select('*')->paginate(10);
        return view('admin.products', compact('products', 'categories'));
    }
    // delete product from admin viewing list
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('admin.products')->with('error', 'Product not found...!!!');
        }
        $product->delete();
            return redirect()->route('admin.products')->with('success', 'Product deleted successfully..!!');
    }

}
