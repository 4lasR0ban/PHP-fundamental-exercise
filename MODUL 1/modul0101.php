<!DOCTYPE html>
<html>  
    <head>Contoh</head>
    <body>
    <h1>Latihan 1</h1>
        <?php
            //tanda petiknya salah
            echo "<p>Hello world</p>";
        ?>
    <h1>Latihan 2</h1>
        <?php
            $a = '14';
            $b = '11';
            $c = $a + $b;
            //kurang tanda petik dan concat
            echo ('Hasil perhitungan adalah '.$c);
        ?>
    <h1>Latihan 3</h1>
        <?php
            //penulisan seharusnya menggunakan tanda "=", kurang ";", dan kurang ("...")
            $z = ["nama"=>"agus","nim"=>"k1424567","alamat"=>"Solo","bidang"=>"RPL"];
            echo $z["nama"];
        ?>
    <h1>Latihan 4</h1>
        <?php
            $objek = new stdClass();
            //tanda "=" diubah menjadi "->"
            $objek -> name = "Steven William";
            $objek -> age = 30;
            $objek -> city = "Kartosuro";
            //kurang syntax json_decode(json_encode(var));
            $myJSON = json_encode($objek);
            //saya ubah jadi print_r
            print_r($myJSON);
        ?>

<!--
    OUTPUT:

    LATIHAN 1
    Hello world

    LATIHAN 2
    Hasil perhitungan adalah 25

    LATIHAN 3
    agus

    LATIHAN 4
    {"name":"Steven William","age":30,"city":"Kartosuro"}


-->



</body>
</html>