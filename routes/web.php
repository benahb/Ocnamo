<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use App\Models\Reservation;

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

// MainController

Route::get('/', [MainController::class, 'accueil'])->name('main.accueil');

Route::get('/menu', [MainController::class, 'menu'])->name('main.menu');

Route::get('/apropos', [MainController::class, 'apropos'])->name('main.apropos');

Route::get('/cartemenu', [MainController::class, 'cartemenu'])->name('main.cartemenu');

Route::get('/plat/{id}', [MainController::class, 'plat'])->name('main.plat');

// ContactController

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::post('/formcreate', [ContactController::class, 'formcreate'])->name('formcreate');

// ReservationController

Route::get('/reservation', [ReservationController::class, 'reservation'])->name('reservation');

Route::post('/dataInsert', [ReservationController::class, 'DataInsert'])->name('dataInsert');


