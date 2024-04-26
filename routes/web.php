<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
})->name('home.index');

Route::get('/services', function(){
    return view('services');
} )->name('services');

Route::get('/contact', function() {
    return view('contact');
} )->name('contact');

// Auth User
Route::get('user/espace', function(){
    return view('user.espace');
})->name('user.espace');


//  Auth Partials

// Specialistes
Route::get('specialists/dashboard', function() {
    return view('specialiste.dashboard');
})->name('specialiste.index');

Route::get('specialists/rendez-vous', function() {
    return view('specialiste.rendez-vous.all');
})->name('specialiste.rendez-vous.index');

Route::get('specialists/done', function() {
    return view('specialiste.rendez-vous.done');
})->name('specialiste.rendez-vous.done');

Route::get('/specialiste/consultation/liste/patients', function() {
    return view('specialiste.consultation.listePatients');
})->name('specialiste.consultation.index');

Route::get('/specialiste/patients/liste', function() {
    return view('specialiste.patient.allPatient');
})->name('specialiste.liste.patients');

Route::get('/specialiste/patients/detail', function() {
    return view('specialiste.patient.details');
})->name('specialiste.details.patients');

Route::get('specialiste/add/patient', function() {
    return view('specialiste.patient.addPatient');
})->name('specialiste.add.patient');


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
