<?php

use App\Http\Controllers\MainController;
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



Route::get('/', [MainController::class, 'accueilController'])->name
 ('main.accueil');


 Route::get('/menu', [MainController::class, 'menuController'])->name
 ('main.menu');

 Route::get('/apropos', [MainController::class, 'aproposController'])->name
 ('main.apropos');

 Route::get('/expert', [MainController::class, 'expertController'])->name
 ('main.expert');

 Route::get('/reservation', [MainController::class, 'reservationController'])->name
 ('main.reservation');

 Route::get('/contact', [MainController::class, 'contactController'])->name
 ('main.contact');


 Route::get('/cartemenu', [MainController::class, 'cartemenuController'])->name
 ('main.cartemenu');


