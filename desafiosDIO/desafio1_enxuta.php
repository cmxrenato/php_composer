
<?php
$idade = (int) fgets(STDIN);

$ano = intdiv($idade, 365);
$resto = $idade % 365;

$mes = intdiv($resto, 30);
$dias = $resto % 30;

echo $ano . " ano(s)\n";
echo $mes . " mes(es)\n";
echo $dias . " dia(s)\n";
?>
