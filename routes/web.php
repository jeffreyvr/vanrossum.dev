<?php

Auth::routes(['register' => false]);

Route::get('/', function () {
    return redirect(app()->getLocale());
});

/**
 * All routes that require a locale prefix.
 */
Route::multilingual('/', 'HomeController')->name('welcome');
Route::multilingual('/about', 'AboutController')->name('about');
Route::multilingual('/freelance-wordpress-developer', 'PagesController@wordpress')->name('wordpress');
Route::multilingual('/freelance-laravel-developer', 'PagesController@laravel')->name('laravel');
Route::multilingual('/contact', 'ContactController@show')->name('contact');
Route::multilingual('/privacy', function(){
    return view('pages.privacy');
})->name('privacy');

Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard')->middleware('auth');

Route::get('/donate', function() {
    return redirect()->to('https://github.com/sponsors/jeffreyvr');
})->name('donate');

// Route::post('/donate', 'DonationController@store')->name('donate.submit');
// Route::get('/thank-you', 'DonationController@thanks')->name('donate.thanks');
Route::post('/contact', 'ContactController@submit')->name('contact.submit');
Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/posts/tagged/{tag_slug}', 'PostsController@tagged')->name('posts.tagged');
Route::get('/posts/{id}/edit', 'PostsController@edit')->name('posts.edit');
Route::patch('/posts/{post}', 'PostsController@update')->name('posts.update');
Route::delete('/posts/{id}', 'PostsController@destroy')->name('posts.delete');
Route::get('/posts/create', 'PostsController@create')->name('posts.create');
Route::post('/posts', 'PostsController@store')->name('posts.store');
Route::get('/{postSlug}', 'PostsController@show')->name('posts.show');

Route::post('/webhooks/webmentions', 'WebmentionsController@handle');
