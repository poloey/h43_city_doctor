<!doctype html>
<html lang="en">
<head>
  <title>
    @yield('title', 'City Doctor')
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
    <a class="navbar-brand" href="{{ route('dashboard.index') }}"> <i class="fa fa-user-md"></i> City Doctor Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-5">
        <li class="nav-item dropdown mr-5">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('home')}}"> <i class="fa fa-tachometer"></i> View Website</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container my-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <div class="dropdown">
              <div class="dropdown-toggle my-4" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hospital
              </div>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Add a Hospital</a>
                <a class="dropdown-item" href="{{ route('dashboard.index') }}">All Hospital</a>
              </div>
              <div class="dropdown-toggle my-4" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Doctor
              </div>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Doctor</a>
                <a class="dropdown-item" href="#">Doctor</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        @yield('content')
      </div>
    </div>
  </div>

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