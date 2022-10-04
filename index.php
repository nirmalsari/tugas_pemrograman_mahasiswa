<?php
require 'functions.php';
$mahasiwa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpaddingg="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>jurusan</th>
        <th>Fakultas</th>
        <th>Gambar</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ( $mahasiwa as $row) : ?>
    <tr>
        <td><?= $i ?></td>
        <td><?= $row ["Nim"]; ?></td>
        <td><?= $row ["Nama"]; ?></td>
        <td><?= $row ["Email"]; ?></td>
        <td><?= $row ["jurusan"]; ?></td>
        <td><?= $row ["Fakultas"]; ?></td>
        <td><img src="img/<?= $row["Gambar"]; ?> " width ="50">
    </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>
</body>
</html>