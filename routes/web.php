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
	return view('welcome');
});

Auth::routes();

Route::get('/catalog', 'HomeController@index')->name('catalog');

// Landing Page
Route::get('/main', function () {
	return view('main');
});

Route::get('/catalog', 'FoodController@index');
Route::get('/profile', 'HomeController@profile');

// CRUD Restaurant
// Add Food
Route::get('/addfood', 'FoodController@create');
// To save
Route::post('/addfood', 'FoodController@store');
// Sort
Route::get('/catalog/{id}', 'FoodController@filter');
// Search
Route::post('/search', 'FoodController@search');
// To delete
Route::delete('/deletefood/{id}', 'FoodController@destroy');
// To go to edit form
Route::get('/editfood/{id}', 'FoodController@edit');
// To save the edited food
Route::patch('/editfood/{id}', 'FoodController@update');

// Orders
Route::get('/allorders', 'OrderController@index');

// Cart CRUD
Route::post('/addtocart/{id}', 'FoodController@addToCart');
Route::get('/cart', 'FoodController@showCart');

// Remove Food
Route::delete('/removefood/{id}', 'FoodController@removeFood');

// Remove All
Route::delete('/emptycart', 'FoodController@emptyCart');

// Pay via COD
Route::get('/checkout', 'OrderController@checkout');

// Orders
Route::get('/showorders', 'OrderController@showOrders');


// Facebook Login
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

// Google Login
Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');