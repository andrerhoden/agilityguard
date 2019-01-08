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

Route::get('/', 'PublicPortalController@index');

Route::get('/about-us', 'PublicPortalController@about');

Route::get('/map', 'PublicPortalController@map');

Route::get('/products', 'PublicPortalController@products');
Route::get('/products/{product}', 'PublicPortalController@productDetails');

Route::get('/testimonials', 'PublicPortalController@testimonials');

Route::get('/contact-us', 'PublicPortalController@contactus');
Route::post('/contact-us/save', 'PublicPortalController@contactusSave');

Route::get('/sports/basketball', 'PublicPortalController@sports_basketball');
Route::get('/sports/baseball', 'PublicPortalController@sports_baseball');
Route::get('/sports/boxing', 'PublicPortalController@sports_boxing');
Route::get('/sports/cycling', 'PublicPortalController@sports_cycling');
Route::get('/sports/fitness', 'PublicPortalController@sports_fitness');
Route::get('/sports/football', 'PublicPortalController@sports_football');
Route::get('/sports/golf', 'PublicPortalController@sports_golf');
Route::get('/sports/hockey', 'PublicPortalController@sports_hockey');
Route::get('/sports/lacrosse', 'PublicPortalController@sports_lacrosse');
Route::get('/sports/mma', 'PublicPortalController@sports_mma');
Route::get('/sports/running', 'PublicPortalController@sports_running');
Route::get('/sports/swimming', 'PublicPortalController@sports_swimming');
Route::get('/sports/tennis', 'PublicPortalController@sports_tennis');


Route::group(['prefix' => 'dentist-portal'], function () {

    Route::get('/account', 'DentistPortalController@account');
    Route::get('/create-order', 'DentistPortalController@createOrder');
    Route::post('/create-order/save', 'DentistPortalController@createOrderSave');
    Route::get('/orders', 'DentistPortalController@orders');
    Route::get('/order/{order}', 'DentistPortalController@orderDetails');

    Route::get('/', 'DentistPortalController@login');
    Route::post('/login/execute', 'DentistPortalController@loginExecute');
    Route::get('/logout', 'DentistPortalController@logoutExecute');

});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
