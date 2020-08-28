<?php

use App\Http\Controllers\HomeController;
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
Route::prefix('admin')->namespace('Admin')->group(function () {


/**
 * Products
 */

Route::get('products', 'ProductController@index')->name('products.index');
Route::get('product/create', 'ProductController@create')->name('product.create');
Route::post('product/store', 'ProductController@store')->name('product.store');
Route::get('product/{url}/edit', 'ProductController@edit')->name('product.edit');
Route::put('product/update/{url}', 'ProductController@update')->name('product.update');
Route::get('product/{url}/show', 'ProductController@show')->name('product.show');
Route::get('product/{id}/delete', 'ProductController@destroy')->name('product.destroy');




});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();