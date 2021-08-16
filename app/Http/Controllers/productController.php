<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->destinationPath = "Products";
    }

    public function create()
    {
        $categories = Category::where('status',1)->get();
        return view('product.create',compact('categories'));
    }
    public function store(Request $request){
        // dd($request->all());
        $data = $request->except('_token','image');
        if($request->file('image'))
        {
            $data['image'] = $request->file('image')->storeAs($this->destinationPath,time().'.'.$request->file('image')->getClientOriginalExtension());
        }
        $product = Product::create($data);
        if($product){
        return redirect()->route('product')->with('success','Item created successfully!');
    }else{
        return redirect()->route('product')->with('error','Item cannot be added !');
    }
    }
    public function index(Request $request){
        $products = Product::paginate(10);
        // dd($product);
        return view('product.index',compact('products'));


    }

}
