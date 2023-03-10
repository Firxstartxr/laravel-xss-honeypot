<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

Route::get('/challenge-5', [HomeController::class, 'challenge5'])->name('challenge-5');

Route::post('/challenge-5', [ChallengeController::class, 'challenge5']);

Route::get(env('ADMIN_REDIRECT'), [HomeController::class, 'admin'])->name('admin')->middleware('admin');

Route::get(env('ADMIN_REDIRECT'), [UserController::class, 'index'])->middleware('admin');

Route::patch('/users/{user}', [UserController::class, 'admin'])->middleware('admin');
