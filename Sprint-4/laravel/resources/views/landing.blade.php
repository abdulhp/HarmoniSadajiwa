<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>Harmoni Sadajiwa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">
  
  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  
  <!-- Favicons -->
  <link href="{{url('')}}/laravel/vendor/pageLanding/landing/assets/img/favicon.png" rel="icon">
  <link href="{{url('')}}/laravel/vendor/pageLanding/landing/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{url('')}}/laravel/vendor/pageLanding/landing/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('')}}/laravel/vendor/pageLanding/landing/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('')}}/laravel/vendor/pageLanding/landing/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{url('')}}/laravel/vendor/pageLanding/landing/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="{{url('')}}/laravel/vendor/almasaeed2010/adminlte/plugins/fontawesome-free/css/all.min.css">
  
</head>

<body>
  
  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="hero" src="{{url('')}}/laravel/vendor/pageLanding/landing/assets/img/landing-page-img.png"> -->
    <section id="hero" class="hero" style="background-image: url('{{url('')}}/laravel/vendor/pageLanding/landing/assets/img/landing-page-img.png')">
      <div class="container text-center">
        <div class="col-md-12">
          <h1>
            HARMONI SADAJIWA
          </h1>
          
          <p class="tagline">
            Generasi Muda Peduli Budaya Bangsa
          </p>
          <a class="btn scrollto" href="#about">Join Sekarang!</a>
        </div>
      </div>
      
    </section><!-- End Hero -->
    
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center">
        
        <div id="logo" class="me-auto">
          <a href="index.html"><img src="{{url('')}}/laravel/vendor/pageLanding/landing/assets/img/logo-Harmoni-Sadajiwa.png" alt=""></a>
          <!-- Uncomment below if you prefer to use a text image -->
          <!--<h1><a href="#hero">Bell</a></h1>-->
        </div>
        
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto active" href="#about">Beranda</a></li>
            <li><a class="nav-link scrollto" href="#artikel">Artikel</a></li>
            <li><a class="nav-link scrollto " href="#musik">Musik</a></li>
            <li><a class="nav-link scrollto" href="#team">Tentang Kami</a></li>
            @if (session()->has('name'))
            <li>
              <a class="nav-link scrollto" href="{{route('admin')}}">{{session('name')}}</a>
            </li>
            <li>
              <a href="{{route('admin.logout')}}" title="Keluar"><span class="fas fa-sign-out-alt"></span></a>
            </li>
            @else
            <li>
              <a class="nav-link scrollto" href="{{route('admin')}}">Masuk</a>
            </li>
            @endif
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
      </div>
    </header><!-- End Header -->
    
    <main id="main">
      
      <!-- ======= About Section ======= -->
      <section class="about" id="about">
        
        <div class="container text-center">
          <h2>
            FILOSOFI
          </h2>
          
          <img src="{{url('')}}/laravel/vendor/pageLanding/landing/assets/img/filosofi-img.png" alt="" style="height: 300px; align-items: center;">
          
          <div>
            <p>
              Harmoni Sadajiwa Diambil dari kata Harmoni yang melambangkan musik, dan Sadajiwa (Sangsekerta) yang berarti Hidup Selamanya. 
              Melalui Harmoni Sadajiwa Budaya Seni Musik Indonesia akan tetap ada dan selamanya hidup meski jaman telah berubah.
              Website ini bertujuan untuk memperkenalkan alat musik,  lagu-lagu tradisional Indonesia serta kegiatan-kegiatan yang berkaitan Seni Musik Indonesia.
            </p>
          </div>
        </div>
        
      </section><!-- End About Section -->
      
      <!-- ======= Artikel Section ======= -->
      <section class="artikel" id="artikel">
        <div class="container">
          <h2 class="text-center">
            Artikel
          </h2>
          <div class="row">
            @foreach ($data['artikel'] as $artikel)
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <div>
                  <div class="feature-icon">
                    <i class="bi bi-briefcase"></i>
                  </div>
                </div>
                
                <div>
                  <h3>
                    {{$artikel['judul']}}
                  </h3>
                  
                  <p>
                    <?php echo $artikel['deskripsi']?>
                  </p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section><!-- End Artikel Section -->
      
      <!-- ======= Kegiatan Section ======= -->
      <section class="musik" id="musik">
        
        <div class="container">
          <h2 class="text-center">
            Musik
          </h2>
          
          <div class="row">
            @foreach ($data['musik'] as $musik)
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <div>
                  <div class="feature-icon">
                    <i class="bi bi-briefcase"></i>
                  </div>
                </div>
                
                <div>
                  <h3>
                    {{$musik['judul']}}
                  </h3>
                  
                  <p>
                    Pencipta: {{$musik['pencipta']}}
                  </p>
                  <audio controls>
                    <source src="{{$musik['audio']}}" type="audio/mpeg">
                      Your browser does not support the audio tag.
                    </audio>
                  </div>
                </div>
                
              </div> 
              @endforeach
            </div> 
          </div> 
        </section><!-- End Portfolio Section -->
        
        <!-- ======= Team Section ======= -->
        <section class="team" id="team">
          <div class="container">
            <h2 class="text-center">
              Megane Tim
            </h2>
            
            <div class="row d-flex justify-content-between">
              <div class="col-sm-3 col-xs-6">
                <div class="card card-block">
                  <a href="#"><img alt="" class="team-img" src="{{url('')}}/laravel/vendor/pageLanding/landing/assets/img/abdul.png">
                    <div class="card-title-wrap">
                      <span class="card-title">Abdul Hafiidh Priyanto</span> <span class="card-text">18102038</span>
                    </div>
                    
                  </a>
                </div>
              </div>
              
              <div class="col-sm-3 col-xs-6">
                <div class="card card-block">
                  <a href="#"><img alt="" class="team-img" src="{{url('')}}/laravel/vendor/pageLanding/landing/assets/img/pemwebsen.png">
                    <div class="card-title-wrap">
                      <span class="card-title">Rolanita Scenic Faravati</span> <span class="card-text">18102069</span>
                    </div>
                  </a>
                </div>
              </div>
              
              <div class="col-sm-3 col-xs-6">
                <div class="card card-block">
                  <a href="#"><img alt="" class="team-img" src="{{url('')}}/laravel/vendor/pageLanding/landing/assets/img/pemwebsan.png">
                    <div class="card-title-wrap">
                      <span class="card-title">Wisanti</span> <span class="card-text">18102072</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section><!-- End Team Section -->
        
        <!-- ======= Contact Section ======= -->
        
      </main><!-- End #main -->
      
      <!-- ======= Footer ======= -->
      <footer class="site-footer">
        <div class="bottom">
          <div class="container">
            <div class="row">
              
              <div class="col-lg-6 col-xs-12 text-lg-start text-center">
                <p class="copyright-text">
                  &copy; 2021. Copyright <strong>Megane Club</strong>. Pemrograman Web ITTP
                </p>
              </div>
              
            </div>
          </div>
        </div>
      </footer><!-- End Footer -->
      
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      
      <!-- Vendor JS Files -->
      <script src="{{url('')}}/laravel/vendor/pageLanding/landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="{{url('')}}/laravel/vendor/pageLanding/landing/assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="{{url('')}}/laravel/vendor/pageLanding/landing/assets/vendor/php-email-form/validate.js"></script>
      <script src="{{url('')}}/laravel/vendor/pageLanding/landing/assets/vendor/purecounter/purecounter.js"></script>
      
      <!-- Template Main JS File -->
      <script src="{{url('')}}/laravel/vendor/pageLanding/landing/assets/js/main.js"></script>
      
    </body>
    
    </html>