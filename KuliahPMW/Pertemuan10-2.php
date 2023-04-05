<?php
//koneksi ke database
$link = mysqli_connect('localhost', 'root', '', 'data-tugas-php');

//querry isi tabel database
$result = mysqli_query($link, "SELECT * FROM mahasiswa");


// //ubah data kedalam array numerik
// mysqli_fetch_row($result);

//ubah data kedalam array assosiatif
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


//tampung kevariabel mahasiswa
$mahasiswa = $rows;


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3> Daftar Mahasiswa </h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mhs['gambar']; ?>"></td>
        <td><?= $mhs['nim']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
        <td>
          <a href="">lihat</a> | <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>