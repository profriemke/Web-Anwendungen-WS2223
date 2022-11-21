<?php

$hash = password_hash("123", PASSWORD_BCRYPT);
echo $hash;

if(password_verify("123", $hash)){
    echo "gleich";
}else{
    echo "ungleich";
}