<?php
    require "../fungsi/fungsi.php";

    if (isset($_POST["submit"])) {
       if (tambahbuku($_POST > 0)) {
            header("Location: ../buku/buku.php");
        } else {
            echo "Buku Gagal Ditambahkan";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form action="" method="POST">
    <ul>
        <li>
            <label for="judul">Judul Buku :</label>
            <input type="text" name="judul" id="judul" required autofocus>
        </li>
        <li>
            <label for="penulis">Penulis :</label>
            <input type="text" name="penulis" id="penulis" required>
        </li>
        <li>
            <label for="tahun">Tahun Terbit :</label>
            <input type="number" name="tahun" id="tahun" required>
        </li>
        <li><button type="submit" name="submit">Tambah Data</button></li>
    </ul>
    </form>
</body>
</html>