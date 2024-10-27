<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\CartController;


Route::controller(ClientController::class)->group(function(){
    Route::get('/', 'index')->name('clientHome');
    Route::get('/products', 'products')->name('clientProducts');
    Route::get('/products-search', 'searchProduct')->name('clientProductSearch');
    Route::get('/category', 'category')->name('clientCategory');
    Route::get('/category/{category}', 'categoryProducts')->name('clientCategoryProducts');
    Route::get('/product/{product}', 'productDetail')->name('clientProductDetail');
    Route::get('/product/{product}', 'productDetail')->name('clientProductDetail');
    Route::get('/carts', 'carts')->name('clientCarts');
    Route::post('/add-to-cart', 'addToCart')->name('clientAddToCart');
    Route::post('/update-cart', 'updateCart')->name('clientUpdateCart');
    Route::post('/delete-cart', 'deleteCart')->name('clientDeleteCart');
    Route::get('/checkout', 'checkout')->name('clientCheckout');
    Route::post('/checkout-save', 'checkoutSave')->name('clientCheckoutSave');
    Route::get('/success/{order_code}', 'successOrder')->name('clientOrderCode');
    Route::get('/check-order', 'checkOrder')->name('clientCheckOrder');
    Route::post('/check-order-status', 'checkOrderStatus')->name('clientCheckOrderStatus');
    Route::get('/about', 'about')->name('clientAbout');
});

Route::controller(CartController::class)->group(function(){
    Route::get('/carts', 'carts')->name('clientCarts');
    Route::post('/add-to-cart', 'addToCart')->name('clientAddToCart');
    Route::post('/update-cart', 'updateCart')->name('clientUpdateCart');
    Route::post('/delete-cart', 'deleteCart')->name('clientDeleteCart');
});
