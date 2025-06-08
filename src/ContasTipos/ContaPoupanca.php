<?php
declare(strict_types=1);
namespace App\ContasTipos;
use App\ContaBancaria;

class ContaPoupanca extends ContaBancaria
{
    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "ContaPoupanca";

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    )
    {
        parent:: __construct($banco,$nomeTitular,$numeroAgencia,$numeroConta,$saldo);
    }


public function obterSaldo():string
{
    return 'Seu saldo atual é de: '.number_format($this->saldo + ($this->saldo * self::RENDIMENTO));
}




}








?>
