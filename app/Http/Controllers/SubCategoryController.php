<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function create()
    {
        return view('subcategory.create');
    }
    public function store(Request $request){
        $data = $request->except('_token');
        $subcategory = SubCategory::create($data);
        return view('subcategory.create');

    }
    public function index(){
        $subcategory = SubCategory::get();
        return view('subcategory.index',compact('subcategory'));
    }

}
