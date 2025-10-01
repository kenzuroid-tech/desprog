<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        td, th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        $Dosen = [
            'Nama' => "Elok Nur Hamdana",
            'Domisili' => "Malang",
            'Jenis Kelamin' => "Perempuan"
        ];

        echo "<table>";
        echo "<tr><th>Key</th><th>Value</th></tr>";
        foreach($Dosen as $key => $value){
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
