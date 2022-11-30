<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::post('/profile', [HomeController::class, 'upload'])->name('profile');

Route::get('/challenge-1', [HomeController::class, 'challenge1'])->name('challenge-1');

Route::post('/challenge-1', [ChallengeController::class, 'challenge1']);

Route::get('/challenge-2', [HomeController::class, 'challenge2'])->name('challenge-2');

Route::post('/challenge-2', [ChallengeController::class, 'challenge2']);

Route::get('/challenge-3', [HomeController::class, 'challenge3'])->name('challenge-3');

Route::post('/challenge-3', [ChallengeController::class, 'challenge3']);

Route::get('/challenge-4', [HomeController::class, 'challenge4'])->name('challenge-4');

Route::post('/challenge-4', [ChallengeController::class, 'challenge4']);
