<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';
//print_r($categorias);

$nome = 'Eduarfo';
$idade = 10;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12){
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        echo "O nadador ".$nome. "compete na categoria infantil";
    }
}elseif($idade >= 13 && $idade <= 18){
    echo $categorias[1];
}else{
    echo $categorias[2];
}

?>