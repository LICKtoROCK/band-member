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

Route::get('signup','Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup','Auth\RegisterController@register')->name('signup.post');
    
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');
Route::get('logout','Auth\LoginController@logout')->name('logout.get');
    
Route::get('/','PostsController@index')->name('toppage');

Route::post('posts/{id}','PostsController@seek')->name('posts.seek');
Route::get('posts/search','PostsController@search')->name('posts.search');

Route::group(['middleware'=>['auth']],function(){
    Route::resource('posts','PostsController');
    Route::delete('comments/{comment_id}','CommentsController@destroy')->name('comments.destroy');
    Route::resource('posts.comments','CommentsController',['only'=>['store','create','index']])->shallow();

});



//Route::get('/', function () {
    //return view('welcome');
//});
