<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Anwesenheitsliste</h1>
    <h2>Anwesenende</h2>
    <?php
        require "db.php";
        $statement = $pdo->prepare("SELECT * FROM anwesenheit");
        if($statement->execute()){
            while($row = $statement->fetch()){
                //ausgeben
                echo $row["id"].". ".$row["vorname"]." ".$row["nachname"]." <a href=\"edit.php?id=".$row["id"]."\">Edit</a><br>";
            }
        }else{
            echo $pdo->errorInfo()[2];
        }        
    ?>

    <h2>Neu eintragen</h2>
    <form method="post" action="anwesenheit_do2.php">
        <input type="text" name="vorname" placeholder="vorname"><br>
        <input type="text" name="nachname" placeholder="nachname"><br>
        <input type="submit" value="neu eintragen">
    </form>

</body>
</html>