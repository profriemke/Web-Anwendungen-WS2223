<html>

<body>
    <?php
    $pdo = new PDO('mysql:: host = mars.iuk-hdm-stuttgart.de; dbname=', '', '', array('charset' => 'utf8'));
    ?>

    <?php
    $statement = $pdo->prepare("SELECT * FROM Student");
    if ($statement->execute()) {
        while ($row = $statement->fetch()) {
            echo $row["matrikel"]. " ";
            echo $row["name"] . " ";
            echo $row["vorname"] . "<br>";
        }
    } else {
        echo "Datenbank-Fehler";

        // $fehler= $statement->errorInfo();
        // echo $fehler[2];
    
        echo $statement->errorInfo()[2];
    }

    ?>

</body>

</html>