<?php
require'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) : ?>

    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </td>
        <td><img src="img/<?= $row["Gambar"]; ?> " width="50"></td>
        <td><?= $row["NRP"]; ?></td>
        <td><?= $row["Nama"]; ?></td>
        <td><?= $row["Email"]; ?></td>
        <td><?= $row["Jurusan"]; ?></td>
    </tr>
    
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>

</body>
</html>