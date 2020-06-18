<?php

namespace App\Http\Controllers\Admin;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('admin.dashboard',compact('student'));
    }
}
