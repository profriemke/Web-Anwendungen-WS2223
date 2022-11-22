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
    $a = "z";
    $a++;
    echo $a;
    //es ist nicht logisch ->
    //a++ geht in diesem Beispiel das Alphabet durch, aber nach z kommt aa etc.
    //eventuell wird nicht das gewünschte ergebnig gelifert
    ?>
</body>
</html>