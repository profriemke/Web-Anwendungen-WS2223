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

    $i = 0; 
    $z = 100;
    $zahl = array($i => $z);

    while ($i < 101 AND $z>=0){
        $zahl[$i] = $z;
        echo $i; echo " => "; echo $zahl[$i];
        echo "<br>";
        $i++;
        $z--;
    }

   

        
    
var_dump($zahl)
    ?>
</body>
</html>