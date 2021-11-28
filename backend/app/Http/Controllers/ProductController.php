<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png|max:2048',
            
        ]);

        $file_name = time().'_'.$request->file->getClientOriginalName();
        $file_path = $request->file('file')->storeAs('products', $file_name, 'public');

        Product::create([
            'name' => $request->name,
            'image' => $file_name,
            'path' => '/storage/' . $file_path,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'short_description' => $request->short_description,
            'description' => $request->description

        ]);

        return response(['message' => 'Product created Successfully !!'], 200);
        //  $product = new Product;
 
        //  if($request->file()) {
        //     $file_name = time().'_'.$request->file->getClientOriginalName();
        //     $file_path = $request->file('file')->storeAs('products', $file_name, 'public');
        //     $name = $request->name;
        //     $price = $request->price;
        //     $quantity = $request->quantity;
        //     $short_description = $request->short_description;
        //     $description = $request->description;


        //     $product->name = $name;
        //     $product->image = time().'_'.$request->file->getClientOriginalName();
        //     $product->path = '/storage/' . $file_path;
        //     $product->price = $price;
        //     $product->quantity = $quantity;
        //     $product->short_description = $short_description;
        //     $product->description = $description;
        //     $product->save();
 
        //     return response(['message' => 'Product created Successfully !!'], 200);
        //  }

        
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->fill($request->post())->save();

        return response(['message' => 'Product updated Successfully !!'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response(['message' => 'Product deleted Successfully !!'], 204);
    }
}
