<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
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


Route::view('register','register');
Route::post('store','App\Http\Controllers\userController@store');
Route::get('profile','App\Http\Controllers\userController@shareData');
Route::get('student','App\Http\Controllers\userController@index');
Route::get('edit/{id}','App\Http\Controllers\userController@edit');
Route::post('update','App\Http\Controllers\userController@update');
Route::get('Delete/{id}','App\Http\Controllers\userController@delete'); 
Route::get('login','App\Http\Controllers\userController@login');
Route::post('DoLogin','App\Http\Controllers\userController@DoLogin');
Route::get('logout','App\Http\Controllers\userController@logout');









