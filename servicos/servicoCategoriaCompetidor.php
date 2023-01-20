<?php




function defineCategoriaCompetido(string $nome, string $idade) : ?string {

    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';



    if (validarNome($nome) && validarIdade($idade)){

        removerMensagemErro();

        if($idade >= 6 && $idade <= 12){

            for ($i = 0; $i <= count($categorias); $i++) { 
                if($categorias[$i] == 'Infantil')
                //echo 'O nadador(a): '.$nome.' compete na categoria '.$categorias[$i];
                {
        
                    setarMensagemDeSucesso($mensagem = "O nadador ". $nome. " compete na categoria: ". $categorias[$i]);
        
                    //$_SESSION['Mensagem-de-sucesso'] = "O nadador ". $nome. " compete na categoria". $categorias[$i]);
                    //header('location: index.php');
                    return null;
                }
               }
           
           
        }
        else if($idade >= 13 && $idade <=18){
        
            for ($i = 0; $i <= count($categorias); $i++) { 
                if($categorias[$i] == 'Adolescente')
                //echo 'O nadador(a): '.$nome.' compete na categoria '.$categorias[$i];
                {
                    $_SESSION['Mensagem-de-sucesso'] = "O nadador ". $nome. " compete na categoria: ". $categorias[$i];
                    //header('location: index.php');
                    return null;
                }
               }
        
            
        } else {
            for ($i = 0; $i <= count($categorias); $i++) { 
                if($categorias[$i] == 'Adulto')
                //echo 'O nadador(a): '.$nome.' compete na categoria '.$categorias[$i];
                {
                    $_SESSION['Mensagem-de-sucesso'] = "O nadador ". $nome. " compete na categoria: ". $categorias[$i];
                    //header('location: index.php');
                    return null;
                }
               }
        }
        
    } else {
        removerMensagemSucesso();
        return obterMensagemErro();
    }




}


?>