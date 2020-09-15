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
Route::get('/', function () { return view('frontend.pages.index'); })->name('frontend.index');
Route::get('/master', function () { return view('frontend.layouts.app'); });
//blang page 
Route::get('/blang', function () { return view('frontend.pages.blang'); });
Route::get('/product-grid', function () { return view('frontend.pages.product-grid'); });


