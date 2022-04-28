<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyudaTController;
use App\Http\Controllers\PymesController;
use App\Http\Controllers\EdaseController;

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

Route::get('/ayudat', [AyudaTController::class, 'index'])->name('ayudat.index');
Route::get('/pymes', [PymesController::class, 'index'])->name('pymes.index');
Route::get('/edase', [EdaseController::class, 'index'])->name('edase.index');

Route::post('/previewayudat', [AyudaTController::class, 'preview'])->name('ayudat.preview');
Route::post('/pymes/preview', [PymesController::class, 'preview'])->name('pymes.preview');
Route::post('/edase/preview', [EdaseController::class, 'preview'])->name('edase.preview');
