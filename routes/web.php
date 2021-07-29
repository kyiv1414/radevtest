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


Route::redirect('/', '/schools', 301)->middleware('auth');


Route::resource('schools', 'SchoolController')->middleware('auth');

Route::resource('staff', 'StaffController')->middleware('auth');

Route::get('login', [\App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('post-login', [\App\Http\Controllers\AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [\App\Http\Controllers\AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [\App\Http\Controllers\AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
