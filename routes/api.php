<?php

use App\Http\Api\Controllers\ProductWordPressLicenseController;
use App\Http\Api\Controllers\ProductWordPressUpdateController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('products/{product}/wordpress/check-update', ProductWordPressUpdateController::class);
    Route::post('products/{product}/wordpress/validate-license', [ProductWordPressLicenseController::class, 'check']);
    Route::post('products/{product}/wordpress/activate-license', [ProductWordPressLicenseController::class, 'activate']);
    Route::post('products/{product}/wordpress/deactivate-license', [ProductWordPressLicenseController::class, 'deactivate']);
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
