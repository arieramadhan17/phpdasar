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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
       <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
       </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>