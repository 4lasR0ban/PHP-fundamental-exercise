<?php
    $tabung = array(
        ['A',10,30],
        ['B',15,34],
        ['C',8.5,27.8],
        ['D',12.8,17.56],
        ['E',13.125,15.7]);
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table tr:nth-child(2n){
                background: pink;
            }
        </style> 
    </head>
    <body>
        <center>
        <h1>Data Ukuran Tabung</h1>
        <table border=1>
            <thead style="background: pink; color: #000;">
                <tr>
                    <th>NAMA TABUNG</th>
                    <th>DIAMETER</th>
                    <th>TINGGI</th>
                    <th>LUAS & VOLUME</th>
                </tr>   
            </thead>
            <tbody style="text-align: center;">
                <?php foreach ($tabung as $tb){ ?>
                <tr>
                    <th><?php echo $tb[0];?></th>
                    <td><?php echo $tb[1];?></td>
                    <td><?php echo $tb[2];?></td>
                    <td><a href="hitungluas.php?<?="n=$tb[0]&d=$tb[1]&t=$tb[2]";?>">view</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </center>
    </body> 
</html>