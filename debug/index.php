<?php
require __DIR__ . '/../vendor/autoload.php';

use App\ContaBancaria;

$conta = new ContaBancaria();

$conta->setBanco("Banco C6 Bank");
$conta->setNome("Renato Leal");
$conta->setAgencia("5623");
$conta->setConta("23569-9");
$conta->setSaldo(50.5);


var_dump($conta->exibirDadosConta());



//var_dump($conta->getBanco());
