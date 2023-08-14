<?php

use Illuminate\Support\Facades\Route;
// use FrontendSite\app\Http\Controllers\EmpController;
use App\Http\Controllers\EmpController;
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

Route::get('/',[EmpController::class, 'index']); 
Route::post('/home',[EmpController::class, 'store']);
Route::get('/show',[EmpController::class, 'show'])->name('showpage');
Route::get('/update/{id}',[EmpController::class, 'edit']);
Route::put('/update/{id}',[EmpController::class, 'update']);
Route::delete('/delete/{id}',[EmpController::class, 'destroy']);
 