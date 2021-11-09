<?php

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

Route::get('/', function () {
    return view('frontend.front');
});

Route::get('/client/{c_name}', function ($c_name) {
    return view('frontend.client')->with('client_name',$c_name);
});

Route::get('/client', function () {
    return view('frontend.client');
});



Route::get('/hospitality', function () {
    return view('frontend.categories.hospitality');
});

Route::get('/hospitality/{h_type}', function ($h_type) {
    return view('frontend.categories.hospitality')->with('hospitality_type',$h_type);
});


Route::get('/construction', function () {
    return view('frontend.categories.construction');
});

Route::get('/healthcare', function () {
    return view('frontend.categories.healthcare');
});

Route::get('/security', function () {
    return view('frontend.categories.security');
});

Route::get('/office', function () {
    return view('frontend.categories.office');
});

Route::get('/agriculture', function () {
    return view('frontend.categories.agriculture');
});

Route::get('/contact-us', function () {
    return view('frontend.contact');
});

Route::get('/about-us', function () {
    return view('frontend.about_us');
});
Route::get('/service-agreement', function () {
    return view('frontend.service_agreement');
});


Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send')->name('send.email');;

