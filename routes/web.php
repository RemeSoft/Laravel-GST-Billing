<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, 'index']);

// parties route
Route::get('/add-party', [PartyController::class, 'add'])->name('add-party');
Route::post('/create-party', [PartyController::class, 'create'])->name('create-party');
Route::get('/manage-party', [PartyController::class, 'manage'])->name('manage-party');
Route::get('/edit-party/{id}', [PartyController::class, 'edit'])->name('edit-party');
Route::put('/update-party/{id}', [PartyController::class, 'update'])->name('update-party');
Route::delete('/delete-party/{party}', [PartyController::class, 'delete'])->name('delete-party');

// billing route
Route::get('/create-bill', [BillingController::class, 'create'])->name('create-bill');
Route::get('/manage-bill', [BillingController::class, 'manage'])->name('manage-bill');
Route::get('/print-bill/{id}', [BillingController::class, 'print'])->name('print-bill');
Route::post('/create-gst-bill', [BillingController::class, 'createGstBill'])->name('create-gst-bill');

// soft delete route
Route::get('/delete/{table}{id}', [DashboardController::class, 'delete'])->name('delete');


// resource controller
Route::resource('/vendor-invoice', UserController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
