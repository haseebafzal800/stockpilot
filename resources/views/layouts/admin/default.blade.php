<!doctype html>
<html>
<head>
   @include('includes.admin.head')
</head>
<body>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
    @include('includes.admin.header')
    @include('includes.admin.sidebar')
    @yield('content')
</div>
<!-- ./wrapper -->
</body>
</html>