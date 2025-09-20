<?php
    switch ($hari) {
        case "Senin":
            echo "Hari kerja.";
            break;
        case "Sabtu":
        case "Minggu":
            echo "Akhir pekan.";
        default:
            echo "Hari tidak valid";
            break;
    }
?>