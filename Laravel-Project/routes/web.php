<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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


// ROUTES GET
Route::get('/', function () {
    return view('landing-page');
})->name('home');


// USER ROUTES

    // GET
Route::get('/login', function() {
    return view('user.login');
})->name('user_login');
Route::get('/signup', function(){
    return view('user.signup');
})->name('user_signup');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/conta', function(){
    $user = Auth::user();
    return view('user.account')->with(['user' => $user]);
})->name('account');

    // POST
Route::post('/signup', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/conta', [UserController::class, 'update'])->name('edit_user');




// PRODUCT VIEWS

    // GET
Route::get('/categorias', function() {
    return view('product.product-categories');
})->name('categories');
Route::get('/inserir_produto', function () {
    return view('product.insert-product');
})->name('product_insertion_form');
Route::get('/produtos/{category?}', function( ?string $category) {
    if(isset($category)){
        $products = Product::all();
        return view('product.list-product-by-category')->with(['category' => $category, 'products' => $products]);
    } else {
        return view('product-categories');
    }
})->name('list_products');
Route::get('/listar_produtos', function() {
    return view('product.list-products');
})->name('list_all_products');
Route::get('/editar_produto', function() {
    return view('product.edit-product');
})->name('edit_product');

    // POST
Route::post('/inserir_produto', [ProductController::class, 'store'])->name('insert_product');
Route::post('/editar_produto', function(Request $request){
    $id = $request->input('id');
    return view('product.edit-product')->with('id', $id);
})->name('edit_product_post');
Route::post('/atualizar_produto', [ProductController::class, 'update'])->name('update_product');
