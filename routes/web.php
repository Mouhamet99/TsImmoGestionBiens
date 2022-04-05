<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\ProprieteController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {
    Route::resource('proprietaires', ProprietaireController::class);
    Route::resource('proprietes', ProprieteController::class);

    Route::middleware(['role:admin'])->group(function () {
        Route::put('/proprietes/{id}', [ProprieteController::class, 'delete']);
        Route::put('/proprietaires/{id}', [ProprietaireController::class, 'delete']);
    });

    Route::withoutMiddleware('auth')->group(function () {
        Route::get('/proprietes', [ProprieteController::class, 'index']);
        Route::get('/proprietaires', [ProprietaireController::class, 'index']);
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', \App\Http\Controllers\RoleController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);
});
