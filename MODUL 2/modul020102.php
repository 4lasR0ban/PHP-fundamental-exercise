<?php
    // praktikum 030102
    for($i = 1; $i <= 6; $i++){
        if($i % 2 == 0){
            echo "<h$i><font color=blue>Mahasiswa $i</font></h$i>";
        } else {
            echo "<h$i>Mahasiswa $i</h$i>";
        }
    }
?>