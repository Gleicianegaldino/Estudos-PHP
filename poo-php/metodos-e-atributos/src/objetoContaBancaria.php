<?php

require __DIR__ . '/../vendor/autoload.php';


use App\ContaBancaria;
use App\objetoContaBancaria;

$conta = new ContaBancaria();
//var_dump($conta);
//var_dump($conta->banco);
var_dump($conta->exibirDadosConta());

?>