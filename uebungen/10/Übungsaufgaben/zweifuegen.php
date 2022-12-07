<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zwei Bücher einfügen</title>
</head>
<body>
<?php
$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de; dbname=u-lh174', 'lh174', 'dooPah3she', array('charset'=>'utf8'));
$statement = $pdo->prepare('INSERT INTO buecher (titel, autor, verlag, jahr, isbn) VALUES (?,?,?,?,?)');

if($statement->execute(array('Auf Erden sind wir kurz grandios', 'Ocean Voung', 'btb', '2019', '978-3-442-77008-3'))){
    echo 'Erfolgreich: '.$pdo->lastInsertId();
    echo '<br>';
}else{
    echo 'Datenbank-Fehler!';
    echo '<br>';
}

if($statement->execute(array('Vom Ende der Einsamkeit', 'Benedict Wells', 'Diogenes', '2016', '978-3-257-24444-1'))){
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