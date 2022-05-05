<?php

use App\Http\Controllers\Admin\BeneficiariesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
})->middleware('auth');

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
});
//Authenticated Middleware


Route::view('/testDashboard', 'auth.dashboard');
Route::view('/testRegistration-form', 'auth.registration-form', ['status' => null, 'message' => null]);
Route::view('/testTracking', 'auth.tracking');
Route::view('/testBeneficiaries', 'auth.beneficiaries');

Route::post('/registration-form', [RegistrationController::class, 'Registration']);
Route::get('/testingDashboard', [DashboardController::class, 'Dashboard']);
Route::get('/testingBeneficiaries', [BeneficiariesController::class, 'Beneficiaries']);
Route::get('/testingSitio/{sitio}', [DashboardController::class, 'SitioDashboard']);
Route::get('/testingStatusClass/{class}', [DashboardController::class, 'ClassDashboard']);
Route::get('/view-beneficiaries/{id}', [BeneficiariesController::class, 'ViewBeneficiaries']);
Route::get('/modify-beneficiares/{id}', [BeneficiariesController::class, 'ViewModifyBeneficiaries']);
Route::patch('/update-beneficiaries/{id}', [BeneficiariesController::class, 'UpdateModifyBeneficiaries']);
Route::any('/delete-beneficiaries/{id}', [BeneficiariesController::class, 'DeleteBeneficiaries']);