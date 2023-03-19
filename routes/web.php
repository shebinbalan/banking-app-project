<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/depositlists', [App\Http\Controllers\DepositController::class,'list']);
Route::get('/add-deposits', [App\Http\Controllers\DepositController::class,'add']);
Route::post('/insert-deposits', [App\Http\Controllers\DepositController::class,'insert']);

Route::get('/withdrawlists', [App\Http\Controllers\WithDrawController::class,'list']);
Route::get('/withdraws', [App\Http\Controllers\WithDrawController::class,'add']);
Route::post('/insert-withdraws', [App\Http\Controllers\WithDrawController::class,'insert']);

Route::get('/transferlists', [App\Http\Controllers\TranferController::class,'list']);
Route::get('/transfers', [App\Http\Controllers\TranferController::class,'add']);
Route::post('/insert-transfers', [App\Http\Controllers\TranferController::class,'insert']);

Route::get('/statements', [App\Http\Controllers\StatementController::class,'add']);
