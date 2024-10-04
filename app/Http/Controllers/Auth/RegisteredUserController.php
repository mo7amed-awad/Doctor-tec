<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class RegisteredUserController extends Controller
{
    public function showPatient()
    {
        
    }
 
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'mobileNumber' => 'required|string|',
            'bloodType' => 'required',
            'gender' => 'required',
            
        ]);
        $file = $request->file('image');
        if($file){ //uploaded file object
        $image = $file->store('users_images', [
                'disk' => 'public'
        ]);}
        $age=Carbon::parse($request->birthDate)->age;
        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobileNumber'=>$request->mobileNumber,
            'birthDate'=>$request->birthDate,
            'age'=>$age,
            'bloodType'=>$request->bloodType,
            'gender'=>$request->gender,
            'image'=> $image??$request->image,
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
