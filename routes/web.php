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

//////////////////////////////////////
Route::get('/', [ExerciceController::class, 'list'])->name('list');
Route::get('/show', [ExerciceController::class, 'show'])->name('show');
Route::get('/pay', [ExerciceController::class, 'pay'])->name('pay');



// route pour le update de la liste lorsque achat
Route::get('/checkout', [ExerciceController::class, 'checkout'])->name('checkout');


/**placeholder to test stripe, not sure whether it works*/
Route::post('/pay/{:id}', [ExerciceController::class, 'stripePost'])->name('pay.checkout');