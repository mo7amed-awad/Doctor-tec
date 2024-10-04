<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;

class Pharmacist extends User
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
        'province',
        'city',
    ];
    protected $guard='pharmacist';

}
