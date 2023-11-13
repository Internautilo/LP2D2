<?php

use App\Http\Controllers\Controller;
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

Route::get('/listar_produtos', function(){
    return view('product.list_products');
} )->name('list_products');

Route::get('/inserir_produto', function () {
    return view('produtct.insert_product');
})->name('product_insertion_form');


