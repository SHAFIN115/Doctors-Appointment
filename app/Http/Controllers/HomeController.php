<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;

class HomeController extends Controller
{
    public function index()
    {
        $appointments = Appointments::orderBy('created_at', 'desc')->paginate(10);
        return view('home', ['appointments' => $appointments]);
    }
    public function search(Request $request)
    {
    $appointments = Appointments::query();

    if ($request->filled('appointment_no')) {
        $appointments->where('appointment_no', $request->appointment_no);
    }

    if ($request->filled('appointment_date')) {
        $appointments->where('appointment_date', $request->appointment_date);
    }

    if ($request->filled('doctor')) {
        $appointments->whereHas('doctor', function ($query) use ($request) {
            $query->where('name', 'like', '%' . $request->doctor . '%');
        });
    }

    if ($request->filled('patient_name')) {
        $appointments->where('patient_name', 'like', '%' . $request->patient_name . '%');
    }

    if ($request->filled('patient_phone')) {
        $appointments->where('patient_phone', $request->patient_phone);
    }

    $appointments = $appointments->orderBy('appointment_date', 'desc')->paginate(10);

    return view('home', compact('appointments'));
}
}
