<?php
session_start();
include 'koneksi.php';
?>

<?php 
$result = mysqli_query($tid, "SELECT * FROM tabel_data_mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="data_mahasiswa">
    <h1>Data Mahasiswa</h1>
    </div>

    <div class="tambah_data">
        <a href="tambah_data.php" class="button">Tambah Data Mahasiswa</a>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>NIM Mahasiswa</th>
            <th>Nama Mahasiswa</th>
            <th>Foto</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($mahasiswa = mysqli_fetch_assoc($result)) : ?>
            <tr> 
                <td><?php echo $i; ?></td> 
                <td><?php echo $mahasiswa["nim_mahasiswa"]; ?></td> 
                <td><?php echo $mahasiswa["Nama_mahasiswa"]; ?></td> 
                <td><img width="50" src="<?php echo $mahasiswa["Foto_mahasiswa"]; ?>" alt="Foto Mahasiswa"></td> 
                <td><?php echo $mahasiswa["fakultas"]; ?></td> 
                <td><?php echo $mahasiswa["Prodi"]; ?></td> 
                <td>
                    <a href="ubah">ubah</a>
                    <a href="hapus">hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
