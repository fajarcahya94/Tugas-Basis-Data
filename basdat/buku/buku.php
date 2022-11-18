<?php 
    require "../fungsi/fungsi.php";

    $buku = query ("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        <li><a href="../buku/tambahbuku.php">Tambah Buku</a></li>
        <li><a href="../petugas/petugas.php">Daftar Petugas</a></li>
        <li><a href="../peminjam/peminjam.php">Daftar Peminjam</a></li>
        <li><a href="../rak/rak.php">Daftar Rak</a></li>
    </ul>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis Buku</th>
            <th>Tahun Terbit</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ( $buku as $bk) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $bk ['judul_buku'] ?></td>
                <td><?= $bk ['penulis_buku'] ?></td>
                <td><?= $bk ['tahun_penerbit'] ?></td>
                <td><a href="editbuku.php?id_buku=<?= $bk['id_buku']; ?>">Edit</a></td>
                <td><a href="hapusbuku.php?id_buku=<?= $bk['id_buku']; ?>" onclick="return confirm('Apakah anda ingin menghapus?')">Hapus</a></td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
        
    </table>
</body>
</html>