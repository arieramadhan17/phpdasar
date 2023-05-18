<?php 
$mahasiswa = [
    [
        "nama" => "Arie Ramadhan", 
        "nrp" => "123456789",
        "email" => "arieramadhan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "arie.jpg"],
    [
        "nama" => "Rizaldy",
        "nrp" => "321458769",
        "email" => "rizaldy@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "rizal.jpg"],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>