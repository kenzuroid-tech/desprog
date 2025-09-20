<?php
    $three1DArray = array(
        array(
            array(1, 2, 3),
            array(4, 5, 6)
        ),
        array(
            array(7, 8, 9),
            array(10, 11, 12)
        )
    );

    $three2DArray = [
        [
            [1, 2, 3],
            [4, 5, 6]
        ],
        [
            [7, 8, 9],
            [10, 11, 12]
        ]
    ];

    foreach ($three1DArray as $dimensi1) {
        foreach ($three1DArray as $dimensi2) {
            foreach ($dimensi2 as $elemen) {
                echo $elemen . " ";
            }
            echo "<br>";
        }
        echo "<br>";
    }
?>