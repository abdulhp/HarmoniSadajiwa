<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Harmoni Sadajiwa | Login</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <h1><b>Harmoni </b>Sadajiwa</a></h1>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Seni adalah Anugerah</p>
        @if (session()->has('error'))
        <div class="alert alert-danger">
          <h5><i class="icon fas fa-ban"></i> Oops!</h5>
          {{session('error')}}
        </div>
        @endif    
        <form action="{{route('admin.postLogin')}}" method="post">
          @csrf
          @error('username')
            <div class="alert alert-danger">
              {{$message}}
            </div>
            @enderror
          <div class="input-group mb-3">
            <input type="text" class="@error('username') is-invalid @enderror form-control" name="username" placeholder="Username" value="{{old('username')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          @error('password')
            <div class="alert alert-danger">
              {{$message}}
            </div>
            @enderror
          <div class="input-group mb-3">
            <input type="password" class="@error('password') is-invalid @enderror form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </form>
        <!-- /.social-auth-links -->
        <p class="mb-0">
          <a href="{{route('admin.register')}}" class="text-center">Daftar untuk mulai berlangganan</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->
  
  <!-- jQuery -->
  <script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
