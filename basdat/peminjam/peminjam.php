<?php 
    include "../fungsi/fungsi.php";

    $peminjam = query ("SELECT * FROM peminjam");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjam</title>
</head>
<body>
    <h1>Daftar Peminjam</h1>
    <ul>
        <li><a href="../peminjam/tambahpeminjam.php">Tambah Peminjam</a></li>
        <li><a href="../petugas/petugas.php">Daftar Petugas</a></li>
        <li><a href="../peminjaman/peminjaman.php">Daftar Peminjaman</a></li>
        <li><a href="../buku/buku.php">Daftar Buku</a></li>
        <li><a href="../rak/rak.php">Daftar Rak</a></li>
    </ul>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan Anggota</th>
            <th>Telpon</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ( $peminjam as $pmj) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $pmj ['nama_anggota'] ?></td>
                <td><?= $pmj ['jenis_kelamin'] ?></td>
                <td><?= $pmj ['jurusan_anggota'] ?></td>
                <td><?= $pmj ['no_telp'] ?></td>
                <td><a href="editpeminjam.php?id_anggota=<?= $pmj['id_anggota']; ?>">Edit</a></td>
                <td><a href="hapuspeminjam.php?id_anggota=<?= $pmj['id_anggota']; ?>" onclick="return confirm('Apakah anda ingin menghapus?')">Hapus</a></td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>