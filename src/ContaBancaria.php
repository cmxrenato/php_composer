<?php
declare(strict_types=1);

namespace App;

use App\Contratos\DadosContaBancariaInterface;
use App\Contratos\OperacoesContaBancariaInterface;

abstract class ContaBancaria implements DadosContaBancariaInterface, OperacoesContaBancariaInterface
{
    protected string $banco;
    protected string $nomeTitular;
    protected string $numeroAgencia;
    protected string $numeroConta;
    protected float $saldo;

        public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
        )
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;



        }
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
	function exibirDados(DadosContaBancariaInterface $conta):void
	{
		echo "Banco: ". $conta->getBanco();
		echo PHP_EOL;
		echo "Agência: ". $conta->getAgencia();
		echo PHP_EOL;
		echo "Conta: ". $conta->getConta();
		echo PHP_EOL;
		echo "Titular: ". $conta->getNome();
		echo PHP_EOL;
		echo "-----------------------------------";
		echo PHP_EOL;
		
	}


     public function depositar(float $valor):string
     {
         $this->saldo += $valor;
         return "Depósito de R$".number_format($valor,2,',','')." realizado";
         }

     public function sacar(float $valor):string
     {
         $this->saldo -= $valor;
         return "Saque de R$".number_format($valor,2,',','')." realizado";
         }

        public abstract function obterSaldo():string;
    


    
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

