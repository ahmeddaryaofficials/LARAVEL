<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts --><script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fonts -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link href="{{ asset('admin/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
          <img class="animation__shake" src="{{asset('assets/uploads/logo/dawat_logo.jpeg')}}" alt="DAWAT.PK" height="60" width="60">
        </div>

        <!-- Navbar -->
        @include('vendorlayouts.inc.sidebar')

         @include('vendorlayouts.inc.adminnav')
         <div class="content-wrapper">

              @yield('content')

            {{-- <div class="row mb-4">
                @yield('content')
            </div> --}}

         </div>
         @include('vendorlayouts.inc.adminfooter')
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- ChartJS -->
      <script src="{{ asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
      <!-- Sparkline -->
      <script src="{{ asset('assets/plugins/sparklines/sparkline.js')}}"></script>
      <!-- JQVMap -->
      <script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
      <script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
      <!-- jQuery Knob Chart -->
      <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
      <!-- daterangepicker -->
      <script src="{{ asset('assets/plugins/moment/moment.min.js')}}"></script>
      <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
      <!-- Summernote -->
      <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
      <!-- overlayScrollbars -->
      <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
      <!-- AdminLTE App -->
      <script src="{{ asset('assets/dist/js/adminlte.js')}}"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{ asset('assets/dist/js/demo.js')}}"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="{{ asset('assets/dist/js/pages/dashboard.js')}}"></script>



      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="{{ asset('admin/js/material-dashboard.min.js?v=3.0.4') }}" defer></script>
      <script src="{{ asset('admin/js/core/popper.min.js') }}" defer></script>
      <script src="{{ asset('admin/js/core/bootstrap.min.js') }}" defer></script>
      <script src="{{ asset('admin/js/plugins/perfect-scrollbar.min.js') }}" defer></script>
      <script src="{{ asset('admin/js/plugins/smooth-scrollbar.min.js') }}" defer></script>
      <script src="{{ asset('admin/js/plugins/chartjs.min.js') }}" defer></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      @if (session ('status'))
        <script>
          swal("{{ session ('status')}}")
        </script>
      @endif
  @yield('scripts')

</body>
</html>
