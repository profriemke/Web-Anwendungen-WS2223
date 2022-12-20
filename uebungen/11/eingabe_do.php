<?php
    session_start();
?>
<!doctype html>
<html lang="de">
    <head>
        <title>eingabe</title>
    </head>
<body>
    <?php
        $_SESSION["wert"] = $_POST["zahl"];
?>
    <a href="quadrat.php">Wert auf Seite quadrat.php anzeigen</a>
</body>
</html>