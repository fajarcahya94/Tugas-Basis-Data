<?php
    require "../fungsi/fungsi.php";

    if (isset($_POST["submit"])) {
       if (tambahpetugas($_POST > 0)) {
            header("Location: ../petugas/petugas.php");
        } else {
            echo "Data Gagal Ditambah";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="POST">
    <ul>
        <li>
            <label for="petugas">Nama Petugas :</label>
            <input type="text" name="petugas" id="petugas" required autofocus>
        </li>
        <li>
            <label for="jabatan">Jabatan :</label>
            <input type="text" name="jabatan" id="jabatan" required>
        </li>
        <li>
            <label for="telp">Telpon :</label>
            <input type="number" name="telp" id="telp" required>
        </li>
        <li><button type="submit" name="submit">Tambah Data</button></li>
    </ul>
    </form>
</body>
</html>