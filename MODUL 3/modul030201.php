<?php
    function hitungGaji($gol, $masaKerja){
        $tipe = strtoupper($gol);
        switch($tipe){
            case "A":
                if (floor($masaKerja) < 10){
                    echo "Gaji Karyawan Gol A, < 10 thn: Rp. 5.000.000";
                } else {
                    echo "Gaji Karyawan Gol A, >= 10 thn: Rp. 7.000.000";
                }
                break;
            case "B":
                if (floor($masaKerja) < 10){
                    echo "Gaji Karyawan Gol B, < 10 thn: Rp. 6.000.000";
                } else {
                    echo "Gaji Karyawan Gol B, >= 10 thn: Rp. 8.000.000";
                }
                break;
            default:
                echo "Golongan atau gaji tidak sesuai!";
        }
    }

    hitungGaji("a", 11.5);
?>