<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name("home");

Route::post('/guest', [GuestController::class, 'index'])->name("guest");
Route::post('/employee-login', [EmployeeController::class, 'index'])->name("loginEmployee");

Route::get('/guest', [GuestController::class, "index"])->name('homeGuest');
Route::get('/menu', [GuestController::class, "menu"])->name('menu');
Route::get('/reserve', [GuestController::class, "reserve"])->name('reserve');