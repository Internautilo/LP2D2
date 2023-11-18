<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return route('list_products');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return route('insert_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'name' => 'required',
            'description' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|float',
            'stock_quantity' => 'integer',
            'status' => 'string',
            'product_image' => 'image',
            
        ]);

        $product = new Product;

        $product->name = $validatedRequest['name'];
        $product->description = $validatedRequest['description'];
        $product->category = $validatedRequest['category'];
        $product->price = $validatedRequest['price'];
        $product->stock_quantity = $request->input('stock_quantity', 0); 
        $product->status = $request->input('status', 'inactive');

        if($request->hasFile('product_image'))
        {
            $file = $request->file('product_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/products/', $filename);

            $product->product_image = $filename;
        }

        $product->save();

        return redirect()->route('insert_product')->with('success', 'Product has been successfully added');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        return redirect()->route('show_product')->with('product_id', $request);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
