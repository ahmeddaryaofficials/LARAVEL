<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Scripts -->

    <!-- Fonts -->
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

    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <style>
      a{
        text-decoration: none !important
      }
    </style>
</head>
<body>
    @include('layouts.inc.frontnav')
        <div class="content">
            @yield('content')
        </div>




      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="{{ asset('frontend/js/material-dashboard.min.js?v=3.0.4') }}" defer></script>
      <script src="{{ asset('frontend/js/core/popper.min.js') }}" defer></script>
      <script src="{{ asset('frontend/js/core/bootstrap.min.js') }}" defer></script>
      <script src="{{ asset('frontend/js/plugins/perfect-scrollbar.min.js') }}" defer></script>
      <script src="{{ asset('frontend/js/plugins/smooth-scrollbar.min.js') }}" defer></script>
      <script src="{{ asset('frontend/js/plugins/chartjs.min.js') }}" defer></script>
      <script src="{{ asset('frontend/js/jquery-3.6.1.min.js') }}" ></script>
      <script src="{{ asset('frontend/js/owl.carousel.min.js') }}" ></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
      @if (session ('status'))
        <script>
          swal("{{ session ('status')}}")
        </script>
      @endif

  @yield('scripts')

</body>
</html>
