<?php

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

Route::get('/', function () { return view('public.home'); })->name('home');
Route::get('/about', function () { return view('public.about'); })->name('about');
Route::get('/contact', function () { return view('public.contact'); })->name('contact');
Route::get('/our-story', function () { return view('public.ourStory'); })->name('ourStory');
Route::get('/product/greenbean', function () { return view('public.products.greenbean'); })->name('products.greenbean');
Route::get('/product/roastedbean', function () { return view('public.products.roastedbean'); })->name('products.roastedbean');
