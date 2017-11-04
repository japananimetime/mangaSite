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
Route::get('api/v1/mangas', 'MangasController@getPaginatedMangas');
Route::get('api/v1/manga/{id}', 'MangasController@getSpecifiedManga');
Route::get('api/v1/manga/{id}/comments', 'ReactionsController@getCommentsOnManga');
Route::get('api/v1/manga/{id}/questions', 'ReactionsController@getQuestionsOnManga');
Route::get('api/v1/manga/{id}/answers', 'ReactionsController@getAnswersOnManga');
Route::get('api/v1/users', 'UsersController@getAllUsers');
Route::get('api/v1/user/{id}', 'UsersController@getUser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
