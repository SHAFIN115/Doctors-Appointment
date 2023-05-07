<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Department;
class AppointmentsController extends Controller
{
    public function show()
    {
        $departments = Department::all();
        $doctors = Doctor::all();
        
        return view('appointments', compact('departments'),compact('doctors'));
    }
}
