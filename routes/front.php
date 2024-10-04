<?php

use App\Http\Controllers\Auth\DoctorController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PharmacistController;
use App\Http\Middleware\CheckUserType;
use Illuminate\Support\Facades\Route;





Route::get('/patiant', [AuthenticatedSessionController::class,'index'])->middleware(['auth:web'])->name('patiant');

Route::get('/doctor',[DoctorController::class,'index'])->middleware(['auth:doctor',CheckUserType::class])->name('doctor.page');

Route::get('/pharmacist',[PharmacistController::class,'index'])->middleware(['auth:pharmacist',CheckUserType::class])->name('pharmacist.page');


Route::get('doctortoPatient',[DoctorController::class,'doctortoPatient'])->name('doctortoPatient');
Route::get('pharmacisttoPatient',[PharmacistController::class,'pharmacisttoPatient'])->name('pharmacisttoPatient');
Route::post('patientCode',[DoctorController::class,'patientCode'])->name('patientCode');
Route::post('addDiagnosis',[DoctorController::class,'addDiagnosis'])->name('addDiagnosis');
Route::post('updateTreatment',[PharmacistController::class,'updateTreatment'])->name('updateTreatment');

