<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Category;
use Storage;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::orderBy('updated_at', 'desc')->get();
        return view('backend.categories',compact('categories'));
    }

    public function create()
    {
        return view('backend.category_create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'big_pic' => 'image',
            'small_pic' => 'image',
        ]);

        $category = New Category();
        $category->name = $request['name'];
        $category->sort = $request['sort'];
        $category->category_des = $request['category_des'];
        $category->title = $request['title'];
        $category->description = $request['description'];

        if ($request->file('big_pic'))
        {
            $filePath = $request->file('big_pic');
            $extension = $filePath->getClientOriginalExtension();
            $key = 'category/' . $request->name . '.'.$extension;
            Storage::put($key,file_get_contents($request->file('big_pic')->getRealPath()));
            $category->big_pic = '/app/'.$key;
        }
        if ($request->file('small_pic'))
        {
            $filePath = $request->file('small_pic');
            $extension = $filePath->getClientOriginalExtension();
            $key = 'category/' . $request->name . '_small.'.$extension;
            Storage::put($key,file_get_contents($request->file('small_pic')->getRealPath()));
            $category->small_pic = '/app/'.$key;
        }

        $category->save();

        return redirect('/admin/categories');
    }

    public function edit(Category $category)
    {
        return view('backend.category_edit',compact('category'));
    }

    public function update(Request $request,Category $category)
    {
        $this->validate($request, [
            'name' => 'required',
            'big_pic' => 'image',
            'small_pic' => 'image',
        ]);

        $category->name = $request['name'];
        $category->sort = $request['sort'];
        $category->category_des = $request['category_des'];
        $category->title = $request['title'];
        $category->description = $request['description'];

        if ($request->file('big_pic'))
        {
            $filePath = $request->file('big_pic');
            $extension = $filePath->getClientOriginalExtension();
            $key = 'category/' . $request->name . '.'.$extension;
            Storage::put($key,file_get_contents($request->file('big_pic')->getRealPath()));
            $category->big_pic = '/app/'.$key;
        }
        if ($request->file('small_pic'))
        {
            $filePath = $request->file('small_pic');
            $extension = $filePath->getClientOriginalExtension();
            $key = 'category/' . $request->name . '_small.'.$extension;
            Storage::put($key,file_get_contents($request->file('small_pic')->getRealPath()));
            $category->small_pic = '/app/'.$key;
        }
        $category->save();
        return redirect('/admin/categories');
    }

    public function destroy(Category $category)
    {
        if ($category['big_pic']){
            Storage::delete(str_replace("/app/","",$category['big_pic']));
        }
        if ($category['small_pic']){
            Storage::delete(str_replace("/app/","",$category['small_pic']));
        }

        $category->delete();
        return redirect('/admin/categories');
    }
}
