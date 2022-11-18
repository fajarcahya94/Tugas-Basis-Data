<?php 
    include "../fungsi/fungsi.php";

    $id = $_GET["id_peminjaman"];

    if (hapuspeminjaman($id) > 0) {
        echo "Peminjaman Berhasil Dihapus";
        header("Location: ../peminjaman/peminjaman.php");
    } else {
        echo "Peminjaman Gagal Dihapus";
    }
?>