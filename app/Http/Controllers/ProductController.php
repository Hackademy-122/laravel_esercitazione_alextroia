<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
      $products = Product::all();
      // dd($products);
      return view('product.index', compact('products'));
   }


   public function create(){
    return view('product.create');
   }

   public function store(Request $request){
      // dd($request->all());
      $name = $request->name;
      $price =$request->price;
      $description =$request->description;
      $image =$request->image;
      
      // dd($name,$price,$description);

      // $product = new Product();
      // $product->name = $name;
      // $product->price = $price;
      // $product->description = $description;

      // $product->save();

      $product = Product::create([
         'name'=>$request->name,
         'price'=>$request->price,
         'description'=>$request->description,
         'image'=> $request->file('image')->store('public/image')
      
      ]);

      return redirect()->route('homePage')->with('message','prodotto memorizzato con successo');
     
      }

}
