<?php

session_start();

include "servicos/servicoCategoriaCompetidor.php";
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetido($nome , $idade);

header('location: index.php');

/*

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

*/


?>