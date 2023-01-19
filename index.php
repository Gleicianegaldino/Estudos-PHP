<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Formulário de inscrição</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <p>Formulário para competição de natação</>

        <form action="script.php" method="post">
    <h1>
        <?php
        

            $mensagemDeSucesso= isset($_SESSION['Mensagem-de-sucesso']) ? $_SESSION['Mensagem-de-sucesso'] : '';
            
            if(!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;
            }


            $mensagemDeErro = isset($_SESSION['Mensagem-de-erro']) ? $_SESSION['Mensagem-de-erro'] : '';
        
            if(!empty($mensagemDeErro))
            {
                echo $mensagemDeErro;
            }
        ?>
    </h1>
            <p>Seu nome <input type="text" name="nome" value=""/> </p>
            <p>Sua idade <input type="text" name="idade" value=""/> </p>
            <p><input type="submit" value="Enviar dados"> </p>


        </form> 



    
    </body>
</html>