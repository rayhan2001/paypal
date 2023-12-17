<?php

use App\Http\Controllers\PaypalController;
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

Route::post('paypal', [PaypalController::class, 'paypal'])->name('paypal');
Route::get('success', [PaypalController::class, 'success'])->name('success');
Route::get('cancel', [PaypalController::class, 'cancel'])->name('cancel');
