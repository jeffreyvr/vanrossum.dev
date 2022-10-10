<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

// Auth::routes(['register' => false]);

Route::get('/', function () {
    return redirect(app()->getLocale());
});

/**
 * All routes that require a locale prefix.
 */
Route::multilingual('/', [HomeController::class, 'index'])->name('home');

Route::multilingual('about', function() {
    return view('pages.about.index');
})->name('about');

Route::multilingual('/freelance-wordpress-developer', function() {
    return view('pages.wordpress.' .app()->getLocale(). '.index');
})->name('wordpress');

Route::multilingual('/freelance-laravel-developer', function() {
    return view('pages.laravel.' .app()->getLocale(). '.index');
})->name('laravel');

Route::multilingual('/contact', [ContactController::class, 'show'])->name('contact');

Route::multilingual('/privacy', function(){
    return view('pages.privacy');
})->name('privacy');

// Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard')->middleware('auth');

Route::get('/donate', function() {
    return redirect()->to('https://github.com/sponsors/jeffreyvr');
})->name('donate');

// Route::post('/donate', 'DonationController@store')->name('donate.submit');
// Route::get('/thank-you', 'DonationController@thanks')->name('donate.thanks');
Route::post('/contact', 'ContactController@submit')->name('contact.submit');

Route::multilingual('projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/blog', [PostController::class, 'index'])->name('posts');
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/tagged/{tag_slug}', [PostController::class, 'tagged'])->name('posts.tagged');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::patch('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.delete');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/{postSlug}', [PostController::class, 'show'])->name('posts.show');

Route::post('/webhooks/webmentions', [WebmentionsController::class, 'handle']);
