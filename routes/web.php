<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('auth.login');
    Route::post('/connexion', 'login')->name('auth.con');
    Route::post('/deconnexion', 'logout')->name('auth.log');
});


Route::get('/logout', function () {
    return view('auth/logout');
});

Route::get('/register', function () {
    return view('auth/register');
});
