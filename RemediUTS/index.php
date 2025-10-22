<?php
$host = 'localhost';
$port = '5432';
$dbname = 'phpmahasiswa';
$user = 'postgres';
$pass = '12345678';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die('Koneksi gagal: ' . pg_last_error());
}

pg_set_client_encoding($conn, 'UTF8');

$sql = 'SELECT "NIM", "Nama", "Tanggal Lahir", "Tempat Lahir", "Jurusan", "Prodi"
        FROM "data_mahasiswa"
        ORDER BY "NIM"';

$result = pg_query($conn, $sql);
if (!$result) {
    die('Query gagal: ' . pg_last_error($conn)); 
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Remidi UTS</title>
    <link rel="stylesheet" href="http://localhost/dasarWeb/desprog/RemediUTS/style.css">
</head>
<body>
    <h1>Biodata Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jurusan</th>
            <th>Prodi</th>
        </tr>
        <?php 
        $i = 1; 
        while ($row = pg_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= htmlspecialchars($row["NIM"], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?= htmlspecialchars($row["Nama"], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?= htmlspecialchars($row["Tempat Lahir"], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?= htmlspecialchars($row["Tanggal Lahir"], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?= htmlspecialchars($row["Jurusan"], ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?= htmlspecialchars($row["Prodi"], ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
pg_free_result($result);
pg_close($conn);
?>