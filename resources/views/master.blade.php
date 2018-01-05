<!doctype html>
<html lang="en">
<head>
  <title>
    @yield('title', 'Doctor in City')
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @yield('style')
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}"> <i class="fa fa-user-md"></i> Doctor In City</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('home') }}">Home </a>
        </li>
        <li class="nav-item {{ Request::is('disciplines') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('discipline.index') }}">All Discipline</a>
        </li>
        <li class="nav-item {{ Request::is('doctors') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('doctor.index') }}">All Doctors</a>
        </li>
      </ul>
    </div>
  </nav>
  @yield('content')
  <footer class="p-5 text-light" style="background: rgb(38, 50, 56);">
    <div class="container">
      <p>
        This project actually help user to find doctor in different cities in Bangladesh. It will help user to find out expected doctor from their localities. Hope this app will help lot of people in emergency.
      </p>
      <p>
        This Web Apps made by Top up H-43 batch. Specially Sumon, Sarwar, Tasnia Nizamul Haider
      </p>
    </div>
  </footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/color.jquery.js') }}"></script>
</body>
</html>