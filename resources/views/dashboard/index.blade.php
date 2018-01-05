@extends('dashboard.master')
@section('content')
<table class="table table-responsive">
  <thead>
    <tr>
      <th>Hospital Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($hospitals as $hospital)
      <tr>
        <td>{{$hospital->name}}</td>
        <td>
          <a class="mr-3 btn btn-outline-info" href="#">Edit</a>
          <a href="#" class="btn btn-outline-danger">delete</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<div class="p-3">
  <div class="d-flex justify-content-center">
    {{$hospitals->links('vendor.pagination.bootstrap-4')}}
  </div>
</div>
@endsection