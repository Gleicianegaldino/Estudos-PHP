<?php

declare(strict_types=1);

namespace App;

interface OperacoesContaBancariaInterface
{
    public function depositar(float $valor): string;
    public function sacar(float $valor): string;
    public function obterSaldo(): string;
}