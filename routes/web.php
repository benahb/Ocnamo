<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;
use App\Models\Contact;
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



Route::get('/', [MainController::class, 'accueil'])->name('main.accueil');


Route::get('/menu', [MainController::class, 'menu'])->name('main.menu');

Route::get('/apropos', [MainController::class, 'apropos'])->name('main.apropos');


Route::get('/reservation', [MainController::class, 'reservation'])->name('main.reservation');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'contactSend'])->name('contactSend');



Route::get('/cartemenu', [MainController::class, 'cartemenu'])->name('main.cartemenu');
