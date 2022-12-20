<?php

$type = strtolower(pathinfo($_FILES["bild"]["name"], PATHINFO_EXTENSION));
echo "Typ ist: ".$type."<br>";
echo "DIRNAME ist: ".pathinfo($_FILES["bild"]["name"], PATHINFO_DIRNAME)."<br>";
echo "BASENAME ist: ".pathinfo($_FILES["bild"]["name"], PATHINFO_BASENAME)."<br>";

echo "FILENAME ist: ".pathinfo($_FILES["bild"]["name"], PATHINFO_FILENAME)."<br>";


// jpg, jpeg,png
if(!($type =="jpg" OR $type == "jpeg" OR $type == "png" )){
    die("bitte nur jpg");
}
if($_FILES["bild"]["size"]> 3000000){
    die("zu groß");

}
if(move_uploaded_file($_FILES["bild"]["tmp_name"], "/home/gurzki/public_html/ws2223/13-phpupload/uploads/".$_FILES["bild"]["name"])){
    //erfolgreich
    echo $_FILES["bild"]["name"];
}else{
    //Fehler
    die("schlimmer Fehler!");
}
