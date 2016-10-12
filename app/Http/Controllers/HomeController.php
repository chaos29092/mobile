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
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        return view('frontend.about',compact('categories'));
    }

    public function contact()
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        return view('frontend.contact',compact('categories'));
    }

    public function category(Category $category)
    {
        $products = $category->products()->orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        return view('frontend.category',compact('products','category','categories'));
    }

    public function product(Product $product)
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        return view('frontend.product',compact('product','categories'));
    }

    public function news()
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        $news = Page::where('tag','new')->orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->paginate(20);
        return view('frontend.news',compact('categories','news'));
    }

    public function new(Page $page)
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        return view('frontend.new',compact('categories','page'));
    }
}
