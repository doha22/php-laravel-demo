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

 Route::get('/', function () {
    return view('welcome');
 });

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/','PagesController@index' );

Route::resource('posts', 'PostsController');

Route::auth();

Route::get('/home', 'HomeController@index');
//Route::get('/contact-us', 'ContactUSController@contactUS');
Route::get('contact-us', 'ContactUsController@ContactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactUSPost']);