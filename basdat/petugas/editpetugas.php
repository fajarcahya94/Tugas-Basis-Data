<?php
    require "../fungsi/fungsi.php";

    $idpetugas = $_GET['id_petugas'];

    $ptgs = query("SELECT * FROM petugas WHERE id_petugas = $idpetugas")[0];

    if (isset($_POST["submit"])) {
        $petugas = $_POST["petugas"];
        $jabatan = $_POST["jabatan"];
        $telp = $_POST["telp"];
        
        $query = "UPDATE petugas SET
                nama_petugas = '$petugas',
                jabatan_petugas = '$jabatan',
                no_telp = '$telp'
                WHERE id_petugas = $idpetugas
        ";

        mysqli_query($db, $query);

        if (mysqli_affected_rows($db) > 0) {
            header("Location: ../petugas/petugas.php");
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
        <li>
            <label for="petugas">Nama Petugas :</label>
            <input type="text" name="petugas" id="petugas" value="<?= $ptgs["nama_petugas"] ?>" required autofocus>
        </li>
        <li>
            <label for="jabatan">Jabatan :</label>
            <input type="text" name="jabatan" id="jabatan" value="<?= $ptgs["jabatan_petugas"] ?>" required>
        </li>
        <li>
            <label for="telp">Telpon :</label>
            <input type="number" name="telp" id="telp" value="<?= $ptgs["no_telp"] ?>" required>
        </li>
        <li><button type="submit" name="submit">Edit Data</button></li>
    </ul>
    </form>
</body>
</html>