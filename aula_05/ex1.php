<?php 
    $produtos = array(
        array("nome" => "Shampoo", "preco" => "15", "qtd" => "4"),
        array("nome" => "Sabonete", "preco" => "5", "qtd" => "9"),
        array("nome" => "Perfume", "preco" => "20", "qtd" => "3")
        
    );

    $x = json_encode($produtos);
    file_put_contents("produtos.json", $x);


?>