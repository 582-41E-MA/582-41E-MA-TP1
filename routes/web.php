<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciceController;

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

//projet test templte
Route::get('/index', [ExerciceController::class, 'index']);
Route::get('/contact', [ExerciceController::class, 'contact']);
Route::get('/projects', [ExerciceController::class, 'projects']);
Route::get('/resume', [ExerciceController::class, 'resume']);


//////////////////////////////////////
Route::get('/', [ExerciceController::class, 'list']);
Route::get('/show', [ExerciceController::class, 'show']);
Route::get('/pay', [ExerciceController::class, 'pay']);

/**placeholder to test stripe, not sure whether it works*/
Route::post('/pay', [ExerciceController::class, 'stripePost'])->name('pay.checkout');