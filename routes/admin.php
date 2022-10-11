<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PlanController;
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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth:sanctum', 'authAdmin']], function () { 
    /***** Dashboard *****/
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

    /***** Plans CRUD *****/
    Route::get('/plan', [PlanController::class, 'index'])->name('plan');
    Route::post('/plan-store', [PlanController::class, 'planStore'])->name('plan.store');
    Route::get('/plane-edit/{id}', [PlanController::class, 'planEdit'])->name('plan.edit');
    Route::post('/plane-update/{id}', [PlanController::class, 'planUpdate'])->name('plan.update');
    Route::post('/plane-delete/{id}', [PlanController::class, 'planDelete'])->name('plan.delete');
});