<?php
    session_start();

    #include "entfernen.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadrat</title>
</head>
<body>
    <?php
    echo "ergebnis:";
    echo $_SESSION["wert"] * $_SESSION["wert"];
    ?>
</body>
</html>