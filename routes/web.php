<?php


use App\Http\Controllers\AdminReservationController;
use App\Http\Controllers\ProfileController;
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

//*****MainController*****//

Route::get('/', [MainController::class, 'accueil'])->name('main.accueil');

Route::get('/menu', [MainController::class, 'menu'])->name('main.menu');

Route::get('/apropos', [MainController::class, 'apropos'])->name('main.apropos');

Route::get('/cartemenu', [MainController::class, 'cartemenu'])->name('main.cartemenu');

Route::get('/plat/{id}', [MainController::class, 'plat'])->name('main.plat');

Route::get('/etiquette/{id}', [MainController::class, 'etiquette'])->name('main.etiquette');

    // ******photoAMbiances******//

    Route::get('/photoAmbiance', [MainController::class, 'photoAmbiance'])->name('main.photoAmbiance');
//******ContactController******//

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');



Route::post('/formcreate', [ContactController::class, 'formcreate'])->name('formcreate');

//***** ReservationController*****//

Route::get('/reservation', [ReservationController::class, 'reservation'])->name('reservation');

Route::post('/reservation', [ReservationController::class, 'reservationStore'])->name
('reservation.store');

// Route::get('/reservationIndex',[AdminReservationController::class,'reservationIndex'])->name('main.AdminReservationIndex');

// Route::get('/reservationShow/{id}', [AdminReservationController::class, 'reservationShow'])->name('main.reservationShow');



// Route::post('/dataInsert', [ReservationController::class, 'DataInsert'])->name('dataInsert');

route::get('/admin/reservation', [AdminReservationController::class, 'index'])->middleware('auth')->name('admin.reservation.index');

route::get('/admin/reservation/create', [AdminReservationController::class, 'create'])->middleware('auth')->name('admin.reservation.create');

route::post('/admin/reservation', [AdminReservationController::class, 'store'])->middleware('auth')->name('admin.reservation.store');



route::get('/admin/reservation/{id}', [AdminReservationController::class, 'show'])->middleware('auth')->name('admin.reservation.show');

route::get('/admin/reservation/{id}/edit', [AdminReservationController::class, 'edit'])->middleware('auth')->name('admin.reservation.edit');

route::put('/admin/reservation/{id}', [AdminReservationController::class, 'update'])->middleware('auth')->name('admin.reservation.update');

route::delete('/admin/reservation/{id}', [AdminReservationController::class, 'delete'])->middleware('auth')->name('admin.reservation.delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
