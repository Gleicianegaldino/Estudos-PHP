<?php

require __DIR__ . '/../vendor/autoload.php';

use App\objetoContaBancaria;
use App\ContaBancaria;
use App\ContasTipo\ContaCorrente;
use App\ContasTipo\ContaPoupanca;

$conta = new ContaBancaria('BANCO DO BRASIL','Gle','78788','78794-10',0);


    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo $conta->depositar(50);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
    
    echo $conta->sacar(30);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;

?>