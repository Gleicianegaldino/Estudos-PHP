<?php

/*for($i = 0; $i <10; $i ++){

    echo $i;
}*/


//quantidades de elementos de um array

$arr = [0,3,5,1];

//$arrayNumeros = [3, 5, 6, 4, 2];

$qtd_elementos = count($arr);

//$qtd_elementos = count($arrayNumeros);
//var_dump($qtd_elementos);


for($i=0; $i < $qtd_elementos -1; $i++){

    for ($posicaoAtual=0; $posicaoAtual<$qtd_elementos -$i -1; $posicaoAtual++){

        $proximaPosicao = $posicaoAtual+1;

        if($arr[$proximaPosicao] < $arr[$posicaoAtual]){

            $auxiliar = $arr[$posicaoAtual];
            $arr[$posicaoAtual] = $arr[$proximaPosicao];
            $arr[$proximaPosicao] = $auxiliar;

        }

    }

   

    //print_r($arrayNumeros[$i]);
}
    print_r($arr) . "\n";
?>