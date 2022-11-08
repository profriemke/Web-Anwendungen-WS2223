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
        $statement = $pdo->prepare("INSERT INTO anwesenheit (vorname, nachname) VALUES(?, ?)");
        if($statement->execute(array(htmlspecialchars($_POST["vorname"]), htmlspecialchars($_POST["nachname"])))){
            //alles gut
            echo "alles gut";
        }else{
            //alles schlecht
            echo $statement->errorInfo()[2];
        }
    ?>
    <a href="anwesenheit.php">zurück</a>
</body>
</html>