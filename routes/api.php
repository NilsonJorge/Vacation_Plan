<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\HolidayController;
Route::middleware("auth:api")->get("/user", function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::apiResource('holiday', HolidayController::class);
    Route::get('holiday/{id}/pdf', [HolidayController::class, 'createPDF']);
});

