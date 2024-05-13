<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [FrontController::class, 'home'])->name('home');
route::get('/products', [FrontController::class, 'products'])->name('front.products');
route::get('/products/category/{id}', [FrontController::class, 'show_by_category'])->name('products/category/');
route::get('/products/show_product/{id}', [FrontController::class, 'show'])->name('front.show_product');
route::get('/cart', [FrontController::class, 'cart'])->name('front.cart')->middleware('auth');
route::get('/cart/add/{id}', [FrontController::class, 'addCart'])->name('cart.add');
route::get('/cart/destroy/{rowId}', [FrontController::class, 'destroyCart'])->name('cart.destroy');
route::get('/cart/update/{rowId}', [FrontController::class, 'updateCart'])->name('cart.update');
route::get('/payment', [FrontController::class, 'payment'])->name('payment')->middleware('auth');
route::post('/payment_method', [FrontController::class, 'PaymentMethod'])->name('PaymentMethod')->middleware('auth');
route::get('/about', [FrontController::class, 'about'])->name('front.about');
route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
route::get('/user', [FrontController::class, 'user'])->name('front.user');
route::post('/login', [FrontController::class, 'login'])->name('front.login');
route::post('/register', [FrontController::class, 'register'])->name('front.register');
route::delete('/logout', [FrontController::class, 'logout'])->name('logout');
route::post('/commenter', [FrontController::class, 'commenter'])->name('commenter')->middleware('auth');

route::middleware(['auth', 'role:admin'])->group(function () {
    route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::prefix('admin')->name('admin.')->group(function () {
        route::resource('category', CategoryController::class)->except('show');
        route::resource('product', ProductController::class)->except('show');
        route::resource('slider', SliderController::class)->except('show');
    });
});

route::get('/admin/login', [LoginController::class, 'Dologin'])->name('dologin');
route::post('connect', [LoginController::class, 'login'])->name('connect');
