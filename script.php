<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if($idade >= 6 && $idade <= 12){

    for ($i = 0; $i <= count($categorias); $i++) { 
        if($categorias[$i] == 'Infantil')
        echo 'O nadador(a): '.$nome.' compete na categoria '.$categorias[$i];
       }
   
   
}
else if($idade >= 13 && $idade <=18){

    for ($i = 0; $i <= count($categorias); $i++) { 
        if($categorias[$i] == 'Adolescente')
        echo 'O nadador(a): '.$nome.' compete na categoria '.$categorias[$i];
       }

    
} else {
    for ($i = 0; $i <= count($categorias); $i++) { 
        if($categorias[$i] == 'Adulto')
        echo 'O nadador(a): '.$nome.' compete na categoria '.$categorias[$i];
       }
}


?>