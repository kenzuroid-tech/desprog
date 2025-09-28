<?php

    $loremIpsum = "Lorem ipsum dolro sit amet consectetur adipisicing eit.
    Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
    impedit unde ipsum voluptatum, corruptiminus sit excepturi nostrum
    quisquam? Quos impedit eum nulla optio.";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
    echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";

?>