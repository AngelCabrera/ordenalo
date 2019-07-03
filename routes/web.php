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

Route::get('/', 'MainController@home');
Route::get('/afiliate', 'MainController@propietarios');
Route::get('/contacto', 'MainController@contacto');
Route::get('/productos', 'AllProductsController@index');
Route::get('/restaurantes', 'AllRestaurantsController@index');
Route::get('/carrito', 'ShoppingCartsController@index');
Route::get('/pagar', 'ShoppingCartsController@create');
Route::get('search', array('as'=>'search', 'uses'=>'SearchController@search'));
Route::get('autocomplete',array('as'=>'autocomplete', 'uses' => 'SearchController@autocomplete'));

Auth::routes();

Route::resource('products','ProductsController');
Route::resource('restaurants','RestaurantsController'); 
Route::resource('categories','CategoriesController'); 
Route::resource('tags','TagsController'); 
Route::resource('in_shopping_carts','InShoppingCartsController');
Route::resource('orders','OrdersController'); 
/*
	GET /products => index
	POST /products => store
	GET /products/create =>Formulario para crear

	GET /products/:id =>Mostrar un producto con ID
	GET/products/:id/edit
	PUT/PATCH/products/:id
	DELETE /products/:id
*/

Route::resource('users','Auth\UsersController');

Route::get('/home', 'HomeController@index');

Route::get('products/images/{filename}',function($filename){
	$path = storage_path("app/images/$filename");
	if(!\File::exists($path)) abort(404);

	$file = \File::get($path);
	$type = \File::mimeType($path);

	$response = Response::make($file,200);
	$response->header("Content-Type", $type);
	return $response;
 });

Route::get('restaurants/images/{filename}',function($filename){
	$path = storage_path("app/images1/$filename");
	if(!\File::exists($path)) abort(404);

	$file = \File::get($path);
	$type = \File::mimeType($path);

	$response = Response::make($file,200);
	$response->header("Content-Type", $type);
	return $response;
 });