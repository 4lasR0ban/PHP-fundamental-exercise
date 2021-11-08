<?php
    require "config.php";
    /*
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $dosen = $_POST['dosen'];
        $sks = $_POST['sks'];
        $desc = $_POST['desc'];

        $res = mysqli_query($conn, "UPDATE kelas_matkul SET nama_kelas = '$nama', dosen = '$dosen', sks = '$sks', deskripsi = '$desc'")[0];
        header("Location: index.php");
    }
    */

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    } else {
        $id = 0;
    }

    $res = mysqli_query($conn, "SELECT * FROM kelas_matkul WHERE id_kelas = $id");

    while($user_data = mysqli_fetch_assoc($res)){
        $id = $user_data['id_kelas'];
        $nama = $user_data['nama_kelas'];
        $dosen = $user_data['dosen'];
        $sks = $user_data['sks'];
        $desc = $user_data['deskripsi'];
    }

    if(isset($_POST['submit'])){
        // var_dump(mysqli_affected_rows($conn));
        if(ubah($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil diubah!');
                    document.location.href='index.php';
                </script>
                ";
        } else {
            echo "
            <script>
                alert('Data Gagal diubah!');
            </script>
            ";
        }
    }
    

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
            <h1>Tambah Data</h1>
        </div>
        <div class="card-body">
    <form method="POST" action="ubah.php">
        <input type="hidden" name="id" value="<?= $_GET['id']; ?> ">
        <div class="mb-3">
            <label class="form-label">Nama Kelas</label>
            <input type="text" name="nama" class="form-control"  value="<?= $nama; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Dosen</label>
            <input type="text" name="dosen" class="form-control" value="<?= $dosen; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">SKS</label>
            <input type="text" name="sks" class="form-control" value="<?= $sks; ?>">
        </div>
        <div class="mb-3">
            <div class="form-floating">
                <textarea class="form-control" name="desc" placeholder="Deskripsi" id="floatingTextarea" value="<?= $desc; ?>"></textarea>
                <label for="floatingTextarea">Deskripsi</label>
            </div>
        </div>
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