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
        $vorname="Manni";
        $id=8;

        $pdo = new PDO();
        $statement = $pdo->prepare("UPDATE nutzer SET vorname=:vorname WHERE id=:id");
        $statement->bindParam(":vorname", $vorname);
        $statement->bindParam(":id", $id);
        if($statement->execute()){
            echo "Erfolgreich: ";
        }else{
            echo "Datenbank-Fehler!";
        }
        
    ?>
</body>
</html>