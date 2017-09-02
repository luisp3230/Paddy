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

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('main');
});

//Formulario completo de recadería, hacia abajo
Route::get('/paddy_errand', function(){
  return view('paddy_errand');
});

//Formulario completo de mensajería, hacia abajo
Route::get('/paddy_message', function(){
  return view('paddy_message');
});

//Formulario password forgetted
Route::get('/password_reset', function(){
  return view('password_reset');
});

//Formulario completo para ser un courier paddy y envío para su aprobación
Route::get('courier_signup', 'Courier\SignupController@showRegistrationForm');
Route::post('courier_signup', 'Courier\SignupController@register');

//Envio de formulario del Partner para su aprobación
Route::post('partner_signup', 'Partner\SignupController@register');

Route::get('fire', function () {
    // this fires the event
    event(new App\Events\EventoPrueba());
    return "event fired";
});

Route::get('test', function () {
    // this checks for the event
    return view('test');
});

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'admin_check'], function() {

//Login y Logout
	Route::post('admin_logout', 'Admin\LoginController@logout');
	Route::post('admin_login', 'Admin\LoginController@login');

});

Route::group(['middleware' => 'admin_auth'], function(){

	Route::post('admin_logout', 'Admin\LoginController@logout');
	Route::get('/admin_home', function(){
	  return view('admin.home');
	});

	Route::resource('admin_couriers', 'Admin\CourierController');	
	Route::resource('admin_clients' , 'Admin\ClientController');	
	Route::resource('admin_stores'  , 'Admin\StoreController');
	Route::resource('admin_categories'  , 'Admin\CategoryController');
	Route::resource('admin_orders' , 'Admin\OrderController');	
});

/*
|--------------------------------------------------------------------------
| USER
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'user_check'], function() {

//Formulario de Registro
	Route::get('user_signup', 'User\SignupController@showRegistrationForm');
	Route::post('user_signup', 'User\SignupController@register');

//Login y Logout
	Route::post('user_logout', 'User\LoginController@logout');
	Route::get('user_login', 'User\LoginController@showLoginForm');
	Route::post('user_login', 'User\LoginController@login');

});

Route::group(['middleware' => 'usuario_auth'], function(){

	Route::post('user_logout', 'User\LoginController@logout');

	Route::get('/user_home', function(){
	  return view('user.home');
	});

	Route::get('/user_main', function(){
	  return view('main');
	});

	Route::resource('user_orders', 'User\OrderController');	
	Route::resource('user_config', 'User\ConfigController');
	// Route::get('user_statis', function(){
	// 	return view('user.home.home_statis');
	// });

	Route::post('user_tracking', 'User\TrackingController@register');
	Route::get('user_tracking', 'User\TrackingController@showTracking');
});

	Route::post('user_charge', 'User\ChargeController@charge');
	
/*
|--------------------------------------------------------------------------
| COURIER
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'courier_check'], function() {

//Login y Logout
	Route::post('courier_logout', 'Courier\LoginController@logout');
	Route::get('courier_login', 'Courier\LoginController@showLoginForm');
	Route::post('courier_login', 'Courier\LoginController@login');

});

Route::group(['middleware' => 'courier_auth'], function(){

	Route::post('courier_logout', 'Courier\LoginController@logout');

	Route::get('/courier_home', function(){
	  return view('courier.home');
	});

	Route::resource('courier_orders', 'Courier\OrderController');	
	Route::resource('courier_config', 'Courier\ConfigController');
	// Route::get('usuario_statis', function(){
	// 	return view('usuario.auth.home.home_statis');
	// });

	// Route::resource('courier_tracking', 'Courier\TrackingController');
	Route::post('courier_tracking', 'Courier\TrackingController@register');
	Route::get('courier_tracking', 'Courier\TrackingController@showTracking');	

});

/*
|--------------------------------------------------------------------------
| PARTNER STORE
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'partner_check'], function() {

//Login y Logout
	Route::post('partner_logout', 'Partner\LoginController@logout');
	Route::get('partner_login', 'Partner\LoginController@showLoginForm');
	Route::post('partner_login', 'Partner\LoginController@login');

});

Route::group(['middleware' => 'partner_auth'], function(){

	Route::post('partner_logout', 'Partner\LoginController@logout');

	Route::get('/partner_home', function(){
	  return view('partner.home');
	});

	Route::resource('partner_config', 'Partner\ConfigController');
	Route::resource('partner_items', 'Partner\ItemController');
	Route::resource('partner_stores', 'Partner\StoreController');

});