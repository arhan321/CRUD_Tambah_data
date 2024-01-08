<?php
session_start();
include 'koneksi.php';

if (isset($_POST["submit"])) {
    $nim = $_POST["nim_mahasiswa"];
    $nama_mhs = $_POST["Nama_mahasiswa"];
    $fakultas = $_POST["fakultas"];
    $prodi = $_POST["Prodi"];
    $email = $_POST["email"];

    $insert_data = "INSERT INTO tabel_data_mahasiswa 
                    (Nama_mahasiswa, nim_mahasiswa, fakultas, Foto_mahasiswa, Prodi, email) 
                    VALUES
                    ('$nama_mhs', '$nim', '$fakultas', '', '$prodi', '$email')";

    mysqli_query($tid, $insert_data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    
<form action="" method="post"> 
<ul>
<li>
    <label for="nim_mahasiswa">Nim mahasiswa : </label>
    <input type="text" name="nim_mahasiswa" id="nim_mahasiswa">
</li>

<li>
    <label for="Nama_mahasiswa">Nama mahasiswa : </label>
    <input type="text" name="Nama_mahasiswa" id="nama_mahasiswa">
</li>

<li>
    <label for="fakultas">fakultas : </label>
    <input type="text" name="fakultas" id="fakultas">
</li>

<li>
    <label for="Prodi">prodi : </label>
    <input type="text" name="Prodi" id="Prodi">
</li>

<li>
    <label for="email">email : </label>
    <input type="text" name="email" id="email">
</li>

<li>
    <div class="button">
    <button type="submit" name="submit"> tambah data</button>
    </div>
</li>

<li>
    <div class="button_back">
        <a href="crud.php"><button type="button">Kembali</button></a>
    </div>
</li>
</ul>
</form>
</body>
</html>
