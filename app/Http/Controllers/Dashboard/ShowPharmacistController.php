<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Pharmacist;
use Illuminate\Http\Request;

class ShowPharmacistController extends Controller
{
    public function waited_pharmacists(){
        $waited_pharmacists = Pharmacist::where("status","notyet")->get();
        return view("Dashboard.Admin.Pharmacist.waited_pharmacists",compact("waited_pharmacists"));
    }

    public function acceptable_pharmacists(){
        $acceptable_pharmacists = Pharmacist::where("status","acceptable")->get();
        return view("Dashboard.Admin.Pharmacist.acceptable_pharmacists",compact("acceptable_pharmacists"));
    }

    public function show_pharmacist(string $id){
        $pharmacist=Pharmacist::findOrfail($id);
        return view("Dashboard.Admin.Pharmacist.show_pharmacist",compact("pharmacist"));
    }

    public function acceptance_pharmacist(string $id){
        $pharmacist=Pharmacist::findOrfail($id);
        $pharmacist->status= "acceptable";
        $pharmacist->save();
        return redirect()->route('dash')->with("message","تم قبول الدكتور بنجاح");
    }
    
    public function refues_pharmacist(string $id){
        $pharmacist=Pharmacist::findOrfail($id);
        $pharmacist->status= "refused";
        $pharmacist->save();
        return redirect()->route('dash')->with("message","تم رفض الدكتور");
    }

    
}
