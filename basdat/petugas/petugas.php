<?php 
    require "../fungsi/fungsi.php";

    $petugas = query ("SELECT * FROM petugas");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Petugas</title>
</head>
<body>
    <h1>Daftar Petugas</h1>
    <ul>
        <li><a href="../petugas/tambahpetugas.php">Tambah Petugas</a></li>
        <li><a href="../peminjam/peminjam.php">Daftar Peminjam</a></li>
        <li><a href="../peminjaman/peminjaman.php">Daftar Peminjaman</a></li>
        <li><a href="../buku/buku.php">Daftar Buku</a></li>
        <li><a href="../rak/rak.php">Daftar Rak</a></li>
    </ul>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Telpon</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ( $petugas as $hasil) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $hasil ['nama_petugas'] ?></td>
                <td><?= $hasil ['jabatan_petugas'] ?></td>
                <td><?= $hasil ['no_telp'] ?></td>
                <td><a href="editpetugas.php?id_petugas=<?= $hasil['id_petugas']; ?>">Edit</a></td>
                <td><a href="hapuspetugas.php?id_petugas=<?= $hasil['id_petugas']; ?>" onclick="return confirm('Apakah anda ingin menghapus?')">Hapus</a></td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
        
    </table>
</body>
</html>