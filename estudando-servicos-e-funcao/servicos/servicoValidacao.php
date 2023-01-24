<?php


function validarNome(string $nome): bool {
    //empty verifica se o valor está vazio
    if(empty($nome)){

        setarMensagemErro($mensagem = 'O nome não pode ser vazio, preencha os campos a baixo!');

        //$_SESSION['Mensagem-de-erro'] = 'O nome não pode ser vazio, preencha os campos a baixo!';
        //header('location: index.php');
        //echo 'O nome não pode ser vazio';
        return false;
    }

    //conta a quantidade de caracteres que a string tem
    else if(strlen($nome) < 3){

        setarMensagemErro($mensagem = 'O nome deve ter mais de 3 caracteres!');

        //$_SESSION['Mensagem-de-erro'] = 'O nome deve ter mais de 3 caracteres!';
        //header('location: index.php');

        //echo 'O nome deve ter mais de 3 caracteres';
        return false;
    }

    else if (strlen($nome) > 40) {

        setarMensagemErro($mensagem = 'O nome é muito extenso');

        //$_SESSION['Mensagem-de-erro'] = 'O nome é muito extenso';
        //header('location: index.php');
        //echo 'O nome é muito extenso';
        return false;
    } return true;

}

function validarIdade(string $idade) : bool {
//verifica se é um número
 if(!is_numeric($idade)){

    setarMensagemErro($mensagem = 'Informe algum número para idade!');

    //$_SESSION['Mensagem-de-erro'] = 'Informe algum número para idade!';
    //header('location: index.php');
    //echo 'Informe algum número para idade';
    return false;

    }
    return true;

}




?>