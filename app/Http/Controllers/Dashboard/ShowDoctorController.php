<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class ShowDoctorController extends Controller
{
    public function waited_doctors(){
        $waited_doctors = Doctor::where("status","notyet")->get();
        return view("Dashboard.Admin.Doctor.waited_doctors",compact("waited_doctors"));
    }

    public function acceptable_doctors(){
        $acceptable_doctors = Doctor::where("status","acceptable")->get();
        return view("Dashboard.Admin.Doctor.acceptable_doctors",compact("acceptable_doctors"));
    }

    public function show_doctor(string $id){
        $doctor=Doctor::findOrfail($id);
        return view("Dashboard.Admin.Doctor.show_doctor",compact("doctor"));
    }

    public function acceptance_doctor(string $id){
        $doctor=Doctor::findOrfail($id);
        $doctor->status= "acceptable";
        $doctor->save();
        return redirect()->route('dash')->with("message","تم قبول الدكتور بنجاح");
    }
    
    public function refues_doctor(string $id){
        $doctor=Doctor::findOrfail($id);
        $doctor->status= "refused";
        $doctor->save();
        return redirect()->route('dash')->with("message","تم رفض الدكتور");
    }

    
}
