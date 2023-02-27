<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\SetLocale;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('{locale}/categories', [CategoryController::class, 'index'])->middleware(\App\Http\Middleware\SetLocale::class);
Route::get('{locale}/categories/{category}', [CategoryController::class, 'show'])->middleware(\App\Http\Middleware\SetLocale::class)->where('category', '[0-9]+');;
Route::post('categories', [CategoryController::class, 'store']);
Route::put('categories/{category}', [CategoryController::class, 'update'])->where('category', '[0-9]+');
Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->where('category', '[0-9]+');







