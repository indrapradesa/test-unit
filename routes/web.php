<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CprospectController;
use App\Http\Controllers\CustClosingController;
use App\Http\Controllers\CustomerClosingController;
use App\Http\Controllers\CustomerProspekController;
use App\Http\Controllers\SebaranBrosurController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('/closing', CustClosingController::class);

// Route::get('/', function () {
//     return view('tes.index');
// });

Route::get('/', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard/profile', function() {
        return view('d_sales.profile.index');
    });

    Route::get('/dashboard', function() {
        return view('d_sales.index');
    });

    Route::resource('/dashboard/prospek', CustomerProspekController::class);
    Route::resource('/dashboard/closing', CustomerClosingController::class);
    Route::get('/dashboard/closing/{custclosing}', [CustomerClosingController::class, 'show'])->name('custclosing.show');
    Route::resource('/dashboard/brosur', SebaranBrosurController::class);
    // Route::resource('/dashboard/prospect', CprospectController::class);

    Route::get('/dashboard/profile/komisi', function(){
        return view('d_sales.profile.komis');
    });

    Route::get('/dashboard/profile/gantipass', function(){
        return view('d_sales.profile.updatepass');
    });

});
