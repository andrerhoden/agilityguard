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

Route::get('/about-us', function () {
    return view('publicportal.about');
});

Route::get('/products', 'PublicPortalController@products');

Route::get('/testimonials', function () {
    return view('publicportal.testimonials');
});
Route::get('/contact-us', function () {
    return view('publicportal.contact');
});




Route::get('/dentist-portal/', function () {


     return view('dentistportal.index');
    //die('dentistportal--');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
