<?php
    $nilaiNumerik = 92;

    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai Huruf: A";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
        echo "Nilai Huruf: B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
        echo "Nilai Huruf: C";
    } elseif ($nilaiNumerik < 70) {
        echo "Nilai Huruf: D";
    }

    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "<br/><br/>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i = 1; $i <= $jumlahLahan; $i++) { 
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    }

    echo "<br/><br/>Jumlah Buah yang akan dipanen adalah: $jumlahBuah";

    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }

    echo "<br/><br/>Total skor ujian adalah: $totalSkor";

    $nilaiMahasiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach ($nilaiMahasiswa as $nilai) {
        if ($nilaiMahasiswa < 60) {
            echo "<br/><br/>Nilai: $nilai (Tidak Lulus) <br>";
            continue;
        }
        echo "<br/>Nilai: $nilai (Lulus) <br>";
    }
?>