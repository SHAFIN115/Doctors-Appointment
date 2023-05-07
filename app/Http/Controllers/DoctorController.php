<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::orderBy('department_id', 'desc')->get();
        return view('index', compact('doctors'));
        
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'fee' => 'required|numeric',
        ]);

        $doctor = new Doctor();
        $doctor->name = $validatedData['name'];
        $doctor->phone = $validatedData['phone'];
        $doctor->fee = $validatedData['fee'];
        $doctor->save();

        return redirect()->route('doctors_index')->with('success', 'Doctor created successfully.');
    
    }

    public function edit($id)
    {
        
        $doctor = Doctor::findOrFail($id);
        return view('edit', compact('doctor'));
    }
 



    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'fee' => 'required|numeric',
    ]);

        $doctor = Doctor::findOrFail($id);
        $doctor->name = $validatedData['name'];
        $doctor->phone = $validatedData['phone'];
        $doctor->fee = $validatedData['fee'];
        $doctor->save();

    return redirect()->route('doctors_index')->with('success', 'Doctor updated successfully.');
    }

    public function delete($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('delete', compact('doctor'));
    }



    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();

        return redirect()->route('doctors_index')->with('success', 'Doctor deleted successfully.');
    }























}

   