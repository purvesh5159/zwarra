<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerReviewController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\OurServicesController;
use App\Http\Controllers\SubServicesController;
use App\Http\Controllers\MedicalSpecialtiesController;
use App\Http\Controllers\SubMedicalSpecialtiesController;
use App\Http\Controllers\AllDoctorsController;
use App\Http\Controllers\DoctorPositionsController;
use App\Http\Controllers\JoinDoctorRequestController;
use App\Http\Controllers\PatientRegistrationController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\BankingsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ComplaintsController;

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
Route::get('/customer-reviews', [CustomerReviewController::class, 'index']);

 // Route::get('/serviceproviders', function () {
 //     return view('layouts.serviceprovider');
 // });

// Route::get('/addnewserviceprovider', function () {
//     return view('layouts.addnewserviceprovider');
// });

Route::resource('serviceproviders', ServiceProviderController::class);
Route::resource('services', ServicesController::class);
Route::resource('ourservices', OurServicesController::class);
Route::resource('subservices', SubServicesController::class);
Route::resource('medicalspecialties', MedicalSpecialtiesController::class);
Route::resource('submedicalspecialties', SubMedicalSpecialtiesController::class);
Route::resource('alldoctors', AllDoctorsController::class);
Route::resource('doctorpositions', DoctorPositionsController::class);
Route::resource('doctorrequest', JoinDoctorRequestController::class);
Route::resource('patientregistration', PatientRegistrationController::class);
Route::resource('users', UsersController::class);
Route::resource('offers', OffersController::class);
Route::resource('bookings', BookingsController::class);
Route::resource('bankings', BankingsController::class);
Route::resource('contacts', ContactsController::class);
Route::resource('complaints', ComplaintsController::class);



