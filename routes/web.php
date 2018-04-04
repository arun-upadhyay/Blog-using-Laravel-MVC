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
// welcome
Route::get('/', function () {
    return view('pages/welcome');
});

//contact me
Route::get('/contact-me', 'ContactController@create_new_contact');
Route::post('/add-contact', 'ContactController@add_new_contact');

// note center
Route::get('/note-center', function () {
    return view('pages/note-center');
});

// articles
Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{id}', 'ArticlesController@show_by_id');
Route::get('/delete-article/{id}', 'ArticlesController@delete_by_id');
Route::get('/add-new-article', 'ArticlesController@new_article_form');
Route::post('/add-new-article-record', 'ArticlesController@add_new_article');
Route::get('/edit-article/{id}', 'ArticlesController@edit_article_form');
Route::post('/update-article-record', 'ArticlesController@update_article_record');
// sample code
Route::get('/sample-code', function () {
    return view('pages/sample-code');
});
