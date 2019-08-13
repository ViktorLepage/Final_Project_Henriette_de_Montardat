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

Route::resource('/home', 'homeController');
Route::resource('/logreg', 'logRegController');
Route::resource('/myaccount', 'myAccountController');
Route::resource('/contact', 'contactController');
Route::resource('/boutique', 'productController');
Route::resource('/collection', 'productController');
Route::resource('/hdmadmin', 'productController');
