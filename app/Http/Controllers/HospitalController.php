<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;

class HospitalController extends Controller
{
  public function show($slug)
  {
    $hospital = Hospital::where('slug', $slug)->first();
    return view('hospital.show', compact('hospital'));
  }
  public function create() {
    return view('dashboard.create_hospital');
  }
  public function store(Request $request) {
    return $request->all();
  }
}
