<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
  public function index()
  {
    $doctors = Doctor::paginate(30);
    return view('doctor.index', compact('doctors'));
  }
  public function show($slug)
  {
    $doctor = Doctor::where('slug', $slug)->first();
    return view('doctor.show', compact('doctor'));
  }
}
