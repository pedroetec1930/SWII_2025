<?php
    $x = file_get_contents("produtos.json");
    $y = json_decode($x, true);

    array_push($y, ["nome" => "Condicionador","preco" => "10","qtd" => "7"]);

    $z =json_encode($y);
    file_put_contents("produtos.json", $z)



?>