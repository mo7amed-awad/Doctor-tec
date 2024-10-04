<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

class DoctorDetailsController extends Controller
{


    
    public function search(Request $request)
    {
        $query = Doctor::query();

        if ($province = $request->province) {
            $query->where('province', '=', $province);
        }
        
        if ($city = $request->city) {
            $query->where('city', '=', $city);
        }
        
        if ($specialization = $request->specialization) {
            $query->where('specialization', '=', $specialization);
        }
        
        // Add a condition to filter by status
        $query->where('status', '=', 'acceptable');
        
        $doctors = $query->paginate(100);
        
        return view('Front.searchData',compact('doctors'));

    }
    public function doctorDetails($id)
    {
        $doctor = Doctor::find($id);

        return view('Front.doctorDetails', compact('doctor'));
    }

    public function booking(Request $request)
    {
        $doctor=$request->doctor;
        $patient = auth()->user()->id;
        $doctor = Doctor::find($doctor);

        $booking = Booking::create([
            'user_id'=>$patient,
            'doctor_id'=>$doctor->id,
            'name'=>$request->name,
            'phoneNumber'=>$request->phoneNumber,
            'email'=>$request->email,
        ]);

        if($booking)
            {
                return redirect()->route('patiant')->with('succed', ' تم الحجز وسيتم إرسال رسالة لك ');
            }
        return redirect()->back()->with('faild',trans('faildMessageText'));

    }

    public function show()
    {
        $doctors = Doctor::where('status','=','acceptable')->get();

        // Extract unique provinces, cities, and specializations
        $uniqueProvinces = $doctors->pluck('province')->unique();
        $uniqueCities = $doctors->pluck('city')->unique();
        $uniqueSpecializations = $doctors->pluck('specialization')->unique();
        
        return view('Front.index', compact('uniqueProvinces', 'uniqueCities', 'uniqueSpecializations'));
    }
}
