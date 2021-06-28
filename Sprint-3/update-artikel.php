<?php 
    include "koneksi.php";

    $idArtikel = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "UPDATE `artikel` SET `judul`='".$judul."',`penulis`='".$penulis."',`deskripsi`='".$deskripsi."' WHERE id_artikel = ".$idArtikel;
    
    if($conn->query($sql) == TRUE) {
        $conn->close();
    }else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
    header("location:input-artikel.php");
    exit();
?>