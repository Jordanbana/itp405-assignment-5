<?php

use App\Tweet;

Route::get('/', function () {
    return view('home');
});
Route::get('/', 'TweetController@index');


Route::post('/', 'TweetController@store');

Route::get('/tweets/{id}', 'TweetController@view');

Route::get('/tweets/{id}/delete', 'TweetController@destroy');

Route::get('/tweets/{id}/edit', 'TweetController@edit');//user side

Route::post('/tweets/{id}', 'TweetController@update');//DB side


Route::get('/orm', function(){
    $tweets = Tweet::all();
    return $tweets;
});
