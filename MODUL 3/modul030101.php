<?php
    function buatBintang($n){
        for ($i = 1; $i <= $n; $i++){
            for ($j = 1; $j <= $i; $j++){
                echo "*";
            }
        echo "\n <br>";
        }
    }

    echo "<h3>Bintang 4</h3>";
    buatBintang(4);
    echo "<h3>Bintang 5</h3>";
    buatBintang(5);
?>