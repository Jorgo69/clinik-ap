<?php

use App\Http\Controllers\Mail\CarnetMedicalGoogleController;
use App\Http\Controllers\Mail\MessageGoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Specialiste\AppointmentController;
use App\Http\Controllers\Specialiste\CarnetController;
use App\Http\Controllers\Specialiste\ConsultationController;
use App\Http\Controllers\Specialiste\DashboardController;
use App\Http\Controllers\Specialiste\PatientController;
use App\Http\Controllers\User\EspaceController;
use Illuminate\Support\Facades\Mail;
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
})->name('home.index')
->middleware('right.medical');

// Route::get('home', function() {
//     return view('welcome');
// });

Route::get('/services', function(){
    return view('services');
} )->name('services');

Route::get('/contact', function() {
    return view('contact');
} )->name('contact');

// Auth User
Route::get('user/espace', [EspaceController::class, 'index'])->name('user.espace');

Route::get('pdf', function()
{
    return view('pdf.pdf');
});
//  Auth Partials

// Specialistes
// Route::get('specialists/dashboard', function() {
//     return view('specialiste.dashboard');
// })->name('specialiste.index')->middleware('right.medical');

Route::get('specialists/dashboard', [DashboardController::class, 'index'])->name('specialiste.index')->middleware('right.medical');


// Rendez Ressource
Route::middleware(['auth','right.secretaire'])->group(function () {
    Route::get('specialists/rendez-vous', [AppointmentController::class, 'index'])->name('specialiste.rendez-vous.index');
    Route::post('specialiste/rendez-vous/making', [AppointmentController::class, 'store'])->name('specialiste.rendez-vous.making');
    Route::get('specialiste/assignation', [AppointmentController::class, 'assignationIndex'])->name('specialiste.assignation');
});

// Route::get('specialists/done', function() {
//     return view('specialiste.rendez-vous.done');
// })->name('specialiste.rendez-vous.done');

// Middleware Consultation
Route::middleware('auth')->group(function () {
// Consultation Ressource
    // liste patients
    Route::get('/specialiste/consultation/liste/patients', [ConsultationController::class, 'index'])->name('specialiste.consultation.index')->middleware('right.medical');
    // patient ayant effectue une consultation
    Route::get('specialiste/consultation/add/patients', [ConsultationController::class, 'allPatient'])->name('specialiste.add.consultation');
    // a propos d'une consultation
    Route::get('specialiste/une/consultation/detail/{id}', [ConsultationController::class, 'aPatient'])->name('specialiste.a.detail.consultation');
    // page de prise de note pour consultation avec toutes les infos concernants le patient
    Route::get('specialiste/consultation/detail/consultation/{id}', [ConsultationController::class, 'show'])->name('specialiste.detail.consultation')->middleware('right.medical');
    // page de prise de note pour consultation avec prise de infos medicales du patients
    Route::post('specialiste/consulte/patient', [ConsultationController::class, 'store'])->name('specialiste.consulte.patient')->middleware('right.medical');

});

// Route::get('specialiste/consultation/add/patients', function(){
//     return view('specialiste.consultation.newPatients');
// })->name('specialiste.add.consultation');





// Middleware patient
Route::middleware('auth')->group(function () {
    // Patient Ressources
Route::get('/specialiste/patients/liste', [PatientController::class, 'index'])->name('specialiste.liste.patients');
Route::get('/specialiste/patients/detail/{id}',[PatientController::class, 'show'])->name('specialiste.details.patients');

});



Route::get('specialiste/add/patient', function() {
    return view('specialiste.patient.addPatient');
})->name('specialiste.add.patient');

// Add Patient
Route::post('ajouter/patient', [PatientController::class, 'store'])->name('Add.Patient');
// End Patient Ressources

Route::get('/specialiste/facture/', function() {
    return view('specialiste.facture.history');
})->name('specialiste.facure');

Route::get('specialiste/carnet/index/{id}', [CarnetController::class, 'show'])->name('carnet.index');

// Message Google Ressource
Route::get("message", [MessageGoogleController::class, 'formMessageGoogle']);
Route::post("message", [MessageGoogleController::class,'sendMessageGoogle'])->name('send.message.google');

// Test d'envoi de mail
Route::get('/test-email', function () {
    try{
    $user = App\Models\User::first();
    Mail::raw('Juste pour  le test tu valides?', function ($message) use ($user) {
        $message->to('meufcool0@gmail.com')
                ->subject('Quel coup?');
    });
} catch (\Exception $e) {
    return back()->with('error', 'Error sending email: ' . $e->getMessage());
}

    return 'Email sent';
});
// send carnet Ressource
Route::get('send.carnet.mail/{id}', [CarnetMedicalGoogleController::class, 'index'])->name('send.mail.carnet');

// Error Logiques
// Route::get('')

Route::get('/dashboard',[DashboardController::class, 'Welcome'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
