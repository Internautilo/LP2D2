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
            'price' => 'required|numeric',
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
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validatedRequest = $request->validate([
            'name' => 'nullable',
            'description' => 'nullable|string',
            'category' => 'nullable|string',
            'price' => 'nullable|numeric',
            'stock_quantity' => 'integer',
            'status' => 'string',
            'product_image' => 'nullable|image',
            
        ]);

        $product = Product::find($request->input('id'));

        $product->name = array_key_exists('name', $validatedRequest) ? $validatedRequest['name'] : $product->name;
        $product->description = array_key_exists('description', $validatedRequest) ? $validatedRequest['description'] : $product->description;
        $product->category = array_key_exists('category', $validatedRequest) ? $validatedRequest['category'] : $product->category;
        $product->price = array_key_exists('price', $validatedRequest) ? $validatedRequest['price'] : $product->price;
        $product->stock_quantity = array_key_exists('stock_quantity', $validatedRequest) ? $validatedRequest['stock_quantity'] : $product->stock_quantity;
        $product->status = array_key_exists('status', $validatedRequest) ? $validatedRequest['status'] : $product->status;
        $product->product_image = array_key_exists('product_image', $validatedRequest) ? $validatedRequest['product_image'] : $product->product_image;

        $product->save();


        return redirect()->route('edit_product')->with([
            'success' => 'Produto editado com successo',
            'id' => $request->input('id'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
