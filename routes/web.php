<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    // Route::get('/', 'index'); // Locked temporarily
    Route::get('/', function() { 
        return redirect()->route('merchandise')->with('error', 'Fitur Beranda masih dalam tahap pengembangan 🚧'); 
    });
    
    Route::get('/merchandise', 'merchandise')->name('merchandise');
    Route::get('/merchandise/{id}', 'productDetail')->name('product.detail');
    Route::get('/cart', 'cart')->name('cart.index');
    Route::post('/cart/add/{id}', 'addToCart')->name('cart.add');
    Route::post('/cart/update/{id}', 'updateCart')->name('cart.update');
    Route::post('/cart/remove/{id}', 'removeFromCart')->name('cart.remove');
    Route::post('/cart/clear', 'clearCart')->name('cart.clear');
    
    // Route::get('/kompetisi/{sport?}', 'kompetisi')->name('kompetisi'); // Locked temporarily
    Route::get('/kompetisi/{sport?}', function() { 
        return redirect()->route('merchandise')->with('error', 'Fitur Kompetisi masih dalam tahap pengembangan 🚧'); 
    })->name('kompetisi');
    
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/logout', 'logout')->name('logout');
});

use App\Http\Controllers\AdminController;

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    // Protected Admin Routes (Using custom session check in controller)
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/products/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
    Route::post('/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
    Route::get('/products/{id}/edit', [AdminController::class, 'editProduct'])->name('admin.products.edit');
    Route::post('/products/{id}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
    Route::post('/products/{id}/delete', [AdminController::class, 'destroyProduct'])->name('admin.products.destroy');
});
