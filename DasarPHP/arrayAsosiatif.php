<?php
    $student = [
        "nama" => "John",
        "usia" => 20,
        "kelas" => "12A"
    ];

    $student["nilai"] = 95;
    $student["usia"] = 21;

    foreach ($student as $key => $value) {
        echo "$key: $value <br>";
    }
?>