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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

route::get('contact/{id}', 'ContactsController@edit');
route::post('contact/{id}', 'ContactsController@update');

Route::get('contacts','ContactsController@index');
Route::get('contacts/{id}', 'ContactsController@show');

Route::get('destroy/{id}', 'ContactsController@destroy');
Route::resource('contacts','ContactsController');

Route::get('/add', function () {
    return view('contact.add');
});
Route::post('add','ContactsController@store');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//add:
//
//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//In your LoginController.php
//
//add:
//
//public function logout() {
//    Auth::logout();
//    return redirect('/login');
//}
