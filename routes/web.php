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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false, 'login' => false]);

Route::get('/', 'LandingPage\HomeController@beranda')->name('beranda');

Route::get('/login','Auth\RazenSupportboard\LoginController@showLoginForm')->name('razen-supportboard.login');
Route::post('/login', 'Auth\RazenSupportboard\LoginController@login')->name('razen-supportboard.login.submit');
Route::get('/logout', 'Auth\RazenSupportboard\LoginController@logout')->name('razen-supportboard.logout');

Route::group(['middleware' => 'auth:razen_supportboard'], function(){
    @include('razen-supportboard.php');
});
