<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h2>Form Input Artikel Musik</h2>
    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Judul:</label>
            <input type="text" name="judul" class="form-control" placeholder="Masukan Judul" />
        </div>
	<div class="form-group">
            <label>Pencipta:</label>
            <input type="text" name="pencipta" class="form-control" placeholder="Nama Pencipta" />
    </div>
    <div class="form-group">
            <label>Daerah:</label>
            <input type="text" name="daerah" class="form-control" placeholder="Daerah Asal Lagu" />
        </div>
        
	<div class="form-group">
	     <label>Lirik:</label>
	     <textarea name="lirik" class="form-control" rows="5"placeholder="Masukan Lirik Lagu" ></textarea>
	</div> 
    </div>
    <label for="gambar">Pilih Gambar</label>
    <input type="file" name="gambar" id="gambar">
    <div class="row">
    </div>
    <label for="audio">Pilih Musik</label>
    <input type="file" name="audio" id="audio">
    <div class="row">
    </div>
    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan Data</button>
    </form>
</div>
</body>
</html>