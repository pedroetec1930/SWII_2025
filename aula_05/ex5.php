<?php
    $x = file_get_contents("produtos.json");
    $y = json_decode($x, true);

    foreach($y as $a => $b){
        if($b["nome"] === "Sabonete" ){
            array_pop($y[$a]);
            array_pop($y[$a]);
            array_pop($y[$a]);
            break;
        }

    }

    $z = json_encode($y);
    file_put_contents("produtos.json", $z)



?>