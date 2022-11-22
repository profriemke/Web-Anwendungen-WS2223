<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3.19 Array in Schleifen ausgeben und eine Tabelle daraus machen</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nummer</th>
                <th>Name</th>
            </tr>       
        </thead>
        <tbody>
<?php
    $name = array("Hans","Susi","Max","Ben","Lena","Lisa");
    for ($a = 0; $a < count($name); $a++){
        echo "<tr>";
        echo "<td>".$a."</td>";
        echo "<td>".$name[$a]."</td>";
        echo "</tr>";
    }
?>
        </tbody>
    </table>
</body>
</html>