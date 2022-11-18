<?php
    require "../fungsi/fungsi.php";

    $idrak = $_GET['id_rak'];

    $rk = query("SELECT * FROM rak WHERE id_rak = $idrak")[0];

    if (isset($_POST["submit"])) {
        $rak = $_POST["rak"];
        $lokasi = $_POST["lokasi"];
        $buku = $_POST["id_buku"];
        
        $query = "UPDATE rak SET
                nama_rak = '$rak',
                lokasi_rak = '$lokasi',
                id_buku = '$buku'
                WHERE id_rak = $idrak
        ";

        mysqli_query($db, $query);

        if (mysqli_affected_rows($db) > 0) {
            header("Location: ../rak/rak.php");
        } else {
            echo "Rak Gagal Diubah";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rak</title>
</head>
<body>
    <h1>Tambah Rak</h1>
    <form action="" method="POST">
    <ul>
        <li>
            <label for="rak">Nama Rak :</label>
            <input type="text" name="rak" id="rak" required autofocus>
        </li>
        <li>
            <label for="lokasi">Lokasi Rak :</label>
            <input type="text" name="lokasi" id="lokasi" required>
        </li>
        <li>
            <label for="id_buku">Judul Buku :</label>
            <select name="id_buku" id="id_buku">
                <option>Pilih Buku</option>
                <?php
                    $query = mysqli_query($db, "SELECT * FROM buku");
                    while($data = mysqli_fetch_array($query)) {
                        echo "<option value=$data[id_buku]>$data[judul_buku]</option>";
                    }
                ?>
            </select>
            <!-- <input type="number" name="idbuku" id="idbuku" required> -->
        </li>
        <li><button type="submit" name="submit">Tambah Rak</button></li>
    </ul>
    </form>
</body>
</html>