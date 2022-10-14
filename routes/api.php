<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('products/{product}/wordpress-update', \App\Http\Api\Controllers\ProductWordPressUpdateController::class);
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
