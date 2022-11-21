<?php
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
    if(isset($_POST["login"]) && isset($_POST["password"])){
        $statement = $pdo->prepare("INSERT INTO user4 (login, password) VALUES (?,?)");
       
        $hash = password_hash($_POST["password"], PASSWORD_BCRYPT);
       
        if($statement->execute(array(htmlspecialchars($_POST["login"]), $hash))){
            // Registrierung erfolgreich!
            echo "Registrierung erfolgreich!";
        }else{
            echo "Registrierung nicht erfolgreich :-(";
            echo $statement->errorInfo()[2];
        }
    }else{
        echo "Formular-Fehler!";
    }
    ?>
</body>
</html>