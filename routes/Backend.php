<?php

use App\Http\Controllers\Dashboard\ShowUserController;
use App\Http\Controllers\Dashboard\ShowDoctorController;
use App\Http\Controllers\Dashboard\ShowPharmacistController;
use Illuminate\Support\Facades\Route;

 



Route::get('/dash', function () {
    return view('Dashboard.Admin.empty');
})->name('dash');

Route::get('users',[ShowUserController::class,'index'])->name('users');
Route::get('waited_doctor',[ShowDoctorController::class,'waited_doctors'])->name('waited_doctors');
Route::get('show_doctor/{id}',[ShowDoctorController::class,'show_doctor'])->name('show_doctor');
Route::post('acceptance_doctor/{id}',[ShowDoctorController::class,'acceptance_doctor'])->name('acceptance_doctor');
Route::post('refues_doctor/{id}',[ShowDoctorController::class,'refues_doctor'])->name('refues_doctor');
Route::get('acceptable_doctors',[ShowDoctorController::class,'acceptable_doctors'])->name('acceptable_doctors');


Route::get('waited_pharmacists',[ShowPharmacistController::class,'waited_pharmacists'])->name('waited_pharmacists');
Route::get('show_pharmacist/{id}',[ShowPharmacistController::class,'show_pharmacist'])->name('show_pharmacist');
Route::post('acceptance_pharmacist/{id}',[ShowPharmacistController::class,'acceptance_pharmacist'])->name('acceptance_pharmacist');
Route::post('refues_pharmacist/{id}',[ShowPharmacistController::class,'refues_pharmacist'])->name('refues_pharmacist');
Route::get('acceptable_pharmacists',[ShowPharmacistController::class,'acceptable_pharmacists'])->name('acceptable_pharmacists');




