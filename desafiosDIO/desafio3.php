<?php
$valor = (float) fgets(STDIN);
//$valor = 576.73;

$notas_ideal = array(100.00, 50.00, 20.00, 10.00, 5.00, 2.00);
$notas = array();
$moedas_ideal = array(1.00, 0.50, 0.25, 0.10, 0.05, 0.01);
$moedas = array();

$notas[0] = intdiv($valor, 100);
$notas[1] = intdiv(($valor - $notas[0] * 100), 50);
$notas[2] = intdiv(($valor - $notas[1] * 50 - $notas[0] * 100), 20);
$notas[3] = intdiv(($valor - $notas[2] * 20 - $notas[1] * 50 - $notas[0] * 100), 10);
$notas[4] = intdiv(($valor - $notas[3] * 10 - $notas[2] * 20 - $notas[1] * 50 - $notas[0] * 100), 5);
$notas[5] = intdiv(($valor - $notas[4] * 5 - $notas[3] * 10 - $notas[2] * 20 - $notas[1] * 50 - $notas[0] * 100), 2);
$moedas[0] = intdiv(($valor - $notas[4] * 5 - $notas[3] * 10 - $notas[2] * 20 - $notas[1] * 50 - $notas[0] * 100), 1);
$moedas[1] = intdiv((($valor - $notas[4] * 5 - $notas[3] * 10 - $notas[2] * 20 - $notas[1] * 50 - $notas[0] * 100 - $moedas[0] * 1) * 100), 50);
$moedas[2] = intdiv((($valor - $notas[4] * 5 - $notas[3] * 10 - $notas[2] * 20 - $notas[1] * 50 - $notas[0] * 100 - $moedas[0] * 1 - $moedas[1] * 0.5) * 100), 25);
$moedas[3] = intdiv((($valor - $notas[4] * 5 - $notas[3] * 10 - $notas[2] * 20 - $notas[1] * 50 - $notas[0] * 100 - $moedas[0] * 1 - $moedas[1] * 0.5 - $moedas[2] * 0.25) * 100), 10);
$moedas[4] = intdiv((($valor - $notas[4] * 5 - $notas[3] * 10 - $notas[2] * 20 - $notas[1] * 50 - $notas[0] * 100  - $moedas[0] * 1 - $moedas[1] * 0.5 - $moedas[2] * 0.25 - $moedas[3] * 0.10) * 100), 5);
$moedas[5] = intdiv((($valor - $notas[4] * 5 - $notas[3] * 10 - $notas[2] * 20 - $notas[1] * 50 - $notas[0] * 100  - $moedas[0] * 1 - $moedas[1] * 0.5 - $moedas[2] * 0.25 - $moedas[3] * 0.10 - $moedas[4] * 0.05) * 100), 1);


echo "NOTAS:";
echo PHP_EOL;
for ($i = 0; $i < 6; $i++) {
    echo $notas[$i] . " nota(s) de R$ " . number_format($notas_ideal[$i], 2, '.', '');
    echo PHP_EOL;
}
echo "MOEDAS:";
echo PHP_EOL;
for ($i = 0; $i < 6; $i++) {
    echo $moedas[$i] . " moeda(s) de R$ " . number_format($moedas_ideal[$i], 2, '.', '');
    echo PHP_EOL;
}




//echo var_dump($notas);

//echo var_dump($moedas);
