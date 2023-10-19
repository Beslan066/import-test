<?php

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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('homepage');
Route::get('/admin', [\App\Http\Controllers\ImportController::class, 'uploadForm'])->name('admin');
Route::post('/import', [\App\Http\Controllers\ImportController::class, 'upload'])->name('import');


