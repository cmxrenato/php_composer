<?php

//echo date('d/m/y');
//echo PHP_EOL;

$data = new DateTime();
var_dump($data);

echo $data->format('d-m-y') . PHP_EOL;

echo $data->format('H:i:s') . PHP_EOL;

$intervalo = new DateInterval('P5Y10M5DT10H50M10S');
$data->sub($intervalo);
var_dump($data);
