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


//Route to get Landing Page
Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/properties', 'PropertyController@index');

//Authenticanted routes start here
Auth::routes();
//
//
//Dashboard Route
Route::get('landlord/dashboard', 'HomeController@landlordDashboard')->name('landlord.dashboard')->middleware('is_admin');

//Route Group
Route::group(['middleware' => 'auth'], function() {
    //Property Routes
    Route::get('/landlord/properties/{property}', 'PropertyController@show');
    Route::resource('/landlord/properties', 'PropertyController')->except('index', 'show');

    //Reservation Routes
    Route::get('dashboard/reservations/create/{id}', 'ReservationController@create');
    Route::resource('dashboard/reservations', 'ReservationController')->except('create');
});
