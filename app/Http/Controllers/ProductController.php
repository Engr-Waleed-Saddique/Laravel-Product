<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index(){
        $products=Product::paginate(5);
        return view('product.index',compact('products'));
    }
    public function show($id){
        $product=Product::find($id);
        return view('product.show',compact('product'));

    }
    public function add_product(){
        return view('product.add_product');
    }
    public function save_product(Request $request){
        //Adding Product in Database
        
        $this->validate($request,array(
            'name'=>'required|max:100',
            'price'=>'required|decimal:2',
            'description'=>'required'
         ));

        $product=new Product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;

        $product->save();

        Session::flash('success','Product has been added successfully');
        return redirect()->back();

    }

}
