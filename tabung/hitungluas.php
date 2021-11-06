<?php
    $nama = $_GET['n'];
    $diameter = $_GET['d'];
    $tinggi = $_GET['t'];

    $jari = $diameter/2;
    $luasPermukaan = 2 * pi() * $jari * ($jari + $tinggi);

    echo "Luas tabung ".$nama." dengan diameter ".$diameter." dan tinggi ".$tinggi." adalah ".round($luasPermukaan, 2)." satuan luas.";

?>