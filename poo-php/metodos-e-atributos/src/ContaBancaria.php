<?php

declare(strict_types=1);

namespace App;

class ContaBancaria{
    public string $banco = "Banco Inter";
    public string $nomeTitular = "Gle";
    public string $numeroAgencia = "45457";
    public string $numeroConta = "787878-10";
    public float $saldo = 0;

    
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