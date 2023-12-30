<?php

use App\Http\Controllers\LocationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get( 'division', [LocationController::class, 'getDivision'] )->name('division');
Route::get( 'districts/{id}', [LocationController::class, 'getDistricts'] )->name('getDistricts');
Route::get( 'sub_districts/{id}', [LocationController::class, 'getSubDistricts'] )->name('getSubDistricts');
Route::get( 'union/{id}', [LocationController::class, 'getUnion'] )->name('getUnion');
Route::get( 'center/{id}', [LocationController::class, 'getCenter'] )->name('getCenter');
