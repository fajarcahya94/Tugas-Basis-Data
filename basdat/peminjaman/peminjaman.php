<?php 
    require "../fungsi/fungsi.php";

    $peminjaman = query("SELECT p.id_peminjaman, p.tanggal_peminjaman, p.tanggal_kembali, ptgs.nama_petugas, pmjm.nama_anggota, bk.judul_buku
                        FROM peminjaman p
                        INNER JOIN petugas ptgs ON p.id_petugas = ptgs.id_petugas
                        INNER JOIN peminjam pmjm ON p.id_anggota = pmjm.id_anggota
                        INNER JOIN buku bk ON p.id_buku = bk.id_buku
    ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Peminjaman</title>
</head>
<body>
    <h1>Daftar Peminjaman</h1>
    <ul>
        <li><a href="../peminjaman/tambahpeminjaman.php">Tambah Peminjaman</a></li>
        <li><a href="../petugas/petugas.php">Daftar Petugas</a></li>
        <li><a href="../peminjam/peminjam.php">Daftar Peminjam</a></li>
        <li><a href="../buku/buku.php">Daftar Buku</a></li>
        <li><a href="../rak/rak.php">Daftar Rak</a></li>
    </ul>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Nama Petugas</th>
            <th>Nama Peminjam</th>
            <th>Judul Buku</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ( $peminjaman as $pmjman) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $pmjman ['tanggal_peminjaman'] ?></td>
                <td><?= $pmjman ['tanggal_kembali'] ?></td>
                <td><?= $pmjman ['nama_petugas'] ?></td>
                <td><?= $pmjman ['nama_anggota'] ?></td>
                <td><?= $pmjman ['judul_buku'] ?></td>
                <td><a href="editpeminjaman.php?id_peminjaman=<?= $pmjman['id_peminjaman']; ?>">Edit</a></td>
                <td><a href="hapuspeminjaman.php?id_peminjaman=<?= $pmjman['id_peminjaman']; ?>" onclick="return confirm('Apakah anda ingin menghapus?')">Hapus</a></td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
        
    </table>
</body>
</html>