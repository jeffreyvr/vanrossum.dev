<?php

Auth::routes(['register' => false]);

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')
    ->group(function () {

    Route::get('/', 'HomeController')->name('welcome');
    Route::get('/about', 'AboutController')->name('about');
    Route::get('/freelance-wordpress-developer', 'PagesController@wordpress')->name('wordpress');
    Route::get('/freelance-laravel-developer', 'PagesController@laravel')->name('laravel');
    Route::get('/privacy', function () {
        return view('pages.privacy');
    })->name('privacy');
});

Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard')->middleware('auth');
Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/{id}/edit', 'PostsController@edit')->name('posts.edit');
Route::patch('/posts/{post}', 'PostsController@update')->name('posts.update');
Route::delete('/posts/{id}', 'PostsController@destroy')->name('posts.delete');
Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::post('/posts', 'PostsController@store')->name('posts.store');
Route::get('/{postSlug}', 'PostsController@show')->name('posts.show');

Route::post('/webhooks/webmentions', 'WebmentionsController@handle');
