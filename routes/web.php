<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::get('/create', [\App\Http\Controllers\HomeController::class, 'Sample']);
Route::get('/edit/{id}', [\App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/insertdata', [\App\Http\Controllers\HomeController::class, 'insertdata']);
Route::get('/update', [\App\Http\Controllers\HomeController::class, 'updatedata']);
Route::get('/view', [\App\Http\Controllers\HomeController::class, 'view']);
Route::get('/nview', [\App\Http\Controllers\HomeController::class, 'newview']);
Route::get('/net', [\App\Http\Controllers\HomeController::class, 'nets']);
Route::get('/real', [\App\Http\Controllers\HomeController::class, 'real']);
Route::post('save',[\App\Http\Controllers\SaveController::class,'save_stu']);