<?php

/*
 * Route Article
 */
Route::resources([
    'students' => 'StudentController'
]);

// student route

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
