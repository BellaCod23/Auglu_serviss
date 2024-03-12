<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AugluController;



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



Route::get('/auglu_serviss', [AugluController::class, 'auglu_serviss']);



Route::get('/veikaliem', [AugluController::class, 'veikaliem']);



Route::get('/restoraniem', [AugluController::class, 'restoraniem']);



Route::get('/birojiem', [AugluController::class, 'birojiem']);



Route::get('/piegadatajiem', [AugluController::class, 'piegadatajiem']);






Route::get('/auglu_serviss', [AugluController::class, 'auglu_serviss']);


Route::get('/review', [AugluController::class, 'review'])->name('review');

Route::post('/review/check', [AugluController::class, 'review_check']);






