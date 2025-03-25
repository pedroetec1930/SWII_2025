<?php
    $x = file_get_contents("usuarios.json");
    $y = json_decode($x, true);
    
    foreach($y as $z){
        echo "Nome: " . $z["nome"] ; echo " || Email: " . $z["email"] . "<br>";
    }


?>