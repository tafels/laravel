<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function categories($locale = null)
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('category', compact('category'));
    }

    public function product($category,$product = null)
    {
        return view('product', ['product' => $product]);
    }

    public function basket()
    {
        return view('basket');
    }
    public function order()
    {
        return view('order');
    }
}
