<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "Favorite color is " . $_SESSION["Favcolor"] . ".<br>";
            echo "Favorite animal is " . $_SESSION["Favanimal"] . ".";
        ?>
    </body>
</html>