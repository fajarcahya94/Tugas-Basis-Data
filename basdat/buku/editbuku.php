<?php
    require "../fungsi/fungsi.php";

    $idbuku = $_GET['id_buku'];

    $bku = query("SELECT * FROM buku WHERE id_buku = $idbuku")[0];

    if (isset($_POST["submit"])) {
        
        $judul = $_POST["judul"];
        $penulis = $_POST["penulis"];
        $tahun = $_POST["tahun"];
        
        $query = "UPDATE buku SET
                judul_buku = '$judul',
                penulis_buku = '$penulis',
                tahun_penerbit = '$tahun'
                WHERE id_buku = $idbuku
        ";

        mysqli_query($db, $query);

        if (mysqli_affected_rows($db) > 0) {
            header("Location: ../buku/buku.php");
        } else {
            echo "Buku Gagal Diubah";
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
        <input type="hidden" name="id" value="<?= $bku[0]["id_buku"] ?>">
        <li>
            <label for="judul">Judul Buku :</label>
            <input type="text" name="judul" id="judul" value="<?= $bku["judul_buku"] ?>" required autofocus>
        </li>
        <li>
            <label for="penulis">Penulis Buku :</label>
            <input type="text" name="penulis" id="penulis" value="<?= $bku["penulis_buku"] ?>" required>
        </li>
        <li>
            <label for="tahun">Tahun Terbit :</label>
            <input type="text" name="tahun" id="tahun" value="<?= $bku["tahun_penerbit"] ?>" required>
        </li>
        <li><button type="submit" name="submit">Edit Data</button></li>
    </ul>
    </form>
</body>
</html>