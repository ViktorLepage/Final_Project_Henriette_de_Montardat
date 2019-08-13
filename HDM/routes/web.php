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

Route::get('/home', 'homeController');
Route::get('/logreg', 'logRegController');
Route::get('/myaccount', 'myAccountController');
Route::get('/contact', 'contactController');
Route::get('/boutique', 'productController');
Route::get('/collection', 'productController');
Route::get('/hdmadmin', 'productController');
