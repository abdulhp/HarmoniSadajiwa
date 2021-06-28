<?php 
include "koneksi.php";
$idArtikel = $_GET['id'];
$qartikel = "SELECT * FROM artikel";
$data_artikel = $conn->query($qartikel)->fetch_all(MYSQLI_ASSOC);
$qArtikelSpecific = "SELECT * FROM artikel WHERE id_artikel = ".$idArtikel;
$dataArtikelSpecific = $conn->query($qArtikelSpecific)->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>Harmoni Sadajiwa</title>
  <link href="../Sprint-3/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


  <!-- Favicons -->
  <link rel="stylesheet" href="css/style2.css">
  <link rel="apple-touch-icon" href="/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/img/favicons/manifest.json">
  <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark container-fluid">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#"><img src="./assets/img/Harmoni Sadajiwa.png" width="50%" alt="Harmoni Sadajiwa"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- NAVBAR -->
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="index.html">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="artikel.html">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="musik.html">Musik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="kegiatan.html">Kegiatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="tentangKami.html">Tentang Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="thumbnail">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
              <li class="breadcrumb-item"><a href="#">Artikel</a></li>
              <li class="breadcrumb-item active" aria-current="page">view</li>
            </ol>
          </nav>
          <div> 
            <img src="uploads/<?php echo $dataArtikelSpecific['gambar'];?>" width="80px" height="80px">
          </div>
            <div>
              <h2 class="my-0"><?php echo $dataArtikelSpecific[0]['judul']; ?></h2>
              <small class="text-muted"><?php echo $dataArtikelSpecific[0]['penulis']; ?></small>
              <small class="text-muted"><?php echo $dataArtikelSpecific[0]['deskripsi']; ?></small>
            </div>
          <div class="comment">
            <label><h2>Leave a coment</h2></label>
            <div class="form-group">
              <label>Name:</label>
              <input type="text" class="form-control" id="usr">
            </div>
            <div class="form-group">
              <label>Email:</label>
              <input type="email" class="form-control" id="pwd">
            </div>
            <div class="form-group">
              <label for="comment">Comment:</label>
              <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-info" value="Kirim Komentar">
            </div>

          </div>

        </div>
      </div>
      <div class="col-sm-4">
        <div class="row">
          <div class="col-sm-12">
            <?php foreach($data_artikel as $artikel){?>
              <div class="caption">
                <div> 
                  <img src="uploads/<?php echo $artikel['gambar'];?>" width="80px" height="80px">
                </div>
                <div>
                  <h4 class="my-0"><a href="artikel.php?id=<?php echo $artikel['id_artikel']?>"><?php echo $artikel['judul'] ?></a></h4>
                  <small class="text-muted"><?php echo $artikel['deskripsi'] ?></small>
                </div>
              </div>
            <?php }; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-white text-center text-lg-start" style="background-color: #785757">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Harmoni Sadajiwa</h5>
          <p><span class="fa fa-map-marker-alt"></span>
            Kampus IT Telkom Purwokerto, Jl. D. I. Pandjaitan No. 128, Purwokerto, 53147
          </p>
          <p><span class="fa fa-phone"></span>
            +62 857 1111 2222
          </p>
          <p><span class="fa fa-envelope"></span>
            harmonisadajiwa@megane.id
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Social Media</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white"><span class="fab fa-facebook"></span> Harmoni Sadajiwa</a>
            </li>
            <li>
              <a href="#!" class="text-white"><span class="fab fa-instagram"></span> harmonisadajiwa</a>
            </li>
            <li>
              <a href="#!" class="text-white"><span class="fab fa-twitter"></span> harmonisadajiwa</a>
            </li>
            <li>
              <a href="#!" class="text-white"><span class="fab fa-youtube"></span> Harmoni Sadajiwa</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <ul class="list-unstyled">
            <li>
              <a href="" class="text-white">Q&A</a>
            </li>
            <li>
              <a href="" class="text-white">Kebijakan Privasi</a>
            </li>
            <li>
              <a href="" class="text-white">Syarat dan Ketentuan</a>
            </li>
          </ul>
          <p>HARMONI SADAJIWA  ©2021</p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright: Harmoni Sadajiwa
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
