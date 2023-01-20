<?php

//escopo local de uma variavel
//function soma (){
//    $x = 10 + 40;
 //   return $x;
//}
//echo soma();


//escopo global uma variavel

$a = 100;
function soma(){
    global $a;
    $x = 10 + $a;
    return $x;
}

echo soma();


?>