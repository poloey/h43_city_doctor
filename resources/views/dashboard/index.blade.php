@extends('dashboard.master')
@section('content')
hello world from dashboard
{{auth()->user()->name}}
@endsection