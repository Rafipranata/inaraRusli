<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Admin/assets/css/style.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
          <a href="{{route('admin.index')}}" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block">Admin</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
    
        
        <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">
              <li class="nav-item dropdown pe-3">
    
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="/photoAdmin/{{Auth::user()->photo }}" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
              </a><!-- End Profile Iamge Icon -->
    
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <h6> {{ Auth::user()->name }}  </h6>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="{{route('admin.profile')}} ">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <hr class="dropdown-divider">
                </li>
    
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="/logout">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                  </a>
                </li>
    
              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
    
          </ul>
        </nav><!-- End Icons Navigation -->
    
      </header>
      <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
    
          <li class="nav-item"><link href="{{ asset('img/favicon.png') }}" rel="icon">
            <a class="nav-link  {{ request()->routeIs('admin.index') ? 'active' : 'collapsed' }} "  href="{{route('admin.index')}}">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.about') ? 'active' : 'collapsed' }}" href="{{route('admin.about')}}">
              <i class="bi bi-person"></i>
              <span>About</span>
            </a>
          </li><!-- End Profile Page Nav -->
    
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.catalog') ? 'active' : 'collapsed' }}" href="{{route('admin.catalog')}}">
              <i class="bi bi-bag-dash"></i>
              <span>Catalog</span>
            </a>
          </li><!-- End F.A.Q Page Nav -->
    
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.gallery') ? 'active' : 'collapsed' }}" href="{{route('admin.gallery')}}">
              <i class="bi bi-images"></i>
              <span>Gallery</span>
            </a>
          </li><!-- End Contact Page Nav -->
          
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.contact') ? 'active' : 'collapsed' }}" href="{{route('admin.contact')}}">
              <i class="bi bi-journal"></i>
              <span>Contact</span>
            </a>
          </li><!-- End Contact Page Nav -->
        </ul>
    
      </aside>
    
    
    
    <!-- Anda dapat menambahkan elemen lain yang bersifat umum di sini -->
    <script src="{{ asset('Admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('Admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    @vite('resources/js/app.js')
    @include('sweetalert::alert')
    
    <script src="{{ asset('Admin/assets/js/main.js') }}"></script>
    
</body>
</html>
