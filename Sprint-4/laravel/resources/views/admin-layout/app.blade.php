<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Harmoni Sadajiwa | {{$data['pageTitle']}}</title>
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">

  @yield('additional-stylesheet')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    @yield('nav')
    
    @yield('left-sidebar')
  
    @yield('content')

    @yield('footer')
  </div>

  <script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
  <script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  @yield('additional-script')
  <script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
