<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ein Buch einfügen</title>
</head>
<body>
<?php
$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-lh174', 'lh174', 'dooPah3she', array('charset'=>'utf8'));
$statement = $pdo->prepare('INSERT INTO buecher (titel, autor, verlag, jahr, isbn) VALUES (?,?,?,?,?)');
if($statement->execute(array('Verity', 'Colleen Hoover', 'Sphere', '2018', '978-1-4087-2660-0'))){
    echo 'Erfolgreich: '.$pdo->lastInsertId();
    echo '<br>';
}else{
    echo 'Datenbank-Fehler!';
    echo '<br>';
}
?>
<a href="liste.php">Zurück zur Seite</a>
</body>
</html>