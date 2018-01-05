@extends('master')
@section('content')
<div class="text-center bg-info text-white p-5">
  <h1>
    <a class="text-white" href="{{ route('city.show', ['slug' => $hospital->city->slug]) }}"> <i class="fa fa-arrow-left"></i> </a>
    {{$hospital->name}} City
  </h1>
  <h4>All Doctors</h4>
</div>
<div class="container">
  <div class="d-flex flex-wrap">
    @foreach($hospital->doctors as $doctor)
      <div class="col-md-6 col-lg-4">
        <a href="{{ route('doctor.show', ['slug' => $doctor->slug]) }}">
          <div class="card my-3 text-white bg_random_color hover_random_color">
            <div class="card-header">
              <h2>{{$doctor->name}}</h2>
            </div>
            <div class="card-body">
              <div class="text-center">
                <div class="mb-3">
                  <img class="rounded-circle" src="{{ asset('image/people/' . intval($doctor->id % 99) .'.jpg') }}" alt="">
                </div>
                <div></div>
                <div class="d-inline-block">
                  <i class="fa fa-user-md"></i> {{$doctor->discipline->name}} - {{$doctor->degree->name}}
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>
@endsection
