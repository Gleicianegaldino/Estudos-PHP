<?php

echo date("d"); //mostra o dia atual em número
echo date("m"); //mês atual em número
echo date("D"); //dia atual em abreviação
echo date("M"); //mês tual em abreviação
echo date("y"); //ano atual em números, apenas os números finais. ex:23
echo date("Y"); //ano atual em núemros, ex: 2023

echo date("d/M/Y"); //data completa

date_default_timezone_set('America/Recife');
echo date("h"); //mostra a hora Am
echo date("H"); //mostra a hora Pm

echo date("i"); //minutos
echo date("s"); //segundos

echo date("H:i:s"); // hora completa



//echo "Dia e hora atual:";
//echo date("d/M/Y H:i:s"); 

$dataAtual = date("d/M/Y H:i:s");
echo $dataAtual;


?>