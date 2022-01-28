
<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
<!-- plugins:css -->
<link rel="stylesheet" href="/cssadmin/assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="/cssadmin/assets/vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="/cssadmin/assets/vendors/jvectormap/jquery-jvectormap.css">
<link rel="stylesheet" href="/cssadmin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="/cssadmin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
<link rel="stylesheet" href="/cssadmin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
<!-- End plugin css for this page -->
<!-- inject:css -->
<!-- endinject -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Layout styles -->
<link rel="stylesheet" href="/cssadmin/assets/css/style.css">
<!-- End layout styles -->
<link rel="shortcut icon" href="/cssadmin/assets/images/favicon.png" />
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
              <ul class="navbar-nav ms-auto">
                
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            </ul>

            <!-- Right Side Of Navbar -->
           
        </div>
    </div>
</nav>
<div class="d-flex" id="wrapper">
  
<nav class="sidebar sidebar-offcanvas navbar-light bg-dark " id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex navbar-light bg-dark   align-items-center justify-content-center fixed-top">
    </div>
    <ul class="nav navbar-light bg-dark ">
      
      <li class="nav-item nav-category">
        <span class="nav-link">Menu</span>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('admin.create')}}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Trips</span>
        </a>
      </li>         
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('admin.flights')}}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Flights</span>
        </a>
      </li>     
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('admin.hotels')}}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Hotels</span>
        </a>
      </li>          

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('admin.activities')}}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Activities</span>
        </a>
      </li>          
    </ul>
  </nav>
  <main class="py-4">
    @yield('content')
</main>
 </div>
<!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>