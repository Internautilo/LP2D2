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
        return view('product/list_products');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product/product_insertion_form');
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
        ]);

        $product = new Product;

        $product->name = $validatedRequest['name'];
        $product->description = $validatedRequest['description'];
        $product->category = $validatedRequest['category'];
        $product->price = $validatedRequest['price'];
        $product->stock_quantity = $request->input('stock_quantity', 0); 
        $product->status = $request->input('status', 'inactive');

        $product->save();

        return redirect()->route('product.products_insertion_form')->with('success', 'Product has been successfully added');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
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
