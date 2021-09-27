<!DOCTYPE html>
<html>
<body>
<?php
    $listmahasiswa = array(
        "mahasiswa1" => array("Sulis", "K3510001", "Solo", "RPL"),
        "mahasiswa2" => array("Rendi", "K3510002", "Klaten", "TKJ"),
        "mahasiswa3" => array("Jatmiko", "K3510003", "Boyolali", "Multimedia"),
        "mahasiswa4" => array("Feri", "K3510004", "Wonogiri", "RPL")
    );

    echo "<ol>";
        echo "<li>".implode(" | ",$listmahasiswa['mahasiswa1'])."</li>";
        echo "<li>".implode(" | ",$listmahasiswa['mahasiswa2'])."</li>";
        echo "<li>".implode(" | ",$listmahasiswa['mahasiswa3'])."</li>";
        echo "<li>".implode(" | ",$listmahasiswa['mahasiswa4'])."</li>";
    echo "</ol>";

    /*  OUTPUT:

        1. Sulis | K3510001 | Solo | RPL
        2. Rendi | K3510002 | Klaten | TKJ
        3. Jatmiko | K3510003 | Boyolali | Multimedia
        4. Feri | K3510004 | Wonogiri | RPL

    */



?>


</body>
</html>