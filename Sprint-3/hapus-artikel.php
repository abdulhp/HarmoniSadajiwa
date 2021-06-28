<?php 
    include "koneksi.php";

    $idArtikel = $_GET['id'];

    $sql = "DELETE FROM artikel WHERE id_artikel = ".$idArtikel;
    if($conn->query($sql) == TRUE) {
        $conn->close();
    }else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
    header("location:input-artikel.php");
    exit();
?>