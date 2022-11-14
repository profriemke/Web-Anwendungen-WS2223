<?php
    session_start();
    require 'db.php';
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
    <?php
        $statement = $pdo->prepare("SELECT login, id FROM user4 WHERE login=? AND password=?");
        if($statement->execute(array($_POST["login"], $_POST["password"]))){
            if($row = $statement->fetch()){
                // jo, alles klar
                $_SESSION["login"] = $row["login"];
                $_SESSION["id"] = $row["login"];
            }else{
                echo "Du kommst hier nicht rein!";
            }

        }else{
            echo "Datenbank-Fehler";
            echo $statement->errorInfo()[2];
        }
        echo "Nutzer: ".$_SESSION["login"];

?>
    
</body>
</html>