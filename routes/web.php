<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'WelcomeController@welcome')->name('welcome');

Route::post('/update-profile', 'HomeController@updateProfile')->name('update-profile');
Route::get('/add-food', 'FoodController@addFood')->name('add-food');

Route::get('food', 'FoodController@upload')->name('food');
Route::post('/upload-food','FoodController@upload')->name('food.upload');
Route::get('/all-food', 'FoodController@allFood')->name('food.all');


Route::get('/address', 'AddressController@addAddress')->name('add.address');
Route::post('/upload-address','AddressController@uploadAddress')->name('address.upload');
Route::get('/all-address', 'AddressController@allAddress')->name('address.all');


Route::get('/complaint', 'ComplaintController@addComplaint')->name('add.complaint');
Route::post('/upload-complaint','ComplaintController@uploadComplaint')->name('complaint.upload');
Route::get('/all-complaint', 'ComplaintController@allComplaint')->name('complaint.all');









//
