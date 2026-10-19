<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/shop', 'pages.shop')->name('shop');
Route::view('/how-it-works', 'pages.how-it-works')->name('how-it-works');
Route::view('/about-us', 'pages.about-us')->name('about-us');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/cart', 'pages.cart')->name('cart');
Route::view('/shipping', 'pages.shipping')->name('shipping');
Route::view('/payment', 'pages.payment')->name('payment');