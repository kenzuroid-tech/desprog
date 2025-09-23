<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilai); 
array_shift($nilai); 
array_shift($nilai);
array_pop($nilai); 
array_pop($nilai);
$total = array_sum($nilai);
$rata = $total / count($nilai);

echo "Total nilai setelah buang 2 tertinggi & 2 terendah: $total<br>";
echo "Rata-rata: $rata<br>";
?>
