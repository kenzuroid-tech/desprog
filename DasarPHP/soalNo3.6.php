<?php
    $totalKursi = 45;
    $terisi = 28;
    $kosong = $totalKursi - $terisi;
    $persenKosong = ($kosong / $totalKursi) * 100;

    echo "Total kursi: $totalKursi<br>";
    echo "Terisi: $terisi<br>";
    echo "Kosong: $kosong<br>";
    echo "Persentase kosong: $persenKosong %<br>";
?>