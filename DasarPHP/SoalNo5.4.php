<?php
$siswa = [
    ["nama" => "Alice", "nilai" => 85],
    ["nama" => "Bob", "nilai" => 92],
    ["nama" => "Charlie", "nilai" => 78],
    ["nama" => "David", "nilai" => 64],
    ["nama" => "Eva", "nilai" => 90]
];

$total = 0;
foreach ($siswa as $s) {
    $total += $s["nilai"];
}
$rata = $total / count($siswa);

echo "Rata-rata kelas: $rata<br>";
echo "Siswa dengan nilai di atas rata-rata:<br>";
foreach ($siswa as $s) {
    if ($s["nilai"] > $rata) {
        echo $s["nama"] . " : " . $s["nilai"] . "<br>";
    }
}
?>
