<?php
    require "../fungsi/fungsi.php";

    $idanggota = $_GET['id_anggota'];

    $pmjm = query("SELECT * FROM peminjam WHERE id_anggota = $idanggota")[0];

    if (isset($_POST["submit"])) {
        
        $anggota = $_POST["nama_anggota"];
        $jeniskelamin = $_POST["jenis_kelamin"];
        $jurusan = $_POST["jurusan_anggota"];
        $telp = $_POST["no_telp"];
        
        $query = "UPDATE peminjam SET
                nama_anggota = '$anggota',
                jenis_kelamin = '$jeniskelamin',
                jurusan_anggota = '$jurusan',
                no_telp = '$telp'
                WHERE id_anggota = $idanggota
        ";

        mysqli_query($db, $query);

        if (mysqli_affected_rows($db) > 0) {
            header("Location: ../peminjam/peminjam.php");
        } else {
            echo "Data Gagal Diubah";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="" method="POST">
    <ul>
        <input type="hidden" name="id" value="<?= $pmjm[0]["id_anggota"] ?>">
        <li>
            <label for="nama_anggota">Nama Anggota :</label>
            <input type="text" name="nama_anggota" id="nama_anggota" value="<?= $pmjm["nama_anggota"] ?>" required autofocus>
        </li>
        <li>
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?= $pmjm["jenis_kelamin"] ?>" required>
        </li>
        <li>
            <label for="jurusan_anggota">Jurusan Anggota :</label>
            <input type="text" name="jurusan_anggota" id="jurusan_anggota" value="<?= $pmjm["jurusan_anggota"] ?>" required>
        </li>
        <li>
            <label for="no_telp">Telpon :</label>
            <input type="text" name="no_telp" id="no_telp" value="<?= $pmjm["no_telp"] ?>" required>
        </li>
        <li><button type="submit" name="submit">Edit Data</button></li>
    </ul>
    </form>
</body>
</html>