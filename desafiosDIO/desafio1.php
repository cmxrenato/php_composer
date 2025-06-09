<?php
  // Leia o Desafio e siga o código base abaixo para resolvê-lo. Algumas dicas:
  // 1. Use a função "fgets(STDIN)" para ler uma linha de Entrada;
  // 2. Use a função "echo" formatar e imprimir sua(s) Saída(s).

 //TODO: Complete os espaços em branco com uma possível solução para o problema
  
$idade = (int) fgets(STDIN);
$ano = 0;
$resto_ano = 0;
$mes = 0;
$resto_mes = 0;
$dias = 0;

if($idade > 365)
{
    $ano = intdiv($idade,365);
    $resto_ano = $idade%365;
    if ($resto_ano >= 30)
    {
        $mes = intdiv($resto_ano,30);
        $dias = $resto_ano%30;
    }else{
        $dias = $resto_ano;
    }

}else if($idade >= 30)
{
    $mes = intdiv($idade,30);
    $resto_mes = $idade%30;
    if ($resto_mes >= 0)
    {
        $dias = $resto_mes;
    }

} else
{
    $dias = $idade;
}    






echo $ano . " ano(s)";
echo PHP_EOL;
echo $mes . " mes(es)";
echo PHP_EOL;
echo $dias . " dia(s)";










?>
