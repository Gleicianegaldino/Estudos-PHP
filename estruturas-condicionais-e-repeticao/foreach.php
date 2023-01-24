<?php

$arr = [1,2,3,4,5,6,7,8,9,10];

$qtd_elementos = count($arr);

/*foreach($arr as $value){
    echo $value . "\n";
}*/

/*foreach ($arr as $indice => $value) {
    echo 'Valor do indice: ' . $indice . ' valor: ' . $value . "\n";
}*/

/*foreach ($arr as $indice => $value) {

    if($value == 2){
        break;
        
    }

    echo 'Valor do indice: ' . $indice . ' valor: ' . $value . "\n";
}
*/


foreach ($arr as $indice => $value) {

    if($value % 2 == 0){
        continue;
        
    }

    echo 'Valor do indice: ' . $indice . ' valor: ' . $value . "\n";
}


?>