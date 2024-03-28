<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
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
//  Route::get('/product', function () {
//      return view('product.add');
//  });
// Route::get('/', function () {
//     return view('frontend.userfront');
// });
Route::get('/dashboard', function () {
    return view('ecommerece.home');
});
// Route::get('/home', function () {
//     return view('ecommerece.home');
// });
//Route for User
Route::get('/',[FrontController::class,'index'])->name('front.index');
Route::post('/category',[FrontController::class,'category']);
Route::get('/newpage/{id}',[FrontController::class,'productview'])->name('view.product');
Route::get('/imageview/{id}',[FrontController::class,'categoryview'])->name('view.category');


//Route for Admin Dashboard

//Route::get('/dashboard',[EcomController::class,'home'])->name('dashboard.index');
Route::get('/add',[CategoryController::class,'index'])->name('add.index');
Route::get('/show',[CategoryController::class,'showdata'])->name('show.index');
Route::post('/savedata',[CategoryController::class,'store']);
 Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('edit.index');
 Route::post('update/{id}', [CategoryController::class, 'update']);
 Route::get('/delete/{id}',[CategoryController::class,'destroy']);
 Route::get('/orders',[OrderController::class,'index']);
 Route::get('admin/view-orders/{id}',[OrderController::class,'view']);
 Route::post('admin/update-orders/{id}',[OrderController::class,'update']);

 //Route for Product
 Route::get('/product',[ProductController::class,'index']);
 Route::post('/save',[ProductController::class,'store']);
 Route::get('/showdata',[ProductController::class,'showdata']);
 Route::get('/proedit/{id}',[ProductController::class,'edit']);
 Route::get('/prodelete/{id}',[ProductController::class,'destroy']);
 Route::post('/proupdate/{id}', [ProductController::class, 'update']);
 //Route::get('/addcart', [ProductController::class, 'update']);
//  Route::get('/addcart', function () {
//           return view('product.add');
//       });

Route::get('/addcart', [CartController::class, 'viewcart'])->name('view.cart');
Route::post('/add_to_cart', [CartController::class, 'store']);
Route::get('/loaded_to_cart', [CartController::class, 'cartcount']);
Route::get('/checkout',[checkoutController::class,'checkout']);
Route::post('/place-order',[checkoutController::class,'placeorder']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
