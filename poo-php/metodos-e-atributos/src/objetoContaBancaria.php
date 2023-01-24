<?php

require __DIR__ . '/../vendor/autoload.php';


use App\ContaBancaria;
use App\objetoContaBancaria;

$conta = new ContaBancaria('BANCO DO BRASIL','Gle','78788','78794-10',0);


var_dump($conta->exibirDadosConta());

?>