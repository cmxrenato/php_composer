
<?php

require __DIR__ . '/../vendor/autoload.php';


use App\ContasTipos\ContaPoupanca;


$conta = new ContaPoupanca(
    'Banco C6',
    'Renato Leal',
    '5653-8',
    '2666552254-5',
    0.0
);
echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->depositar(50);
echo PHP_EOL;
echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->sacar(30);
echo PHP_EOL;
echo $conta->obterSaldo();
