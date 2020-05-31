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
Auth::routes();

Route::get('/login/twitter', 'Auth\LoginController@TwitterLogin')->name('login.twitter');
Route::get('/login/twitter/callback', 'Auth\LoginController@handleTwitterProviderCallback');

Route::get('/', 'PostsController@index')->name('posts.index');
Route::resource('/posts', 'PostsController')->except(['show']);

// カテゴリーごとの一覧表示
Route::get('/categories/{id}/posts', 'PostsController@sideindex')->name('sideindex');

// いいね
Route::prefix('posts')->name('posts.')->group(function () {
    Route::get('/{post}', 'PostsController@detail')->name('detail');
    Route::put('/{post}/like', 'PostsController@like')->name('like')->middleware('auth');
    Route::delete('/{post}/like', 'PostsController@unlike')->name('unlike')->middleware('auth');
});


//ユーザ編集画面
Route::get('/users/edit', 'UsersController@edit');

//ユーザ更新画面
Route::post('/users/update', 'UsersController@update');

// ユーザーごとの一覧表示
Route::get('/users/{user_id}', 'UsersController@show')->name('user.show');

// ユーザーごとのいいね一覧表示
Route::get('/users/{user_id}/likes', 'UsersController@likes')->name('user.likes');

Route::get('/privacy', 'AboutController@privacy');
Route::get('/terms', 'AboutController@terms');
