<?php

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing-page');
})->name('home');


// PRODUCT VIEWS
Route::get('/categorias', function() {
    return view('product.product-categories');
})->name('categories');


Route::get('/inserir_produto', function () {
    return view('product.insert_product');
})->name('product_insertion_form');

Route::get('/listar_produtos/{category?}', function( ?string $category) {

    if(isset($category)){
        $products = Product::all();
        return view('product.list-product-by-category')->with(['category' => $category, 'products' => $products]);
    } else {
        return view('product-categories');
    }
        
    
})->name('list_products');


