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
}
