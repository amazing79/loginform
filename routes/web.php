<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/register', [MainController::class, 'register'])->name('main.register');
Route::post('/dashboard', [MainController::class, 'dashboard'])->name('main.dashboard');
Route::post('/register/add', [MainController::class, 'add'])->name('main.register.add');

