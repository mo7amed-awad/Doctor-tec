<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Booking;
use App\Models\Diagnosis;
use Carbon\Carbon;
use App\Mail\CodeGenerated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class DoctorController extends Controller
{

    public function index()
    {
        $query = Booking::query();
        if ($id = auth('doctor')->user()->id) {
            $query->where('doctor_id', '=', $id);
        }
        $patients = $query->paginate(100);
        return view('Front.doctor', compact('patients'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:doctors',
            'password' => 'required|string|confirmed|min:8',
            'mobileNumber' => 'required|string|',
            'certification' => 'required',
            'image' => 'required',
            'province' => 'required',
            'city' => 'required',
            'specialization' => 'in:جراحة سمنة ومناظير,جراحة عامة,جراحة عمود فقري,جراحة قلب وصدر,جراحة مخ واعصاب,جهاز هضمي ومناظير,حساسية ومناعة,حقن مجهري واطفال انابيب,ذكورة وعقم,روماتيزم
            ,سكر وغدد صماء,سمعيات,صدر وجهاز تنفسي,طب الأسرة,طب المسنين,طب تقويمي,علاج الآلام,علاج طبيعي واصابات ملاعب,جلدية
            ,اسنان,نفسي,اطفال وحديثي الولادة,مخ واعصاب,عظام,نساء وتوليد,انف واذن وحنجرة,قلب واوعية دموية,الآشعة التداخلية,امراض دم,اورام,باطنة,تخسيس وتغذية,جراحة اطفال
            ,جراحة أورام,جراحة اوعية دموية,جراحة تجميل,عيون,كبد,كلى,مراكز أشعة,مسالك بولية,معامل تحاليل,ممارسة عامة,نطق وتخاطب',

        ]);

        $age = Carbon::parse($request->birthDate)->age;
        $file = $request->file('image'); //uploaded file object
        $image = $file->store('doctors_images', [
            'disk' => 'public'
        ]);
        $file2 = $request->file('certification'); //uploaded file object
        $certification = $file2->store('doctors_certification', [
            'disk' => 'public'
        ]);
        Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobileNumber' => $request->mobileNumber,
            'birthDate' => $request->birthDate,
            'age' => $age,
            'specialization' => $request->specialization,
            'image' => $image,
            'certification' => $certification,
            'province' => $request->province,
            'city' => $request->city,
            'brief' => $request->brief,
            'appoinment' => $request->appoinment,
            'address' => $request->address,
        ]);



        return redirect()->route('register')->with('succed', 'تم تسجيل طلبك وسيتم التواصل معك في أقرب وقت');
    }

    protected $guard = 'doctor';
    public function login(LoginRequest $request)
    {

        $request->authenticate($this->guard);

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::DOCTOR);
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('doctor')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function doctortoPatient(Request $request)
    {
        $patient = User::find($request->patient_id);
        $diagnoses = Diagnosis::where('user_id', $request->patient_id)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('Front.doctorToPatient', compact('patient', 'diagnoses'));
    }


    public function patientCode(Request $request)
    {
        try {
            $user = User::find($request->patient_id);
            if ($user) {
                $user->generateCode();
    
                // Send email to the user with the generated code
              //  Mail::to($user->email)->send(new CodeGenerated($user->code));
    
                return response()->json(['success' => true, 'code' => $user->code]);
            }
    
            return response()->json(['success' => false]);
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
            return response()->json(['success' => false, 'message' =>  $e->getMessage()],404);
        }
    }

    public function addDiagnosis(Request $request)
    {

        $patient = User::find($request->patient_id);

        if (!($request->verifycode == $patient->code)) {
            return redirect()->back()->with('message', 'كود المريض غير صحيح');
        }

        $diagnosis = Diagnosis::create([
            'user_id' => $patient->id,
            'doctor_id' => Auth::guard('doctor')->user()->id,
            'doctor_name' => Auth::guard('doctor')->user()->name,
            'diagnostics' => $request->diagnosis,
            'treatment' => $request->treatment
        ]);

        if ($diagnosis) {
            return redirect()->back()->with('diagnosis', 'تم إضافة التشخيص');
        }
    }
}
