<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/**
 * Front-End
 */
Route::get('products/all', 'FrontEnd\AllProductController@allProducts')->name('products.all');
Route::get('filtercategory/{category_id}', 'FrontEnd\FrontEndController@filterCategory')->name('filtercategory.index');


Route::get('/admin', function () {
    return view('auth.login');
});


/**
 * Front-End 
 */
Route::get('/', 'FrontEnd\FrontEndController@index')->name('initial.index');


/**
 * Autentication
 */
// Auth::routes();
Route::get('createuser', 'UserController@create')->name('createUser');
Route::post('storeuser', 'UserController@store')->name('storeUser');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('createuser', 'Auth\UserController@create')->name('createUser');
Route::post('storeuser', 'Auth\UserController@store')->name('storeUser');
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');