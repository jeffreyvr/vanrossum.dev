<?php

Auth::routes(['register' => false]);

Route::get('/', 'HomeController')->name('welcome');
Route::get('/privacy', function() {
    return view('pages.privacy');
})->name('privacy');
Route::get('/about', 'AboutController')->name('about');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard')->middleware('auth');
Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/{id}/edit', 'PostsController@edit')->name('posts.edit');
Route::patch('/posts/{id}', 'PostsController@update')->name('posts.update');
Route::delete('/posts/{id}', 'PostsController@destroy')->name('posts.delete');
Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::post('/posts', 'PostsController@store')->name('posts.store');
Route::get('/{postSlug}', 'PostsController@show')->name('posts.show');

Route::post('/webhooks/webmentions', 'WebmentionsController@handle');