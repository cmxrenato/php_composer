<?php
//$valor = (float) fgets(STDIN);
$valor =4524; 

//notas:(100,50,20,10,5,2)
$notas = array();
//moedas: (1.00,0.50,0.25,0.10,0.05,0.01)
$moedas = array();

$notas[0]= intdiv($valor,100);
$notas[1]= intdiv(($valor-$notas[0]*100),50);
$notas[2]= intdiv(($valor-$notas[1]*50-$notas[0]*100),20);
$notas[3]= intdiv(($valor-$notas[2]*20-$notas[1]*50-$notas[0]*100),10);
$notas[4]= intdiv(($valor-$notas[3]*10-$notas[2]*20-$notas[1]*50-$notas[0]*100),5);
$notas[5]= intdiv(($valor-$notas[4]*5 -$notas[3]*10 -$notas[2]*20-$notas[1]*50-$notas[0]*100),2);
 
echo var_dump($notas);
?>

