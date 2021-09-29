<table border = 1>
<?php
    // praktikum 030201
    for($i = 1; $i <= 5; $i++){
        echo "<tr>";
        for($j = 1; $j <= 6; $j++){
            $k = $i * $j;
            echo "<td>elemen $i - $j</td> \n";
        }
        echo "</tr>";
    }

?>
</table>