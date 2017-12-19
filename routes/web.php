<?php

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'MainController@index')->name('home');

Route::get('/verify/token/{token}', 'Auth\VerificationController@verify')->name('auth.verify');
Route::get('/verify/resend', 'Auth\VerificationController@resend')->name('auth.verify.resend');

Route::get('index', 'MainController@index');
Route::get('index/{all}', 'MainController@index');
Route::get('/user', 'UserController@profile');
Route::get('/user/edit', 'UserController@edit');
Route::get('/user/{userid}', 'UserController@profile');
Route::post('/user/update', 'FileController@update');
// Route::get('/postAcceptor', 'FileController@imgstore');
Route::get('/userposts', 'UserController@index');
Route::get('post', 'PostController@post');
Route::post('post/create', 'PostController@store');
Route::get('post/edit/{postid}', 'PostController@edit');
Route::get('post/delete/{postid}', 'PostController@delete');
Route::post('post/update/{postid}', 'PostController@update');
Route::post('post/update/{postid}', 'PostController@update');
Route::get('post/like', 'LikeController@like');
Route::get('post/unlike', 'LikeController@unlike');
Route::get('post/likestore', 'LikeController@likestore');
Route::get('post/unlikestore', 'LikeController@unlikestore');

// Route::get('comment/create/{postid}', 'CommentController@create');
Route::post('comment/store/{postid}', 'CommentController@store');
// Route::post('comment/store2/{postid}', 'CommentController@store2');
Route::get('post/{postid}', 'MainController@show');
Route::post('file/store', 'FileController@store');
Route::post('comment/edit/{comment_id}', 'CommentController@edit');
Route::post('comment/delete/{comment_id}', 'CommentController@delete');

// Route::get('/avatars/{filename}', function ($filename)
// {
//     $path = storage_path() . '/avatars/' . $filename;
// dd($path);
//     if(!File::exists($path)){ 
// console.log('afdsffadsf');
// }
// else{
// console.log('afdsffadsf');

// }
//     $file = File::get($path);
//     $type = File::mimeType($path);

//     $response = Response::make($file, 200);
//     $response->header("Content-Type", $type);
//     return $response;
// })->name('avatar');




