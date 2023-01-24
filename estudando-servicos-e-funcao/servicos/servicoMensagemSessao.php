<?php

session_start();



function setarMensagemDeSucesso(string $mensagem ) : void {

    $_SESSION['Mensagem-de-sucesso'] = $mensagem;
    
}

function obterMensagemDeSucesso() : ?string {

    if(isset($_SESSION['Mensagem-de-sucesso']))
    return $_SESSION['Mensagem-de-sucesso'];

    return null;
}


function setarMensagemErro(string $mensagem ) : void {

    $_SESSION['Mensagem-de-erro'] = $mensagem;
    
}

function obterMensagemErro() : ?string {

    if(isset($_SESSION['Mensagem-de-erro']))
    return $_SESSION['Mensagem-de-erro'];

    return null;
}

//essa função serve para atualizar a página, sem ficar acumulando as mensagens
function removerMensagemSucesso() : void {
    
    if(isset($_SESSION['Mensagem-de-sucesso']))
    unset($_SESSION['Mensagem-de-sucesso']) ;
}

function removerMensagemErro() : void {
    if(isset($_SESSION['Mensagem-de-erro']))
    unset($_SESSION['Mensagem-de-erro']) ;

}

?>