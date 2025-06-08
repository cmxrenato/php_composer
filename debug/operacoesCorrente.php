<?php

require __DIR__ . '/../vendor/autoload.php';



use App\ContasTipos\ContaCorrente;
use App\src\Contratos\DadosContaBancariaInterface;
use App\src\Contratos\OperacoesContaBancariaInterface;
use App\src\ContaBancaria;


$conta = new ContaCorrente(
    'Banco C6',
    'Renato Leal',
    '5653-8',
    '2666552254-5',
	0
   
);
/*
echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->depositar(500);
echo PHP_EOL;
echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->sacar(75);
echo PHP_EOL;
echo $conta->obterSaldo();
*/

$conta->exibirDados($conta);