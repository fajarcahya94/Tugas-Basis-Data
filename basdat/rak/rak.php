<?php 
    require "../fungsi/fungsi.php";

    $rak = query ("SELECT * FROM rak, buku WHERE rak.id_buku = buku.id_buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Rak</title>
</head>
<body>
    <h1>Daftar Rak</h1>
    <ul>
        <li><a href="../rak/tambahrak.php">Tambah Rak</a></li>
        <li><a href="../petugas/petugas.php">Daftar Petugas</a></li>
        <li><a href="../peminjam/peminjam.php">Daftar Peminjam</a></li>
        <li><a href="../buku/buku.php">Daftar Buku</a></li>
    </ul>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Rak</th>
            <th>Lokasi Rak</th>
            <th>Judul Buku</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ( $rak as $rk) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $rk ['nama_rak'] ?></td>
                <td><?= $rk ['lokasi_rak'] ?></td>
                <td><?= $rk ['judul_buku'] ?></td>
                <td><a href="editrak.php?id_rak=<?= $rk['id_rak']; ?>">Edit</a></td>
                <td><a href="hapusrak.php?id_rak=<?= $rk['id_rak']; ?>" onclick="return confirm('Apakah anda ingin menghapus?')">Hapus</a></td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
        
    </table>
</body>
</html>