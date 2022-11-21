<?php
    session_start();
    include "db.php";
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
        $statement = $pdo->prepare("SELECT * FROM user4 WHERE login=?");
        if($statement->execute(array($_POST["login"]))){
            // db erfolgreich
            if($row = $statement->fetch()){
                // Nutzer gibt es   
                if(password_verify($_POST["password"], $row["password"])){
                    // Passwort identisch
                    echo "Willkommen!";
                    $_SESSION["login"] = $row["login"];
                }else{
                    // Passwort falsch
                    echo "Passwort falsch";
                }
            }else{
                // Nutzer gibt es nicht
                echo "Nutzer gibt es nicht!";
            }
        }else{
            echo $statement->errorInfo()[2];
        }
    ?>
</body>
</html>