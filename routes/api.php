<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerReviewController;
use App\Http\Controllers\ZwaaraServiceController;
use App\Http\Controllers\ServiceAddressController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ConsultingListController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HeaderBannerController;
use App\Http\Controllers\LaborotaryServicesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/header-banners', [HeaderBannerController::class, 'index']);

Route::get('/customer-reviews', [CustomerReviewController::class, 'index']);

Route::get('/zwaara-services', [ZwaaraServiceController::class, 'index']);

Route::get('/service-addresses/{id}', [ServiceAddressController::class, 'show']);

Route::get('/faqs', [FAQController::class, 'index']);
Route::post('/subscribe', [SubscriptionController::class, 'store']);
Route::get('/subscribers', [SubscriptionController::class, 'index']);
Route::get('/consulting-list', [ConsultingListController::class, 'index']);
Route::get('/doctors', [DoctorController::class, 'index']);
Route::get('/laborotaryservices', [LaborotaryServicesController::class, 'index']);
