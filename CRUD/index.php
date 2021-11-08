<?php
    require "config.php";
    $i = 1;
    $j = 1;
    $matkul = query("SELECT * FROM kelas_matkul");
    $mahasiswa = query("SELECT * FROM kelas_mahasiswa INNER JOIN kelas ON kelas.id_mahasiswa = kelas_mahasiswa.id_mahasiswa");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Kegiatan 1</title>
  </head>
  <body>

  <div class="container-fluid">
  <a href="tambah.php">Tambah data kelas</a> | 
  <a href="regis.php">Registrasi Mahasiswa</a>

  <h1>Daftar Kelas</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">ID Matkul</th>
      <th scope="col">Nama Matkul</th>
      <th scope="col">Dosen</th>
      <th scope="col">SKS</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <?php
    foreach($matkul as $data){
  ?>
  <tbody>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $data['id_kelas'] ?></td>
      <td><?= $data['nama_kelas'] ?></td>
      <td><?= $data['dosen'] ?></td>
      <td><?= $data['sks'] ?></td>
      <td><?= $data['deskripsi'] ?></td>
      <td>
          <a href="ubah.php?id= <?= $data['id_kelas']; ?> ">Edit</a> |
          <a href="hapus.php?id= <?= $row['id_kelas']; ?> "> Hapus</a>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Kelas</th>
    </tr>
  </thead>
  
  <h1>Daftar Mahasiswa</h1>
  <?php
    foreach($mahasiswa as $data){
  ?>
  <tbody>
    <tr>
      <th scope="row"><?= $j++; ?></th>
      <td><?= $data['id_mahasiswa']; ?></td>
      <td><?= $data['nama']; ?></td>
      <td><?= $data['nim']; ?></td>
      <td><?= $data['id_kelas']; ?></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>