<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student Registration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('fontawesome-free/css/all.min.css') }}">
 
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('icheck-bootstrap/icheck-bootstrap.min.css')}}">
  {{-- <link rel="stylesheet" href="{{ asset('daterangepicker/daterangepicker.css')}}"> --}}
  <link rel="stylesheet" href="{{ asset('bootstrap-datepicker-1.9.0-dist/css/bootstrap-datepicker3.min.css')}}">

  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  {{-- adminlte  --}}
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css')}}">
  {{-- toastr alert --}}
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" /> --}}
</head>
<body>   
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
      </nav>
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('students.index')}}" class="brand-link">
          <span class="brand-text font-weight-light">Student Registration</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar" style="height: 100vh;">
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ route('students.index')}}" class="nav-link @if(Request::is('students*')){{'active'}} @endif">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Students
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('courses.index')}}" class="nav-link @if(Request::is('courses*')){{'active'}} @endif">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                   Courses
                  </p>
                </a>
              </li>
              
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      @yield('content')
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.0.5
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
      </footer>
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
<script src="{{ asset('js/jquery.min.js')}}"></script>    
<script src="{{ asset('js/app.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Select2 -->
<script src="{{ asset('select2/js/select2.full.min.js') }}"></script>


<script src="{{ asset('bootstrap-datepicker-1.9.0-dist/js/bootstrap-datepicker.min.js') }}" ></script>
{{-- toastr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js')}}"></script>
@stack('datepicker')
</body>
</html>