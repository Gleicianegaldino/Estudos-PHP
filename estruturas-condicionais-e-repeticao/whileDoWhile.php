<?php

$frutas = ['banana', 'maçã', 'pera', 'uva'];

$contador = count($frutas);

$i = 0;


/*while ($i < $contador){
    echo $frutas[$i] . "\n";

    $i++;
}*/

while ($i < $contador){
    if($frutas[$i] == 'pera'){
        break;
    }

    echo $frutas[$i] . "\n";
    $i++;
}



?>