<?php

use App\Http\Controllers\EstudantesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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



Route::get('registar', [UsersController::class, 'register']);
Route::post('registar', [UsersController::class, 'store_register']);

Route::get('login', [SessionsController::class, 'login'])
    ->name('login');


Route::post('authenticate', [SessionsController::class, 'authenticate']);


Route::get('logout', [SessionsController::class, 'logout'])
    ->name('logout');

Route::middleware('auth')->group(function () {

    Route::prefix('estudantes')->group(function () {
        Route::get('/novo', [EstudantesController::class, 'create']);
        Route::post('/store', [EstudantesController::class, 'store']);

        Route::get('/', [EstudantesController::class, 'index']);
    });

    Route::get('/inicio', [PagesController::class, 'home'])
        ->name('home');
});

Route::get('/', function () {
    return redirect()->route(Auth::check() ? 'home' : 'login');
});
