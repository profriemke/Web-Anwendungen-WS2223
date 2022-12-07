<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bücher Datenbank</title>
</head>
<body>
<?php
    $pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-lh174', 'lh174', 'dooPah3she', array('charset'=>'utf8'));
    $statement = $pdo->prepare('SELECT * FROM buecher');
    if($statement->execute()){
       while($row = $statement->fetch()){
            echo  $row['id'].', '.$row['titel'].', '.$row['autor'].', '.$row['verlag'].', '.$row['jahr'].', '.$row['isbn'] .'<br>';
       }
    }else{
        echo 'Fehler!';
	    echo $statement->errorInfo()[2];
	    echo $statement->queryString;
    }
?>
</body>
</html>