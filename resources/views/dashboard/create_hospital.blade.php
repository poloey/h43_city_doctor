@extends('dashboard.master')
@section('content')
<form action="{{ route('dashboard.hospital.store') }}" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="name">Hospital Name</label>
    <input type="text" name="name" id="name" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" id="address" class="form-control"></textarea>
  </div>
  <div class="form-group">
      <label for="number">Emergency Number</label>
      <input type="text" name="number" id="number" class="form-control">
  </div>
  <division-group></division-group>
  <city-group></city-group>
  <div class="form-group">
    <button type="submit" class="btn btn-info">Add a hospital</button>
  </div>

</form>
@endsection