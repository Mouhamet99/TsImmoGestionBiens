<?php

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

    Route::withoutMiddleware('auth')->group(function () {
        Route::get('/proprietes', [ProprieteController::class, 'index']);
        Route::get('/proprietaires', [ProprietaireController::class, 'index']);
    });
});
