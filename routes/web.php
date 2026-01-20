<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WebmentionsController;
use Illuminate\Support\Facades\Route;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

//Auth::routes(['register' => false]);

Route::get('/', function () {
    return redirect(app()->getLocale());
});

/**
 * All routes that require a locale prefix.
 */
Route::multilingual('/', [HomeController::class, 'index'])->name('home');

Route::multilingual('about', function () {
    return view('pages.about.index');
})->name('about');

Route::multilingual('/freelance-wordpress-developer', function () {
    return view('pages.wordpress.'.app()->getLocale().'.index');
})->name('wordpress');

Route::multilingual('/freelance-laravel-developer', function () {
    return view('pages.laravel.'.app()->getLocale().'.index');
})->name('laravel');

Route::get('/docs/{project}/{version?}', [DocumentationController::class, 'index'])->name('docs');
Route::get('/docs/{project}/{version?}/{page?}', [DocumentationController::class, 'show'])->name('docs.show');

Route::multilingual('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::multilingual('/privacy', function () {
    return view('pages.privacy.index');
})->name('privacy');

Route::get('/donate', function () {
    return redirect()->to('https://github.com/sponsors/jeffreyvr');
})->name('donate');

Route::multilingual('projects', [ProjectController::class, 'index'])->name('projects');

Route::get('products', [ProductController::class, 'index'])->name('products');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/blog', [PostController::class, 'index'])->name('posts');
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/tagged/{tag_slug}', [PostController::class, 'tagged'])->name('posts.tagged');
Route::get('/{postSlug}', [PostController::class, 'show'])->name('posts.show');

Route::post('/webhooks/webmentions', [WebmentionsController::class, 'handle']);

Route::get('media/{mediaItem}/download.zip', function (Media $mediaItem) {
    return response()->streamDownload(function () use ($mediaItem) {
        echo $mediaItem->stream()->getContents();
    }, $mediaItem->file_name);
})->name('download')->middleware('signed.or.licensekeyed');
