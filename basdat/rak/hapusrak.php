<?php 
    include "../fungsi/fungsi.php";

    $id = $_GET["id_rak"];

    if (hapuspeminjam($id) > 0) {
        echo "Rak Berhasil Dihapus";
        header("Location: ../rak/rak.php");
    } else {
        echo "Rak Gagal Dihapus";
    }
?>