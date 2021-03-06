<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessageCreated;
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

Route::get('/','PagesController@home')->name('home');
Route::get('/about','PagesController@about')->name('about');
Route::get('/contact','MessageController@create')->name('create');
Route::post('/contact','MessageController@store')->name('store');
Route::get('/test-email',function(){
return new ContactMessageCreated('Momar dieng','momar.dieng@uadb.edu.sn','Merci pour laracarte');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
