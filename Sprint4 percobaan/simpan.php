<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$judul=$_POST["judul"];
$pencipta=$_POST["pencipta"];
$daerah=$_POST["daerah"];
$lirik=$_POST["lirik"];
$fileName = $_FILES['gambar']['name'];
$audio = $_FILES['audio']['name'];


//Query input menginput data kedalam tabel musik
  $sql="INSERT INTO musik (judul,pencipta,daerah,lirik,gambar,audio) values('$judul','$pencipta','$daerah','$lirik','$fileName','$audio')";
  move_uploaded_file($fileName, "uploads/".$fileName);
  move_uploaded_file($audio, "uploads/".$audio);
//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conn,$sql) or trigger_error("Error: ".mysqli_error($conn),E_USER_ERROR);
//Kondisi apakah berhasil atau tidak
  if ($hasil) {
    $last_id=mysqli_insert_id($conn);
    echo $last_id;
    header("location:Musikuser.php?id_musik={$last_id}");
	exit;
  }
else {
	echo "Gagal simpan data musik";
	exit;
}  
?>
