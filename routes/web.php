<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
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

Route::get('/', [HomeController::class,'homepage']);
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/aboutus',[HomeController::class,'aboutus']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');
Route::get('/loginuser', [UserController::class, 'loginuser'])->name('user.login');

Route::get('/signup',[HomeController::class,'signup']);
Route::post('/signupuser', [UserController::class, 'signup'])->name('user.signup');

Route::post('/addtocart', [TransactionController::class, 'addtocart'])->name('addtocart');

Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');

Route::get('/cart', [UserController::class, 'cart'])->name('user.cart');

Route::get('/editprofile', [UserController::class, 'edit'])->name('user.edit');

Route::post('/edit', [UserController::class, 'editprofile'])->name('edit');

Route::post('/checkout', [TransactionController::class, 'checkoutform'])->name('checkout');

Route::post('/checkoutitem', [TransactionController::class, 'checkout'])->name('item.checkout');

Route::post('/delete', [TransactionController::class, 'destroy'])->name('transact.delete');