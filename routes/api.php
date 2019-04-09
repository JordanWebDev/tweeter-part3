<?php

use Illuminate\Http\Request;
use App\Http\Resources\Tweet as TweetResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::get('users', 'PostsController@')
Route::get('tweets', 'PostsController@getAllTweets');
Route::get('tweetsbynumber/{number}', 'PostsController@getTweetsByNumber');
Route::get('tweetsbynumberfromstartpoint/{number}/{id}', 'PostsController@getTweetsByNumberFromStartPoint');
Route::post('tweet-like', 'PostsController@likeTweetApi');
Route::post('new-comment', 'PostsController@newCommentApi');
Route::get('tweet-comments/{tweetId}', 'PostsController@getTweetComments');
