<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
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

Route::get('/verify-email', [HomeController::class, 'verifyEmail'])->name('verifyEmail');

Route::group(['middleware' => ['auth:sanctum', 'verifirdUser']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about-us', [HomeController::class, 'about'])->name('about');
    Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
});
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth:sanctum', 'verifirdUser']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    /**** Plan Part *****/
    Route::get('/plan', [PlanController::class, 'index'])->name('plan');
    Route::post('/plan-submit', [PlanController::class, 'planSubmit'])->name('plan.submit');

    /***** PayPal Payment *****/
    Route::get('/pay-with-paypal', [PlanController::class, 'payment'])->name('payment.paypal');
    Route::get('/paypal-cancel', [PlanController::class, 'cancel'])->name('payment.cancel');
    Route::get('/payment-success', [PlanController::class, 'success'])->name('payment.success');

    /***** PayPal Payment *****/
    Route::get('/stripe', [PlanController::class, 'stripe'])->name('payment.stripe');
    Route::post('/pay-with-stripe', [PlanController::class, 'stripePost'])->name('stripe.post');
});
