<?php
    $pertama = $_POST['pertama'] + 0;
    $kedua = $_POST['kedua'] + 0;
    $operator = $_POST['operasi'];

    switch($operator){
        case "tambah":
            echo "hasil: ". $pertama + $kedua;
            break;
        case "kurang":
            echo "hasil: ". $pertama - $kedua;
            break;
        case "kali":
            echo "hasil: ". $pertama * $kedua;
            break;
        case "bagi":
            echo "hasil: ". $pertama / $kedua;
            break;
        case "pangkat":
            echo "hasil: ". pow($pertama, $kedua);
            break;
        default:
            echo "Pilih operator";
            break;
    }


?>
