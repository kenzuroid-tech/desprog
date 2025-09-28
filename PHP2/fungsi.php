<?php
    // membuat fungsi
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    function perkenalan ($nama, $salam="Assalamualaikum "){
        echo $salam." ,";
        echo "Perkenalkan, nama saya ".$nama."</br>";

        // memanggil fungsi lain
        echo "Saya berusia ". hitungUmur(2006, 2025) ." tahun</br>";
        echo "Senang berkenalan dengan anda</br>";
    }

    // memanggil fungsi perkenalan
        perkenalan("Nikma");

    /*
    //membuat fungsi
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "Umur saya adalah ". hitungUmur(2006, 2025) ." tahun";

    /*
    // membuat fungsi
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("Hamdana", "Hallo");

    echo "<hr>";

    $saya = "Elok";
    $ucapanSalam = "Selamat Pagi";

    // memanggil lagi tanpa mengisi parameter salam
    perkenalan($saya);

    /*
    function perkenalan($nama, $salam){
        echo $salam. ", ";
        echo "Perkanalkan, nama saya ".$nama."</br>";
        echo "Senang berkenalan dengan Anda</br>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("Hamdana", "Hallo");

    echo "<hr>";

    $saya = "Elok";
    $ucapanSalam = "Selamat pagi";

    // memanggil lagi
    perkenalan($saya, $ucapanSalam);
    */

    /*
    function perkenalan(){
        echo "Assalamualaikum, ";
        echo "Perkenalkan, nama saya Elok</br>";
        echo "Senang bertemu dengan Anda</br>";

        echo "Assalamualaikum, ";
        echo "Perkenalkan, nama saya Elok</br>";
        echo "Senang bertemu dengan Anda</br>";
    }

    perkenalan();
    */
?>



