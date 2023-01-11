<?php

use Illuminate\Http\Request;
use App\Http\Controllers\{UserSekolahController, UserAuthController};
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/v1')->group(function() {
    Route::post('/register', [UserSekolahController::class, 'getProfileSekolahById'])->name('user.register');
    Route::post('/login', [UserSekolahController::class, 'getProfileSekolahById'])->name('user.login');
    Route::get('/profile', [UserSekolahController::class, 'getProfileSekolahById'])->name('user.profile');
    Route::put('/profile', [UserSekolahController::class, 'getProfileSekolahById'])->name('user.profile.update');
    Route::put('/piagam/{id}', [UserSekolahController::class, 'getProfileSekolahById'])->name('user.piagam');

    Route::prefix('admin')->group(function() {
        Route::post('/login', [UserAuthController::class, 'getProfileSekolahById'])->name('user.login');

    });

});
