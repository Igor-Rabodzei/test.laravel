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

Route::get('/', "PostsController@index");

//Route::get('/posts/{id}', "PostsController@show")->where("id", "[0-9]+");
//старая версия роута по id

//новая по alias
Route::get('/posts/{post}', "PostsController@show");

Route::get('/posts/create', "PostsController@create");



Route::post('/post', "PostsController@store");

Route::get('/posts/{post}/edit', "PostsController@edit");

Route::patch('/posts/{post}', "PostsController@update");

Route::delete('/posts/{post}', "PostsController@destroy");
/*
 *
 * GET /posts
 * GET /posts/create
 * POST /pots
 * GET /posts{id}/edit
 * PATCH /posts/{id}
 * GET /posts/{id}
 * DELETE /posts/{id}
 * 
 *
 */