<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/student/create',[StudentController::class,'create']);
Route::post('/student/update',[StudentController::class,'update']);
Route::post('/student/list',[StudentController::class,'search']);
Route::post('/student/delete',[StudentController::class,'destroy']);
Route::post('/city',[StudentController::class,'city']);
Route::get('/state',[StudentController::class,'state']);

