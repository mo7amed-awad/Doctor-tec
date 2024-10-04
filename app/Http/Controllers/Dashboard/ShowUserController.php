<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ShowUserController extends Controller
{
    public function index(){
        $users = User::all();
        return view("Dashboard.Admin.users",compact("users"));
    }
}
