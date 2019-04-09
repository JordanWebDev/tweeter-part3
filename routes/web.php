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

//Route::get('/', function () {
//    return view('welcome');
//});
//controller route demo
//Route::get('user', 'UsersController@index');
//Route::get('user', 'UsersController@userFollowers');
//Route::get('user/{user}/{name}', 'UsersController@userFollowers');
Route::get('/', 'PagesController@home');
Route::get('login', 'PagesController@login');
Route::get('signup', 'PagesController@signup');
Route::get('marketing', 'PagesController@market');
Route::get('profile', 'PagesController@profile');

Route::get('tweets', 'PagesController@tweets');

Route::get('tweets', 'PostsController@show');

Route::get('tweets', 'PostsController@show2');

Route::get('edit-tweet{id}', 'PostsController@editTweetDisplay');
Route::post('edit-tweet', 'PostsController@editTweet');

Auth::routes();

Route::get('about', 'PagesController@about');

Route::post('profile', 'PostsController@editprofile');

Route::get('/home', 'PostsController@index');

Route::post('tweets', 'PostsController@create');

Route::post('tweets', 'PostsController@create_comment');

Route::get('home/{id}', 'PostsController@show');

Route::post('delete', 'PostsController@destroy');

Route::post('follow', 'PostsController@follow');

Route::post('like', 'PostsController@likeTweet');

Route::get('locale/{locale}', function($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});
