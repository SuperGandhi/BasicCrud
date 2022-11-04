<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
    //
    public function index(){

        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $product = new Product();
        $product -> title = $request->title;
        $product -> country = $request->contry;
        $product -> price = $request->price;

        $product->save();
        return redirect()->route('products.index');
    }
}
