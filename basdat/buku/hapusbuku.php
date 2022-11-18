<?php 
    include "../fungsi/fungsi.php";

    $id = $_GET["id_buku"];

    if (hapusbuku($id) > 0) {
        echo "Buku Berhasil Dihapus";
        header("Location: ../buku/buku.php");
    } else {
        echo "Buku Gagal Dihapus";
    }
?>