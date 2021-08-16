<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('category.index',compact('categories'));
    }

    public function create()
    {
    	return view('category.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        // $category = \App\Models\Category::create($data);
        $category = Category::create($data);
        return redirect()->route('category');
    } 

    public function edit($id)
    {
        $category = Category::where('id',$id)->first();
        return view('category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category = Category::where('id',$id)->first();
        $data = $request->except('_token','status');
        $data['status'] = $request->status?1:0;
        $category->update($data);
        return redirect()->route('category');
    }


    public function destroy($id)
    {
         $category = Category::where('id',$id)->first();
         $category->delete();
         return redirect()->route('category');
    }
}
