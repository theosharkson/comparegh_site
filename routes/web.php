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

Route::get('/', function () {
    return view('welcome');
})->name('site');

Route::resource('sc', StandardCatalogController::class);
Route::get('/sc-names', 'StandardCatalogController@onlyNames')->name('sc-names');
Route::post('api/sc-item-id-by-name', 'StandardCatalogController@getId')->name('sc-item-id');

Route::resource('products', ProductController::class);

Route::get('/linked-items', 'StandardCatalogController@linkedItems')->name('sc-linked');
Route::get('/all-products', 'StandardCatalogController@allProducts')->name('all-products');
Route::get('/products/{product}', 'StandardCatalogController@productDetails')->name('product-details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
