<?php 
include "koneksi.php";
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$deskripsi = $_POST['deskripsi'];

$sql = "INSERT INTO artikel(judul, penulis, deskripsi) VALUES ('".$judul."', '".$penulis."', '".$deskripsi."')";

if($conn->query($sql) == TRUE) {
    $conn->close();
}else {
    echo "Error: ".$sql."<br>".$conn->error;
}
header("location:input-artikel.php");
exit();
?>