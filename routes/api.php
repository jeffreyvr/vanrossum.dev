<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\LicensesController;
use App\Http\Controllers\Api\WordPressPluginsController;

Route::get('/wordpress/plugins/{slug}', [WordPressPluginsController::class, 'show']);
Route::get('/wordpress/plugins/{slug}/download.zip', [WordPressPluginsController::class, 'download'])->name('wordpress.plugin.download');
Route::post('/licenses/activate', [LicensesController::class, 'activate']);
Route::post('/licenses/deactivate', [LicensesController::class, 'deactivate']);
Route::post('/licenses/validate', [LicensesController::class, 'check']);
