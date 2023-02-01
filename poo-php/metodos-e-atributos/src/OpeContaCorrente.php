<?php

require __DIR__ . '/../vendor/autoload.php';

use App\contaCorrente;
use App\DadosContaBancariaInterface;
use App\OperacoesContaBancariaInterface;
use App\ContaBancaria;
use App\ContaPoupanca;

function executarOperacoes(OperacoesContaBancariaInterface $conta): void
{
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
}

function exibirDados(DadosContaBancariaInterface $conta): void
{    
    echo "Banco: " . $conta->getBanco();
    echo PHP_EOL;
    
    echo "Ag./Conta: " . $conta->getNumeroAgencia() . "/" . $conta->getNumeroConta();
    echo PHP_EOL;

    echo "Titular: " . $conta->getNomeTitular();
    echo PHP_EOL;

    echo "--------------------------------------------";
    echo PHP_EOL;
}

$conta = new ContaCorrente(
    'Banco do Brasil', // banco
    'Saori', // nomeTitular
    '5554', // numeroAgencia
    '58975-10', // numeroConta
    0 // saldo
);

exibirDados($conta);
executarOperacoes($conta);