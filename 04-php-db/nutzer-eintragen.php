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
        $pdo = new PDO();
        $statement = $pdo->prepare("INSERT INTO nutzer (vorname, nachname) VALUES (?,?)");
        if($statement->execute(array("Betty", "Beispiel"))){
            echo "Erfolgreich: ".$pdo->lastInsertId();
        }else{
            echo "Datenbank-Fehler!";
        }

        
    ?>
</body>
</html>