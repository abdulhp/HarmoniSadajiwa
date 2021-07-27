<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$judul=$_POST["judul"];
$pencipta=$_POST["pencipta"];
$daerah=$_POST["daerah"];
$lirik=$_POST["lirik"];
$fileName = $_FILES['gambar']['name'];


//Query input menginput data kedalam tabel musik
  $sql="INSERT INTO musik (judul,pencipta,daerah,lirik,gambar) values('$judul','$pencipta','$daerah','$lirik','$fileName')";
  move_uploaded_file($fileName, "uploads/".$fileName);
//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conn,$sql) or trigger_error("Error: ".mysqli_error($conn),E_USER_ERROR);
//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data musik";
	exit;
  }
else {
	echo "Gagal simpan data musik";
	exit;
}  
?>
