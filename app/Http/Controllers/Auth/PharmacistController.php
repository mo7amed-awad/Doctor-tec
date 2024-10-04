<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pharmacist;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Diagnosis;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;


class PharmacistController extends Controller
{     
    public function index()
    {
        $patients = User::whereHas('diagnoses', function ($query) {
            $query->where('treatment', '=', '');
        })->paginate(100);
    
        return view('Front.pharmacist', compact('patients'));
    }
    public function store(Request $request)
    {

     $request->validate([
          'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pharmacists',
            'password' => 'required|string|confirmed|min:8',
            'mobileNumber' => 'required|string|',
            'certification' => 'required',
            'image' => 'required',
            'province'=>'required',
            'city'=>'required',
            
        ]);
       
        $age=Carbon::parse($request->birthDate)->age;
        $file = $request->file('image'); //uploaded file object
        $image = $file->store('pharmacist_images', [
            'disk' => 'public'
        ]);
        $file2 = $request->file('certification'); //uploaded file object
        $certification = $file2->store('pharmacist_certification', [
            'disk' => 'public'
        ]);
        Pharmacist::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobileNumber'=>$request->mobileNumber,
            'birthDate'=>$request->birthDate,
            'age'=>$age,
            'image'=> $image,
            'certification'=> $certification,
            'province'=>$request->province,
            'city'=>$request->city,
        ]);

    

        return redirect()->route('register')->with('succed', 'تم تسجيل طلبك وسيتم التواصل معك خلال أسبوع');
        
    }
    protected $guard='pharmacist';
    public function login(LoginRequest $request)
    {
        
        $request->authenticate($this->guard);

        $request->session()->regenerate();
        
        return redirect()->intended(RouteServiceProvider::PHARMACIST);
        
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('pharmacist')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function pharmacisttoPatient(Request $request)
    {
        $patient = User::find($request->patient_id);
        $diagnoses = Diagnosis::where('user_id', $request->patient_id)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('Front.pharmacisttoPatient', compact('patient', 'diagnoses'));
    }
    public function updateTreatment(Request $request)
    {
        Diagnosis::find($request->diagnosis_id);
        Diagnosis::updated([
            'treatment'=>$request->treatment
        ]);
        return redirect()->back()->with('diagnosis', 'تم إضافة الدواء');

    }

}
