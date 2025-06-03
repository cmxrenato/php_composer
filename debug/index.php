<?php
require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;
/*
$conta = new ContaBancaria();

$conta->setBanco("Banco C6 Bank");
$conta->setNome("Renato Leal");
$conta->setAgencia("5623");
$conta->setConta("23569-9");
$conta->setSaldo(50.5);
*/
$conta = new ContaBancaria('Banco C6','Renato','5423','0123456789',87.99);

var_dump($conta->exibirDadosConta());
var_dump($conta->depositar(13.01));
var_dump($conta->obterSaldo());
var_dump($conta->sacar(50.0));
var_dump($conta->obterSaldo());



//var_dump($conta->getBanco());
