<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('index');
});
*/

Route::get('/','Controller@index');


Route::get('/welcome','Controller@welcome');


Route::get('/cart','Controller@cart');


Route::get('/checkout','Controller@checkout');


Route::get('/clinic-info','Controller@clinicinfo');


Route::get('/contact','Controller@contact');


Route::get('/gallery','Controller@gallery');


Route::get('/general-ques','Controller@generalques');


Route::get('/medical-staff','Controller@medicalstaff');


Route::get('/news-post','Controller@newspost');


Route::get('/news','Controller@news');


Route::get('/prod-post','Controller@prodpost');


Route::get('/services','Controller@services');


Route::get('/store','Controller@store');

Route::post('/getAppointment','appointment@getAppointment');

Route::auth();

Route::get('/home', 'HomeController@index');
