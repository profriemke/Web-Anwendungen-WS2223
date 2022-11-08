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
    include "db.php";
    $statement = $pdo->prepare("SELECT * from anwesenheit WHERE id=?");
    if($statement->execute(array($_GET["id"]))){
        //alles gut
        if($row = $statement->fetch()){
            echo $row["nachname"]." ".$row["vorname"];
            ?>
            <form action="edit_do.php" method="post">
                <input type="text" name="vorname" value="<?php echo $row["vorname"];?>"><br>
                <input type="text" name="nachname" value="<?php echo $row["nachname"];?>"><br>
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                <input type="submit">
            </form>
            <?php
        }else{
            echo "Gibts leider nich.";
        }

    }else{
        //nichts gut
        echo $statement->errorInfo()[2];
    }
    ?>
</body>
</html>