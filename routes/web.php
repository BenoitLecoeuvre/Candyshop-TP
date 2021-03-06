<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'randomproduct'=> Product::inRandomOrder()->limit(3)->get(),
        'bestproduct' => Product::where('coup_de_coeur', true)->inRandomOrder()->first(),
        'lastproduct' => Product::latest()->limit(4)->get(),
    ]);
});

Route::get('/produits', [ProductController::class, 'index']);
Route::get('/produits/{product}', [ProductController::class, 'show']);

Route::get('/categories/{category}', [CategoryController::class, 'show']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/produits', [AdminProductController::class, 'index']);

Route::get('/admin/produits/creer', [AdminProductController::class, 'create']);
Route::post('/admin/produits/creer', [AdminProductController::class, 'store']);

Route::get('/admin/produits/{id}/modifier', [AdminProductController::class, 'edit']);
Route::put('/admin/produits/{id}', [AdminProductControllerController::class, 'update']);
Route::get('/admin/produits/{id}/supprimer', [AdminProductController::class, 'delete']);