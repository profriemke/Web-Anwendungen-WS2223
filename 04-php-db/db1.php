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
        $statement = $pdo->prepare("SELECT nachname, vorname FROM kunde LIMIT 20");
        if($statement->execute()){
            while($row = $statement->fetch()){
             echo $row["vorname"]." ";
             echo $row["nachname"]."<br>";
             }
        }else{
            echo "Datenbank-Fehler";
            
            // $fehler= $statement->errorInfo();
            // echo $fehler[2];
            
            echo $statement->errorInfo()[2];
        }
      
        
    ?>
</body>
</html>