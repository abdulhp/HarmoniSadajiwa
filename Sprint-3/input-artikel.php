<?php include "koneksi.php"; 
  $qArtikel = "SELECT * FROM artikel";
  $dataArtikel = $conn->query($qArtikel)->fetch_all(MYSQLI_ASSOC);
  $jmlArtikel = $conn->query($qArtikel)->num_rows;

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $qEditArtikel = "SELECT * FROM artikel WHERE id_artikel = ".$id;
    $dataEdit = $conn->query($qEditArtikel)->fetch_all(MYSQLI_ASSOC);
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Form Artikel</title>

  <!-- Bootstrap core CSS -->
  <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="node_modules/font-awesome/font-awesome.min.css">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="./img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="./img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="./img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="./img/favicons/manifest.json">
  <link rel="mask-icon" href="./img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="./img/favicons/favicon.ico">
  <meta name="msapplication-config" content="./img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container">
    <div class="py-5 text-center">
      <h2>Form Artikel</h2>
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Data Artikel</span>
          <span class="badge bg-secondary rounded-pill"><?= $jmlArtikel?></span>
        </h4>
        <ul class="list-group mb-3">
          <?php foreach($dataArtikel as $artikel) {?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"><?= $artikel['judul'];?></h6>
                <small class="text-muted"><?= $artikel['penulis'];?></small>
              </div>
              <a href="input-artikel.php?id=<?php echo $artikel['id_artikel']?>">Edit</a>
              <a href="hapus-artikel.php?id=<?php echo $artikel['id_artikel']?>">Hapus</a>
            </li>
          <?php } ?>
        </ul>
      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Input Data</h4>
        <form action="<?php echo isset($_GET['id']) ? "update-artikel.php" : "simpan-artikel.php"?>" method="POST">
          <?php if (isset($_GET['id'])) {?>
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
          <?php }; ?>
          <div class="mb-3">
            <label for="nama_lengkap">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo isset($_GET['id']) ? $dataEdit[0]['judul'] : "" ?>" required>
          </div>
          <div class="mb-3">
            <label for="alamat">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo isset($_GET['id']) ? $dataEdit[0]['penulis'] : "" ?>" required>
          </div>
          <div class="mb-3">
            <label for="alamat">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi"><?php echo isset($_GET['id']) ? $dataEdit[0]['deskripsi'] : "" ?></textarea>
          </div>
          <div class="row"></div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan Data</button>
        </form>
      </div>
    </div>

  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="./node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="./node_modules/@popperjs/core/dist/cjs/popperjs.js"></script>
<script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>