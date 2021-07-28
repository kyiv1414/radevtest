<?php

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


//Route::get('/schools', [\App\Http\Controllers\SchoolController::class, 'index']);

//Route::get('/schools/create', [\App\Http\Controllers\SchoolController::class, 'create']);
//Route::post('/schools/create', [\App\Http\Controllers\SchoolController::class, 'store']);
//Route::get('/schools/{school}', [\App\Http\Controllers\SchoolController::class, 'show']);

//Route::get('/schools/{school}/edit', [\App\Http\Controllers\SchoolController::class, 'edit']);
//Route::put('/schools/{school}/edit', [\App\Http\Controllers\SchoolController::class, 'update']);

//Route::delete('/schools/{school}', [\App\Http\Controllers\SchoolController::class, 'destroy']);

Route::resource('schools', 'SchoolController');

Route::resource('staff', 'StaffController');
