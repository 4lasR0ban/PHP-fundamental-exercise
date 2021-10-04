<?php
function hitungDenda($tglHarusKembali, $tglKembali){
    $tglHarusKembali = new DateTime($tglHarusKembali);
    $tglKembali = new DateTime($tglKembali);

    $diff = date_diff($tglHarusKembali, $tglKembali);

    echo "Anda telat mengembalikan buku selama: ".$diff -> format('%a') . ' hari <br>';
    $conv = (int)$diff -> format('%a');

    if ($conv > 0){
        $denda = $conv * 5000;
        echo "Besarnya denda anda adalah: Rp. ".$denda;
    }
    echo "<br>";
}

hitungDenda("2021-01-03", "2021-05-08");
?>