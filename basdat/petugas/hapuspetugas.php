<?php 
    include "../fungsi/fungsi.php";

    $id = $_GET["id_petugas"];

    if (hapuspetugas($id) > 0) {
        echo "Data Berhasil Dihapus";
        header("Location: ../petugas/petugas.php");
    } else {
        echo "Data Gagal Dihapus";
    }
?>