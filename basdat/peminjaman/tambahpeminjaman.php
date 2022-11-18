<?php
    require "../fungsi/fungsi.php";

    if (isset($_POST["submit"])) {
       if (tambahpeminjaman($_POST > 0)) {
            header("Location: ../peminjaman/peminjaman.php");
        } else {
            echo "Peminjaman Gagal Ditambah";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjaman</title>
</head>
<body>
    <h1>Tambah Peminjaman</h1>
    <form action="" method="POST">
    <ul>
        <li>
            <label for="tanggalpinjam">Tanggal Peminjaman :</label>
            <input type="date" name="tanggalpinjam" id="tanggalpinjam" required autofocus>
        </li>
        <li>
            <label for="tanggalkembali">Tanggal Kembali :</label>
            <input type="date" name="tanggalkembali" id="tanggalkembali" required>
        </li>
        <li>
            <label for="petugas">Nama Petugas :</label>
            <select name="petugas" id="petugas" required>
                <option>Pilih Petugas</option>
                <?php
                    $query = mysqli_query($db, "SELECT * FROM petugas");
                    while($data = mysqli_fetch_array($query)) {
                        echo "<option value=$data[id_petugas]>$data[nama_petugas]</option>";
                    }
                ?>
            </select>
        </li>
        <li>
            <label for="peminjam">Nama Peminjam :</label>
            <select name="peminjam" id="peminjam" required>
                <option>Pilih Peminjam</option>
                <?php
                    $query = mysqli_query($db, "SELECT * FROM peminjam");
                    while($data = mysqli_fetch_array($query)) {
                        echo "<option value=$data[id_anggota]>$data[nama_anggota]</option>";
                    }
                ?>
            </select>
        </li>
        <li>
            <label for="buku">Judul Buku :</label>
            <select name="buku" id="buku" required>
                <option>Pilih Buku</option>
                <?php
                    $query = mysqli_query($db, "SELECT * FROM buku");
                    while($data = mysqli_fetch_array($query)) {
                        echo "<option value=$data[id_buku]>$data[judul_buku]</option>";
                    }
                ?>
            </select>
        </li>
        <li><button type="submit" name="submit">Tambah Peminjaman</button></li>
    </ul>
    </form>
</body>
</html>