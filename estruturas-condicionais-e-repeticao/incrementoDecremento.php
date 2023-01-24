<?php

echo "Pré-incremento:". "\n";
$a = 5;
echo 'Deve ser: 5 -> ' . $a++ . "\n"; 
echo 'Deve ser: 6 -> ' . $a . "\n";

echo "Pós-incremento:" . "\n";
$a = 5;
echo 'Deve ser: 6 -> ' . ++$a . "\n";
echo 'Deve ser: 6 -> ' . $a . "\n";

echo 'Pré-decremento:' . "\n";
$a = 5;
echo 'Deve ser: 5 -> ' . $a-- . "\n"; 
echo 'Deve ser: 4 -> ' . $a. "\n"; 

echo 'Pós-incremento:' . "\n";
$a = 5;
echo 'Deve ser: 4 -> ' . --$a. "\n"; 
echo 'Deve ser: 4 -> ' . $a. "\n"; 

?>