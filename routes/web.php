<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
 return view('welcome');
});

Route::get('/dashboard', function () {
 return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
 Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
 Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
 Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(PatientController::class)->group(function () {
 Route::get('/nuevo-paciente', [PatientController::class, 'create'])->name('patient.create');
 Route::post('/nuevo-paciente', [PatientController::class, 'store'])->name('patient.store');

 /* Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');

Route::get('/patients/{patient}', [PatientController::class, 'show'])->name('patients.show');
Route::get('/patients/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit');
Route::patch('/patients/{patient}', [PatientController::class, 'update'])->name('patients.update');
Route::delete('/patients/{patient}', [PatientController::class, 'destroy'])->name('patients.destroy'); */
});

require __DIR__ . '/auth.php';