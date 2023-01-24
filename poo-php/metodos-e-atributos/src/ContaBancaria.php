<?php

declare(strict_types=1);

namespace App;

class ContaBancaria{
    private string $banco = "Banco Inter";
    private string $nomeTitular = "Gle";
    private string $numeroAgencia = "45457";
    private string $numeroConta = "787878-10";
    private float $saldo = 0;


    public function exibirNomeConta(): array{
        return [
            'nomeTitular' => $this -> nomeTitular,
            'numeroConta' => $this -> numeroConta,
        ];
    }

    
    public function exibirDadosConta(): array
    {
        return [
            'banco' => $this ->banco,
            'nomeTitular' => $this -> nomeTitular,
            'numeroAgencia' => $this -> numeroAgencia,
            'numeroConta' => $this -> numeroConta,
            'saldo' => $this -> saldo,
        ];

    }


}




?>