<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\Users\RegisterController;
use App\Http\Controllers\Api\Users\SessionsController;

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

Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::post('/signin', [SessionsController::class, 'store'])->name('signin');
Route::delete('/signout', [SessionsController::class, 'destroy'])->name('signout');

Route::middleware('auth:api')->group(function () {
    Route::resource('contacts', ContactController::class);
});
