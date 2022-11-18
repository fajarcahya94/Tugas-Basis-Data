<?php
    require "../fungsi/fungsi.php";

    if (isset($_POST["submit"])) {
       if (tambahpeminjam($_POST > 0)) {
            header("Location: ../peminjam/peminjam.php");
        } else {
            echo "Peminjam Gagal Ditambahkan";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjam</title>
</head>
<body>
    <h1>Tambah Peminjam</h1>
    <form action="" method="POST">
    <ul>
        <li>
            <label for="nama_anggota">Nama Peminjam :</label>
            <input type="text" name="nama_anggota" id="nama_anggota" required autofocus>
        </li>
        <li>
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" required>
        </li>
        <li>
            <label for="jurusan_anggota">Jurusan :</label>
            <input type="text" name="jurusan_anggota" id="jurusan_anggota" required>
        </li>
        <li>
            <label for="no_telp">Telpon :</label>
            <input type="number" name="no_telp" id="no_telp" required>
        </li>
        <li><button type="submit" name="submit">Tambah Data</button></li>
    </ul>
    </form>
</body>
</html>