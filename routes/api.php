<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::get('test', function () {
    return response()->json(['message' => 'Hello World!']);
});
// Route::middleware('auth:api')->group(function () {
//     Route::get('user/resourcess', [UserController::class, 'index']);
// });
// Route::middleware('auth:api')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('', [UserController::class, 'index']);

        Route::get('/{id}', [UserController::class, 'show'])->name('user.show');

        Route::post('', [UserController::class, 'store'])->name('user.store');

        Route::put('/{id}', [UserController::class, 'update'])->name('user.update');

        Route::delete('/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    });
// });
