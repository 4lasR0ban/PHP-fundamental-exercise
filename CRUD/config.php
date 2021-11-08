<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "crud";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (mysqli_connect_errno()){
        echo "Koneksi gagal: " . mysqli_connect_error();
    } 

    function query($data){
        global $conn;
        $res = mysqli_query($conn, $data);
        $rows = [];
        while($row = mysqli_fetch_assoc($res)){
            $rows[] =  $row;
        }
        return $rows;
    }

    function hapus($id){
        global $conn;
        $res = mysqli_query($conn, "DELETE FROM kelas_matkul WHERE id_kelas = $id");
        return mysqli_affected_rows($conn);
    }

    function tambah($user){
        global $conn;
        $kelas = $user['nama'];
        $dosen = $user['dosen'];
        $sks   = $user['sks'];
        $desc  = $user['desc'];

        $res = mysqli_query($conn, "SELECT * FROM kelas_matkul WHERE nama_kelas = '$kelas'");
        
        if(mysqli_fetch_assoc($res)){
            echo "
                <script>
                    alert('Kelas sudah tersedia');
                </script>
            ";

            return false;
        }

        mysqli_query($conn, "INSERT INTO kelas_matkul VALUES('', '$kelas', '$dosen', '$sks', '$desc')");
        return mysqli_affected_rows($conn);
    }
    
    function ubah($data){
        global $conn;
        $id = $data['id'];
        $kelas = $data['nama'];
        $dosen = $data['dosen'];
        $sks   = $data['sks'];
        $desc  = $data['desc'];

        $res = mysqli_query($conn, "UPDATE kelas_matkul SET nama_kelas = '$kelas', 
        dosen = '$dosen', sks = '$sks', deskripsi = '$desc' WHERE id_kelas = $id");
        return mysqli_affected_rows($conn);
    }

    function regis($data){
        global $conn;
        $nama = $data['nama'];
        $nim = $data['nim'];
        $opsi = $data['opsi'];

        $kelas = mysqli_query($conn, "SELECT * FROM kelas INNER JOIN kelas_mahasiswa ON kelas.id_mahasiswa = kelas_mahasiswa.id_mahasiswa");
        $res = mysqli_query($conn, "SELECT * FROM kelas_mahasiswa WHERE nama = '$nama'");
        
        if(mysqli_fetch_assoc($res)){
            echo "
                <script>
                    alert('Nama sudah terdaftar');
                </script>
            ";

            return false;
        }
        
        $k = query( "SELECT * FROM kelas INNER JOIN kelas_mahasiswa ON kelas.id_mahasiswa = kelas_mahasiswa.id_mahasiswa");

        foreach($k as $row){
            $id = $row['id_mahasiswa']; 
        }

        mysqli_query($conn, "INSERT INTO kelas VALUES('$opsi', '$id')");
        mysqli_query($conn, "INSERT INTO kelas_mahasiswa VALUES('', '$nama', '$nim')");
        return mysqli_affected_rows($conn);
    }
?>