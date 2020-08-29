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


/**
 * Categories
 */
Route::get('categories', 'CategoryController@index')->name('categories.index');
Route::get('category/create', 'CategoryController@create')->name('category.create');
Route::post('category/store', 'CategoryController@store')->name('category.store');
Route::get('category/{url}/edit', 'CategoryController@edit')->name('category.edit');
Route::put('category/update/{url}', 'CategoryController@update')->name('category.update');
Route::get('category/{url}/show', 'CategoryController@show')->name('category.show');
Route::get('category/{id}/delete', 'CategoryController@destroy')->name('category.destroy');

/**
 * Sub-categories
 */
Route::get('subcategories', 'SubcategoryController@index')->name('subcategories.index');
Route::get('subcategory/create', 'SubcategoryController@create')->name('subcategory.create');
Route::post('subcategory/store', 'SubcategoryController@store')->name('subcategory.store');
Route::get('subcategory/{url}/edit', 'SubcategoryController@edit')->name('subcategory.edit');
Route::put('subcategory/update/{url}', 'SubcategoryController@update')->name('subcategory.update');
Route::get('subcategory/{url}/show', 'SubcategoryController@show')->name('subcategory.show');
Route::get('subcategory/{id}/delete', 'SubcategoryController@destroy')->name('subcategory.destroy');

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();