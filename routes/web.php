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

Route::get('/', function () {
    return view('welcome');
});

# anther page
// Route::get('/about', function () {
//     return view('pages.about');
// });


# create dynamic route 
// Route::get('/users/{id}/{name}',function($id , $name) {
//     return 'this id user id '. $id . 'and name:'.$name;
// });

// Route::get('/','PagesController@index' );
// Route::get('/about','PagesController@about' );

Route::resource('posts', 'PostsController');