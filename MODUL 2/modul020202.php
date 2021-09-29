<table border = 1 style = 'border-color: blue'>
<?php
    // praktikum 030202
    for($i = 1; $i <= 5; $i++){
        echo "<tr>";
        for($j = 1; $j <= 6; $j++){
            $k = $i + $j;
            if($k % 2 == 1){
                echo "<td style=\"color: blue;\">";
            } else {
                echo "<td style=\"background-color: lightblue;\">";
            }
            echo "elemen $i - $j</td> \n";
        }
        echo "</tr>";
    }

?>
</table>