<?php 
    include "../fungsi/fungsi.php";

    $id = $_GET["id_anggota"];

    if (hapuspeminjam($id) > 0) {
        echo "Data Berhasil Dihapus";
        header("Location: ../peminjam/peminjam.php");
    } else {
        echo "Data Gagal Dihapus";
    }
?>