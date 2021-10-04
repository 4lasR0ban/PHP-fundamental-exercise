<?php
    function buatBintangLagiTapiReverse($n){
        for ($i = $n; $i >= 1; $i--){
            for ($j = 1; $j <= $i; $j++){
                echo "*";
            }
        echo "\n <br>";
        }
    }
    echo "<h3>Bintang 4 Reverse</h3>";
    buatBintangLagiTapiReverse(4);
    echo "<h3>Bintang 5 Reverse</h3>";
    buatBintangLagiTapiReverse(5);
?>