<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Specialiste\AppointmentController;
use App\Http\Controllers\Specialiste\ConsultationController;
use App\Http\Controllers\Specialiste\DashboardController;
use App\Http\Controllers\Specialiste\PatientController;
use App\Http\Controllers\User\EspaceController;
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

Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
})->name('home.index');

Route::get('home', function() {
    return view('welcome');
});

Route::get('/services', function(){
    return view('services');
} )->name('services');

Route::get('/contact', function() {
    return view('contact');
} )->name('contact');

// Auth User
Route::get('user/espace', [EspaceController::class, 'index'])->name('user.espace');


//  Auth Partials

// Specialistes
// Route::get('specialists/dashboard', function() {
//     return view('specialiste.dashboard');
// })->name('specialiste.index')->middleware('right.medical');

Route::get('specialists/dashboard', [DashboardController::class, 'index'])->name('specialiste.index')->middleware('right.medical');


// Rendez Ressource
Route::get('specialists/rendez-vous', [AppointmentController::class, 'index'])->name('specialiste.rendez-vous.index')->middleware('right.medical');
Route::post('specialiste/rendez-vous/making', [AppointmentController::class, 'store'])->name('specialiste.rendez-vous.making')->middleware('right.medical');

Route::get('specialists/done', function() {
    return view('specialiste.rendez-vous.done');
})->name('specialiste.rendez-vous.done');


// Consultation Ressource
Route::get('/specialiste/consultation/liste/patients', [ConsultationController::class, 'index'])->name('specialiste.consultation.index')->middleware('right.medical');

Route::get('specialiste/consultation/add/patients', function(){
    return view('specialiste.consultation.newPatients');
})->name('specialiste.add.consultation');

Route::get('specialiste/consultation/detail/consultation/{id}', [ConsultationController::class, 'show'])->name('specialiste.detail.consultation')->middleware('right.medical');
Route::post('specialiste/consulte/patient', [ConsultationController::class, 'store'])->name('specialiste.consulte.patient')->middleware('right.medical');



// Patient Ressources
Route::get('/specialiste/patients/liste', [PatientController::class, 'index'])->name('specialiste.liste.patients')->middleware('right.medical');


Route::get('/specialiste/patients/detail/{id}',[PatientController::class, 'show'])->name('specialiste.details.patients')->middleware('right.medical');

Route::get('specialiste/add/patient', function() {
    return view('specialiste.patient.addPatient');
})->name('specialiste.add.patient')->middleware('right.medical');

// Add Patient
Route::post('ajouter/patient', [PatientController::class, 'store'])->name('Add.Patient');
// End Patient Ressources

Route::get('/specialiste/facture/', function() {
    return view('specialiste.facture.history');
})->name('specialiste.facure');


// Error Logiques
// Route::get('')

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
