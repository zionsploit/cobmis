<?php

use App\Http\Controllers\Admin\BeneficiariesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
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

//Guest Middleware 
Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    //Login Route
    Route::view('/login', 'guests.login', ['status' => null])->name('login');
    Route::post('/login', [Controller::class, 'login']);

    //Register Route
    Route::view('/register', 'guests.register', ['status' => null])->name('register');
    Route::post('/register', [Controller::class, 'registration']);
});
//Guest Middleware

//Authenticated Middleware
Route::middleware([Authenticate::class])->group(function () {
    Route::post('/registration-form', [RegistrationController::class, 'Registration']);
    Route::view('/registration-form', 'auth.registration-form', ['status' => null, 'message' => null])->name('registrationForm');
    Route::get('/dashboard', [DashboardController::class, 'Dashboard'])->name('dashboard');
    Route::get('/beneficiaries', [BeneficiariesController::class, 'Beneficiaries'])->name('beneficiaries');
    Route::view('/tracking', 'auth.tracking')->name('tracking');
    Route::get('/sitio/{sitio}', [DashboardController::class, 'SitioDashboard'])->name('sitio');
    Route::get('/status-class/{class}', [DashboardController::class, 'ClassDashboard'])->name('statusClass');
    Route::get('/view-beneficiaries/{id}', [BeneficiariesController::class, 'ViewBeneficiaries'])->name('viewBeneficiaries');
    Route::get('/modify-beneficiares/{id}', [BeneficiariesController::class, 'ViewModifyBeneficiaries'])->name('modifyBeneficiares');
    Route::patch('/update-beneficiaries/{id}', [BeneficiariesController::class, 'UpdateModifyBeneficiaries'])->name('updateBeneficiaries');
    Route::any('/delete-beneficiaries/{id}', [BeneficiariesController::class, 'DeleteBeneficiaries'])->name('deleteBeneficiaries');
    Route::get('/logout', [Controller::class, 'logout'])->name('logout');
    Route::get('/reports', [ReportController::class, 'Reports'])->name('reports');
    Route::get('/settings', function () {
        return view('auth.settings');
    })->name('settings');
    Route::get('/print-resident', [ReportController::class, 'ResidentReports'])->name('resident-reports');
});

//Authenticated Middleware
// Route::view('/reports', 'auth.reports');
// Route::view('/testDashboard', 'auth.dashboard');
// Route::view('/testRegistration-form', 'auth.registration-form', ['status' => null, 'message' => null]);
// Route::view('/testBeneficiaries', 'auth.beneficiaries');