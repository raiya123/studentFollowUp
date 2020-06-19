<?php

namespace App\Http\Controllers\User;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('user.dashboard',compact('student'));
    }
}

