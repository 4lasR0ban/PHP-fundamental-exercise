<?php
    require "config.php";

    if(isset($_POST['submit'])){

        if(regis($_POST) > 0){
            echo "
                <script>
                    alert('Data berhasil ditambah!');
                    document.location.href= 'index.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('Data gagal ditambah!');
            </script>
            ";
        }
    }

    $opsi = mysqli_query($conn, "SELECT * FROM kelas_matkul");

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

  <div class="container-fluid d-flex justify-content-center">
    <div class="card col-md-6">
        <div class="card-header">
            <h1>Registrasi Mahasiswa</h1>
        </div>
        <div class="card-body">
    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" required>
        </div>
        <select name="opsi" class="form-select mb-3" aria-label="Default select example">
            <option selected>Pilih Mata kuliah</option>
            <?php
                while($data = mysqli_fetch_array($opsi)){
                    echo "<option name='id' value='". $data['id_kelas'] . "'>" .$data['nama_kelas'] . "</option>";
                }
            ?>
        </select>
         <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
        </div>
    </form>
    </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
