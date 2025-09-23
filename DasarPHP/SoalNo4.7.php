<?php
$harga = 120000;
if ($harga > 100000) {
    $diskon = 0.2 * $harga;
    $bayar = $harga - $diskon;
} else {
    $bayar = $harga;
}
echo "Harga yang dibayar: Rp $bayar<br>";
?>
