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

Route::get('/about', function(){
    return view('about');
} )->name('aboutUs');

Route::get('/contact', function() {
    return view('contact');
} )->name('contact');

//  Auth Partials

// Specialistes
Route::get('specialists/dashboard', function() {
    return view('specialiste.dashboardOther');
})->name('specialiste.index');

Route::get('specialists/consultations', function() {
    return view('specialiste.consultations.all');
})->name('specialiste.consultations.index');

Route::get('specialists/done', function() {
    return view('specialiste.consultations.done');
})->name('specialiste.consultations.done');


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
