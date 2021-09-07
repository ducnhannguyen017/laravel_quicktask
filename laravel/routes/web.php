<?php

use App\Http\Controllers\LangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/lang/{language}', [LangController::class, 'setLanguage']);

Route::group(['prefix' => '/project', 'middleware' => 'auth'], function () {
    Route::get('', [ProjectController::class, 'index']);

    Route::get('/create', [ProjectController::class, 'create']);
    Route::post('/store', [ProjectController::class, 'store']);

    Route::get('/edit', [ProjectController::class, 'edit']);
    Route::post('/update', [ProjectController::class, 'update']);

    Route::get('/destroy/{id}', [ProjectController::class, 'destroy']);
});
