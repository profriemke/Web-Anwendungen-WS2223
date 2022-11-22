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
    $a = array(
        "Franz" => "Müller",
        "Susi" => "See",
        "Karl" => "Klee",
        "Tara" => "Tee");

    echo $a["Susi"];
    echo "<br>";
    echo $a["Tara"];
    echo "<br>";
    $a["Tara"] = "Kaffe";

    echo $a["Tara"];

    ?>
</body>
</html>