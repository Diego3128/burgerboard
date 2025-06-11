<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/logout', [AuthController::class, 'logout']);

    // change order's state
    Route::put('/orders/state', [OrderController::class, 'completeOrder']);

    Route::apiResource('/orders', OrderController::class);


    Route::put('/products/toggle', [ProductController::class, 'toggleAvailability']);

    Route::apiResource('/products', ProductController::class);
});


Route::apiResource('/categories', CategoryController::class);


Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);