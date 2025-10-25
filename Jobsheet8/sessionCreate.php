<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $_SESSION["Favcolor"] = "green";
            $_SESSION["Favanimal"] = "cat";
            echo "Session variables are set.";
        ?>
    </body>
</html>