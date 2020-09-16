<?php

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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//frontend-route
Route::get('/', function () { return view('frontend.pages.products.index'); })->name('frontend.index');
Route::get('/master', function () { return view('frontend.layouts.app'); });
//blang page 
Route::get('/blang', function () { return view('frontend.pages.blang'); })->name('blog');

//product section
Route::get('/product-grid', function () { return view('frontend.pages.products.partials.product-grid'); })->name('product-grid');
Route::get('/product-details', function () { return view('frontend.pages.products.partials.product-details'); })->name('product-details');

//contact-section
Route::get('/contact', function () { return view('frontend.pages.contact.contact'); })->name('contact');

//cart
Route::get('/cart', function () { return view('frontend.pages.cart'); })->name('cart');

//check-out
Route::get('/checkout', function () { return view('frontend.pages.checkout'); })->name('checkout');
//wishlist
Route::get('/wishlist', function () { return view('frontend.pages.wishlist'); })->name('wishlist');


//blog-section
Route::get('/blog', function () { return view('frontend.pages.blog.blog'); })->name('blog');
Route::get('/blog-details', function () { return view('frontend.pages.blog.partials.blog-details'); })->name('blog-details');

