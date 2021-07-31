<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Harmoni Sadajiwa | Register</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <h1><b>Harmoni </b>Sadajiwa</h1>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Ikuti Harmoni Sadajiwa saat ini</p>
        
        <form action="{{route('admin.postRegister')}}" method="POST">
          @csrf
          @error('name')
              <div class="alert alert-danger">
                {{$message}}
              </div>
          @enderror
          <div class="input-group mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full name" value="{{old('name')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          @error('username')
              <div class="alert alert-danger">
                {{$message}}
              </div>
          @enderror
          <div class="input-group mb-3">
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="username" value="{{old('username')}}">
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
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Daftar</button>
        </form>
        <a href="{{route('admin.login')}}" class="text-center">Sudah punya akun?</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
  
  <!-- jQuery -->
  <script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
