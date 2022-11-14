<?php
    session_start();
    if(!isset($_SESSION["login"])){
        die("Nicht autorisiert");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Geheimste aller geheimen Geheimseitn</h1>
    <?php
        echo "Willkommen ".$_SESSION["login"];
    ?>
    <a href="logout.php">ausloggen</a>
</body>
</html>