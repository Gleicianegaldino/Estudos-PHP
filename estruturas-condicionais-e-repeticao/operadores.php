<?php

$boo = true && false; //false
var_dump($boo);

$boo = true and false; //true
var_dump($boo);

$boo = (true and false); //false
var_dump($boo);

$boo = (true and (true && false)); //false
var_dump($boo);

$boo = (true or (true && false)); //true
var_dump($boo);

var_dump(7 == 7 && 9 < 7);
var_dump(7 == 7 or 9 < 7);
var_dump(7 != 7 && 9 < 7);
?>