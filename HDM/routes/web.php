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
Route::get('/', function () {
    return 'Main page';
});
Route::resource('/home', 'homeController');
Route::resource('/myaccount', 'myAccountController');
Route::resource('/contact', 'contactController');
Route::resource('/boutique', 'boutiqueController');
Route::resource('/collection', 'productController');
Route::resource('/hdmadmin', 'productController');
Route::resource('/cart', 'CartController');

Route::get('/mmm', function()
{
    //return Response::view('layouts/mainTemplate');
    return Response::view('collection');
});


Auth::routes();

Route::get('/auth/login', 'loginsignupController@index');


//! JUST FABRIZIO TESTING, I WILL REMOVE IT DO NOT WORRY :)
Route::resource('/adminCollection', 'AdminProdController');

Route::get('/test', 'homeController@test');
