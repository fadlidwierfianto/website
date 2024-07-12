<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Legacy User Menu</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('AdminLTE//dist/css/adminlte.min.css')}}">
  @yield('cssdatatable')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  @include('layout.navbar')
  @include('layout.sidebar')
  @yield('content')
  @include('layout.footer')
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('AdminLTE//dist/js/adminlte.min.js')}}"></script>

@yield('scriptdatatable')
</body>
</html>
