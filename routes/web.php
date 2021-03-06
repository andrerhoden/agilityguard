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

Route::get('/about-us/news-videos', 'PublicPortalController@about_news');
Route::get('/about-us/agilityguard', 'PublicPortalController@about_agilityguard');
Route::get('/about-us/advisory-board', 'PublicPortalController@about_advisoryBoard');
Route::get('/about-us/our-experts', 'PublicPortalController@about_ourExperts');

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
Route::get('/sports/multisports', 'PublicPortalController@sports_multisports');
Route::get('/sports/football', 'PublicPortalController@sports_football');
Route::get('/sports/golf', 'PublicPortalController@sports_golf');
Route::get('/sports/hockey', 'PublicPortalController@sports_hockey');
Route::get('/sports/mma', 'PublicPortalController@sports_mma');
Route::get('/sports/running', 'PublicPortalController@sports_running');
Route::get('/sports/swimming', 'PublicPortalController@sports_swimming');
Route::get('/sports/tennis', 'PublicPortalController@sports_tennis');
Route::get('/sports/soccer', 'PublicPortalController@sports_soccer');
Route::get('/sports/singers', 'PublicPortalController@sports_singers');
Route::get('/sports/shooting', 'PublicPortalController@sports_shooting');
Route::get('/sports/sleding', 'PublicPortalController@sports_sleding');
Route::get('/sports/speed-skating', 'PublicPortalController@sports_speedskating');


Route::group(['prefix' => 'dentist-portal'], function () {

    Route::get('/account', 'DentistPortalController@account');
    Route::post('/account/save', 'DentistPortalController@accountSave');

    Route::get('/create-order', 'DentistPortalController@createOrder');
    Route::post('/create-order/save', 'DentistPortalController@createOrderSave');
    Route::get('/orders', 'DentistPortalController@orders');
    Route::get('/order/{order}', 'DentistPortalController@orderDetails');

    Route::get('/', 'DentistPortalController@login');
    Route::post('/login/execute', 'DentistPortalController@loginExecute');
    Route::get('/logout', 'DentistPortalController@logoutExecute');

});
Route::get('/certification', 'PublicPortalController@certification');
Route::get('/your-practice', 'PublicPortalController@yourPractice');
Route::get('/regions', 'PublicPortalController@regions');
Route::get('/research', 'PublicPortalController@research');
Route::get('/clayton-a-chan-dds', 'PublicPortalController@claytonChan');
Route::get('/occlusion-connections', 'PublicPortalController@occlusionConnection');
Route::get('/lab-partners', 'PublicPortalController@labPartners');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
