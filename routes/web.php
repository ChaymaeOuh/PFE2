<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\Welcomecontroller;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\MyOrderController;
use App\Http\Controllers\VendeurController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [Welcomecontroller::class, 'index'])->name('Welcome');

Auth::routes();

Route::post('add-to-cart',[CartController::class, 'addProduct']);
Route::post('delete-cart-item',[CartController::class, 'deleteproduct']);
Route::post('update-cart',[CartController::class, 'updatecart']);

Route::middleware(['auth'])->group(function (){
    Route::get('cart',[CartController::class, 'viewcart']);
    Route::get('checkout',[CheckoutController::class, 'index']);
    Route::post('place-order',[CheckoutController::class, 'placeorder']);

    Route::get('my-orders',[MyOrderController::class, 'index']);
    Route::get('view-order/{id_commande}',[MyOrderController::class, 'view']);

    Route::get('Vendeur', [VendeurController::class, 'index']);
    Route::get('dashbordVendeur', [VendeurController::class, 'etrevendeur']);



});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','isAdmin'])->group (function () {

    Route::get('/dashboard', 'Admin\FrontendController@index');


    Route::get('produits',[ProductController::class,'index']);
    Route::get('add-produits',[ProductController::class,'add']);
    Route::post('insert-produit',[ProductController::class,'insert']);

    Route::get('edit-produit/{id_prod}',[ProductController::class,'edit']);
    Route::put('Modifier-produit/{id_prod}',[ProductController::class,'modifier']);
    Route::get('supprimer-produit/{id_prod}',[ProductController::class,'destroy']);

    Route::get('users',[FrontendController :: class,'users']);

    Route::get('orders',[OrderController :: class,'index']);
    Route::get('admin/view-order/{id_commande}',[OrderController :: class,'view']);
    Route::get('add-user',[OrderController::class,'add']);

    Route::get('users',[UserController::class,'users']);
    Route::get('view-user/{id}',[UserController::class,'viewuser']);
    Route::get('supprimer-client/{id}',[UserController::class,'destroy']);

 });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{nomCat}',[Welcomecontroller::class, 'category']);
Route::get('/{nomCat}/{nom_prod}',[Welcomecontroller::class, 'productdetails']);
Route::get('/Category/{nom_prod}',[Welcomecontroller::class, 'detailsProduct']);
Route::get('/Wishlist',[CategoryController::class, 'index']);


