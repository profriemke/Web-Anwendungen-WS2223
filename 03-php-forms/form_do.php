<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_POST["vorname"]) or !isset($_POST["nachname"]) ){
        die("Fehler im Formular!");
    }

    ?>
    <h1>Seite von <?php echo htmlspecialchars($_POST["vorname"]); ?></h1>

    <?php
        echo htmlspecialchars($_POST["vorname"]);
        echo "<br>";   
        echo htmlspecialchars($_POST["nachname"]);
    ?>
</body>
</html>