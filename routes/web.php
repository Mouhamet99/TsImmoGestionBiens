<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProprietaireController;
use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::resource('proprietaires', ProprietaireController::class);
    Route::resource('proprietes', ProprieteController::class);

    Route::middleware(['role:admin', 'role:superadmin'])->group(function () {
        Route::put('/proprietes/{id}', [ProprieteController::class, 'delete']);
        Route::put('/proprietaires/{id}', [ProprietaireController::class, 'delete']);
    });

    Route::withoutMiddleware('auth')->group(function () {
        Route::get('/proprietes', [ProprieteController::class, 'index']);
        Route::get('/proprietaires', [ProprietaireController::class, 'index']);
    });
});

//Route::middleware(['auth'])->group(function () {
    Route::resource('roles', RoleController::class)->middleware(['role:superadmin']);
    Route::resource('users', UserController::class);
//});
