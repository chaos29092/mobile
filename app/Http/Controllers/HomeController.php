<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Page;
use App\Model\Product;


class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        return view('frontend.index',compact('categories'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function category(Category $category)
    {
        $products = $category->products()->orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        return view('frontend.category',compact('products','category'));
    }
}
