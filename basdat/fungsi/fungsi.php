<?php 

// koneksi database

$db = mysqli_connect("localhost", "root", "", "basdat");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    
    return $rows;
}

// Fungsi Tambah

function tambahpetugas() {
    global $db;
    $petugas = htmlspecialchars($_POST["petugas"]);
    $jabatan = htmlspecialchars($_POST["jabatan"]);
    $telp = htmlspecialchars($_POST["telp"]);

    $query = "INSERT INTO petugas VALUES ('', '$petugas', '$jabatan', '$telp')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambahpeminjam() {
    global $db;
    $anggota = htmlspecialchars($_POST["nama_anggota"]);
    $jeniskelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $jurusan = htmlspecialchars($_POST["jurusan_anggota"]);
    $telp = htmlspecialchars($_POST["no_telp"]);

    $query = "INSERT INTO peminjam VALUES ('', '$anggota', '$jeniskelamin', '$jurusan', '$telp')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambahbuku() {
    global $db;
    $judul = htmlspecialchars($_POST["judul"]);
    $penulis = htmlspecialchars($_POST["penulis"]);
    $tahun = htmlspecialchars($_POST["tahun"]);

    $query = "INSERT INTO buku VALUES ('', '$judul', '$penulis', '$tahun')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambahrak() {
    global $db;
    $rak = htmlspecialchars($_POST["rak"]);
    $lokasi = htmlspecialchars($_POST["lokasi"]);
    $idbuku = ($_POST["id_buku"]);

    $query = "INSERT INTO rak VALUES ('', '$rak', '$lokasi', '$idbuku')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function tambahpeminjaman() {
    global $db;
    $tanggalpinjam = htmlspecialchars($_POST["tanggalpinjam"]);
    $tanggalkembali = htmlspecialchars($_POST["tanggalkembali"]);
    $petugas = ($_POST["petugas"]);
    $peminjam = ($_POST["peminjam"]);
    $buku = ($_POST["buku"]);

    $query = "INSERT INTO peminjaman VALUES ('', '$tanggalpinjam', '$tanggalkembali', '$petugas', '$peminjam', '$buku')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// Fungsi Hapus

function hapuspetugas($id) {
    global $db;
    mysqli_query($db, "DELETE FROM petugas WHERE id_petugas = $id");

    return mysqli_affected_rows($db);
}

function hapuspeminjam($id) {
    global $db;
    mysqli_query($db, "DELETE FROM peminjam WHERE id_anggota = $id");

    return mysqli_affected_rows($db);
}

function hapusbuku($id) {
    global $db;
    mysqli_query($db, "DELETE FROM buku WHERE id_buku = $id");

    return mysqli_affected_rows($db);
}

function hapusrak($id) {
    global $db;
    mysqli_query($db, "DELETE FROM rak WHERE id_rak = $id");

    return mysqli_affected_rows($db);
}

function hapuspeminjaman($id) {
    global $db;
    mysqli_query($db, "DELETE FROM peminjaman WHERE id_peminjaman = $id");

    return mysqli_affected_rows($db);
}

?>