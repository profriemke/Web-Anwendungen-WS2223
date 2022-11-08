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
        require "db.php";
        $statement = $pdo->prepare("UPDATE anwesenheit SET vorname=?, nachname=? WHERE id=?");
        if($statement->execute(array($_POST["vorname"], $_POST["nachname"], $_POST["id"]))){
            echo "geändert!";
        }else{
            //nichts gut
            echo $statement->errorInfo()[2];
        }
 ?>
 <a href="anwesenheit.php">zurück zum Start</a>
</body>
</html>