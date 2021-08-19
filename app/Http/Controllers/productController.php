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
        // $categories = Category::where('status',1)->orderBy('id', 'DESC')->has('products')->get();
        $categories = Category::where('status',1)->orderBy('id', 'DESC')->get();
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
        // $products = Product::paginate(10);
        $products = Product::get();
        // dd($product);
        return view('product.index',compact('products'));
    }
    public function edit($id)
    {
        $categories = Category::where('status',1)->orderBy('id', 'DESC')->get();
        $product = Product::where('id',$id)->first();
        return view('product.edit',compact('product', 'categories'));  
    }

    public function update(Request $request,$id)
    {
        $product = Product::where('id',$id)->first(); 
        $data = $request->except('_token','image');
         if($request->file('image'))
        {
            $data['image'] = $request->file('image')->storeAs($this->destinationPath,time().'.'.$request->file('image')->getClientOriginalExtension());
        }
        if(file_exists($this->destinationPath))
        {
            unlink($this->destinationPath);
        }
           $product->update($data);

        return redirect()->route('product')->with('success','Item updated successfully!');   

    }
    public function destroy($id)
    {
         $product = Product::where('id',$id)->first();
          if(file_exists($this->destinationPath))
        {
            unlink($this->destinationPath);
        }
         $product->delete();
         return redirect()->route('product');
    }


}
