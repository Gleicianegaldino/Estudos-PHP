<?php

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//empty verifica se o valor está vazio
if(empty($nome)){
    echo 'O nome não pode ser vazio';
    return;
}

//conta a quantidade de caracteres que a string tem
if(strlen($nome) < 3){
    echo 'O nome deve ter mais de 3 caracteres';
    return;
}

if (strlen($nome) > 40) {
    echo 'O nome é muito extenso';
    return;
}

//verifica se é um número
if(!is_numeric($idade)){
    echo 'Informe algum número para idade';
    return;

}


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