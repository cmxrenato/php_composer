<?php
declare(strict_types=1);

namespace App\ContasTipos;
use App\ContaBancaria;

class ContaCorrente extends ContaBancaria
{
    const TAXA = 25;
    const TIPO_CONTA = "Conta Corrente";

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) 
    {
        parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo);
    }

    public function obterSaldo(): string
    {
        return 'Seu saldo atual é de: ' . number_format($this->saldo - self::TAXA, 2, ',', '.');
    }
	 public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }
}
?>
