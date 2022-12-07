<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addiert!</title>
</head>
<body>
    <?php
        if (empty( $_POST["a"]) or empty($_POST["b"])) {
                die("Fehler in der Übermittlung.");
        }
        echo $_POST["a"] + $_POST["b"];
        echo "<br>";
    ?>
    <a href="uebung_3_26.html">Zurück zur Seite</a>
</body>
</html>