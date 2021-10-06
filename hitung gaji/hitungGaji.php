<?php
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $kinerja = $_POST['kinerja'];

        if ($kinerja < 50){
            $persen = 0.5;
        } else if ($kinerja <= 60){
            $persen = 0.6;
        } else if ($kinerja <= 70){
            $persen = 0.7;
        } else if ($kinerja <= 80){
            $persen = 0.8;
        } else if ($kinerja <= 90){
            $persen = 0.9;
        } else if ($kinerja >= 91){
            $persen = 1;
        }
    
    function tabel($gaji, $nama, $kinerja){
        echo "<table border=1 style='text-align:center;';>";
        echo "<tr><td style='padding: 5px; font-weight: bold;'>Nama Pegawai</td><td>$nama</td></tr>";
        echo "<tr><td style='padding: 5px; font-weight: bold;'>Kinerja</td><td>$kinerja %</td></tr>";
        echo "<tr><td style='padding: 5px; font-weight: bold;'>Gaji</td><td>$gaji</td></tr>";
        echo "</table>";
    }

    switch($jabatan){
        case "jpr":
            $gaji = 4000000 * $persen;
            tabel($gaji, $nama, $kinerja);
            break;
        case "spr":
            $gaji = 6000000 * $persen;
            tabel($gaji, $nama, $kinerja);
            break;
        case "cto":
            $gaji = 8000000 * $persen;
            tabel($gaji, $nama, $kinerja);
            break;
        case "man":
            $gaji = 10000000 * $persen;
            tabel($gaji, $nama, $kinerja);
            break;
        default:
            echo "Jabatan tidak terdefinisi";
    }
?>