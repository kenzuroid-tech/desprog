<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil Penjumlahan: $hasilTambah<br/>";
    echo "Hasil Pengurangan: $hasilKurang<br/>";
    echo "Hasil Perkalian: $hasilKali<br/>";
    echo "Hasil Pembagian: $hasilBagi<br/>";
    echo "Hasil Sisa Bagi: $sisaBagi<br/>";
    echo "Hasil Pangkat: $pangkat<br/>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Hasil Sama Dengan: $hasilSama<br/>";
    echo "Hasil Tidak Sama Dengan: $hasilTidakSama<br/>";
    echo "Hasil Lebih Kecil: $hasilLebihKecil<br/>";
    echo "Hasil Lebih Besar: $hasilLebihBesar<br/>";
    echo "Hasil Lebih Kecil Sama Dengan: $hasilLebihKecilSama<br/>";
    echo "Hasil Lebih Besar Sama Dengan: $hasilLebihBesarSama<br/>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    echo "Hasil And: $hasilAnd<br/>";
    echo "Hasil Or: $hasilOr<br/>";
    echo "Hasil Not A: $hasilNotA<br/>";
    echo "Hasil Not B: $hasilNotB<br/>";

    $a += $b;
    echo "Setelah \$a += \$b: $a<br/>";

    $a -= $b;
    echo "Setelah \$a -= \$b: $a<br/>";

    $a *= $b;
    echo "Setelah \$a *= \$b: $a<br/>";

    $a /= $b;
    echo "Setelah \$a /= \$b: $a<br/>";

    $a %= $b;
    echo "Setelah \$a %= \$b: $a<br/>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Hasil Identik: $hasilIdentik<br/>";
    echo "Hasil TidakIdentik: $hasilTidakIdentik<br/>";
?>