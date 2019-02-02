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

// Admin Prefix route
Route::prefix('admin')->middleware('auth')->group(function(){
	// Sales Routes
	Route::prefix('sales')->group(function(){
		Route::get('/', 'Admin\Sales\SalesController@index');
	});

	// Inventory Routes
	Route::prefix('inventory')->group(function(){

		Route::resource('stock_moves', 'Admin\Inventory\InventoryController');
		Route::get('/', 'Admin\Inventory\InventoryController@index');
		Route::get('/',"Admin\Inventory\InventoryController@showStockMoves");
		Route::get('/',"Admin\Inventory\InventoryController@show");

		Route::delete('stock_moves/ajax/{id}', 'Admin\Inventory\InventoryController@ajax_destroy')->name('delete.stock');
		// Route::delete('/', 'Admin\Inventory\InventoryController@ajax_destroy');
		// Route::delete('/Admin/Inventory/InventoryController@destroy','Admin\Inventory\InventoryController@deleteIte');

		// Products
		Route::resource('products', 'Admin\Inventory\ProductsController');
		Route::match(['put','patch'], 'products/update_ajax/{id}', 'Admin\Inventory\ProductsController@updateProductQuantity');

		// Categories
		Route::resource('categories', 'Admin\Inventory\CategoryController');
		Route::delete('categories/ajax/{id}', 'Admin\Inventory\CategoryController@ajax_destroy');
		Route::get("/admin/inventor/categories/{id}", "CategoryController@findItems");

		// Unit Measure
		Route::resource('unit-measures', 'Admin\Inventory\UnitMeasureController');
		Route::delete('unit-measures/ajax/{id}', 'Admin\Inventory\UnitMeasureController@ajax_destroy');

		// Supplier
		Route::resource('suppliers', 'Admin\Inventory\SupplierController');
		Route::delete('suppliers/ajax/{id}', 'Admin\Inventory\SupplierController@ajax_destroy');
	});


	// Dashboard Route
	Route::prefix('dashboard')->group(function(){
		Route::get('/', 'Admin\DashboardController@index');
	});
});

// Authentication Routes...
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
// Route::post('register','Auth\RegisterController@showUsers');


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


