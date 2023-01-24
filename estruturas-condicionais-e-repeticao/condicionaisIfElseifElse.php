<?php

$nota = -3;

if($nota >= 7){

    echo "O aluno foi aprovado!!!" . "\n";

}else if (($nota < 7) && ($nota >= 4)) {

    echo "O aluno está de recuperação!!!";

}else if (($nota < 4) && ($nota >= 2)) {

    echo "O aluno está em conselho de classe";
}

else{
    echo "O aluno foi reprovado!!!";
}



?>