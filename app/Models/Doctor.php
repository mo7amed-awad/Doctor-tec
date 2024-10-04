<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;

class Doctor extends User
{
    use HasFactory ,Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobileNumber',
        'birthDate',
        'age',
        'certification',
        'gender',
        'image',
        'specialization',
        'province',
        'city',
        'appoinment',
        'address',
        'brief'
    ];
    protected $guard='doctor';
}
