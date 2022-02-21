<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" {{asset('assets/admin/css/all.min.css')}} ">
  <!-- pace-progress -->
  <!--<link rel="stylesheet" href="../../plugins/pace-progress/themes/black/pace-theme-flat-top.css">-->
  <!-- adminlte-->
  <link rel="stylesheet" href=" {{asset('assets/admin/css/adminlte.min.css')}} ">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>

  @yield('css')
</head>
<body class="hold-transition sidebar-mini pace-primary">
<!-- Site wrapper -->
<div class="wrapper">
  
    @include('admin.layouts.navbar')

    @include('admin.layouts.sidebar')

  

    @yield('content')
  
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=" {{asset('assets/admin/js/jquery.min.js')}} "></script>
<!-- Bootstrap 4 -->
<script src=" {{asset('assets/admin/js/bootstrap.bundle.min.js')}} "></script>
  <!-- pace-progress -->
<!--<script src="../../plugins/pace-progress/pace.min.js"></script>-->
<!-- AdminLTE App -->
<script src=" {{asset('assets/admin/js/adminlte.min.js')}} "></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="../../dist/js/demo.js"></script>-->
@yield('js')
<script>
  $(document).ready(function() {
    $('.select2').select2();
  });
</script>
</body>
</html>
