<?php
    require "config.php";
    $i = 0;
    $query = mysqli_query($conn, "SELECT * FROM kelas
    INNER JOIN kelas_mahasiswa ON kelas.id_mahasiswa = kelas_mahasiswa.id_mahasiswa
    INNER JOIN kelas_matkul ON kelas.id_matkul = kelas_matkul.id_matkul");
    //print_r($query);
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
      <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">NIM</th>
      <th scope="col">Matkul</th>
    </tr>
  </thead>

  <?php
    while($data = mysqli_fetch_array($query)){
  ?>
  <tbody>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $data['nama'] ?></td>
      <td><?= $data['nim'] ?></td>
      <td><?= $data['nama_kelas'] ?></td>
    </tr>
  </tbody>
  <?php } ?>
</table>

  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>