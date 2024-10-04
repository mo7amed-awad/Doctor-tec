<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\DoctorDetailsController;
use Illuminate\Support\Facades\Mail;

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

require __DIR__.'/auth.php';
require __DIR__.'/front.php';

Route::get('/', [DoctorDetailsController::class, 'show'])->name('home');


Route::controller(DoctorDetailsController::class)->prefix('doctordetails')->group(function(){
    Route::post('/search', 'search')->name('doctor.search');
    Route::get('/doctorDetails/{id}', [DoctorDetailsController::class, 'doctorDetails'])->name('doctor.doctorDetails');
    Route::post('/booking', [DoctorDetailsController::class, 'booking'])->name('doctor.booking');

});

Route::get('/wel', function () {
    return view('welcome');
})->name('wel');






