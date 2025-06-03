<?php
declare(strict_types=1);

namespace App;

class ContaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function exibirDadosConta():array
    {
        return[
        'banco'=>$this->banco,
        'nomeTitular'=>$this->nomeTitular,
        'numeroAgencia'=>$this->numeroAgencia,
        'numeroConta'=>$this->numeroConta,
        'saldo'=>$this->saldo,
        ];

}
    
     public function setBanco(string $novoBanco):void
     {
        $this->banco = $novoBanco;
    }
    public function getBanco():string
    {
       return $this->banco;
    }
    public function setNome(string $novoNome):void
    {
        $this->nomeTitular = $novoNome;
    }
    public function getNome():string
    {
         return $this->nomeTitular;
    }
    public function setAgencia(string $novaAgencia):void
    {
         $this->numeroAgencia = $novaAgencia;
    }
    public function getAgencia():string
    {
        return $this->numeroAgencia;
    }
    public function setConta(string $novaConta):void
    {
        $this->numeroConta = $novaConta;
    }
    public function getConta():string
    {
        return $this->numeroConta;
    }
    public function setSaldo(float $novoSaldo):void
    {
        $this->saldo = $novoSaldo;
    }
    public function getSaldo():float
    {
        return $this->saldo;
    }
}

