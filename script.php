<?php

session_start();

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//empty verifica se o valor está vazio
if(empty($nome)){

    $_SESSION['Mensagem-de-erro'] = 'O nome não pode ser vazio, preencha os campos a baixo!';
    header('location: index.php');
    //echo 'O nome não pode ser vazio';
    return;
}

//conta a quantidade de caracteres que a string tem
else if(strlen($nome) < 3){
    $_SESSION['Mensagem-de-erro'] = 'O nome deve ter mais de 3 caracteres!';
    header('location: index.php');

    //echo 'O nome deve ter mais de 3 caracteres';
    return;
}

else if (strlen($nome) > 40) {
    $_SESSION['Mensagem-de-erro'] = 'O nome é muito extenso';
    header('location: index.php');
    //echo 'O nome é muito extenso';
    return;
}

//verifica se é um número
else if(!is_numeric($idade)){
    $_SESSION['Mensagem-de-erro'] = 'Informe algum número para idade!';
    header('location: index.php');
    //echo 'Informe algum número para idade';
    return;

}


if($idade >= 6 && $idade <= 12){

    for ($i = 0; $i <= count($categorias); $i++) { 
        if($categorias[$i] == 'Infantil')
        //echo 'O nadador(a): '.$nome.' compete na categoria '.$categorias[$i];
        {
            $_SESSION['Mensagem-de-sucesso'] = "O nadador ". $nome. " compete na categoria". $categorias[$i];
            header('location: index.php');
            return;
        }
       }
   
   
}
else if($idade >= 13 && $idade <=18){

    for ($i = 0; $i <= count($categorias); $i++) { 
        if($categorias[$i] == 'Adolescente')
        //echo 'O nadador(a): '.$nome.' compete na categoria '.$categorias[$i];
        {
            $_SESSION['Mensagem-de-sucesso'] = "O nadador ". $nome. " compete na categoria". $categorias[$i];
            header('location: index.php');
            return;
        }
       }

    
} else {
    for ($i = 0; $i <= count($categorias); $i++) { 
        if($categorias[$i] == 'Adulto')
        //echo 'O nadador(a): '.$nome.' compete na categoria '.$categorias[$i];
        {
            $_SESSION['Mensagem-de-sucesso'] = "O nadador ". $nome. " compete na categoria". $categorias[$i];
            header('location: index.php');
            return;
        }
       }
}


?>