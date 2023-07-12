<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $categories = Category::all();
        $products = Product::where('user_id', 1)->take(8)->get();
        $productsNews = Product::latest()->take(8)->get();
        return view('home.home', compact('slider', 'categories', 'products', 'productsNews'));
    }

    public function searchProduct(){

        $keywords = $_GET['search'];
        $products = Product::where('name', 'like', '%'.$keywords.'%')->get(); // tương tự: "SELECT * FROM products WHERE name LIKE '%$keyword%'"
        $slider = Slider::all();
        $categories = Category::all();
        $productsNews = Product::latest()->take(8)->get();
        return view('home.home', compact('slider', 'categories', 'products', 'productsNews','keywords'));

    }
}
