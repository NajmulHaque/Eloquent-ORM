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
    return view('pages.landingPage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('orders','OrderController');
Route::resource('courses', 'CourseController');
Route::resource('students', 'StudentController');
Route::post('store','Auth\RegisterController@store')->name('store');